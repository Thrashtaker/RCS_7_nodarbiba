<?php //atverošais PHP kods - vienmēr

$someNumber = 123; // mainīgie PHP vienmēr sākas ar $ zīmi + allaž beigās semikols jāliek
$someFloat = 3.14;
$someText = 'foo'; //var likt gan single, gan double quote. Parast ileito PHP single
$someLongText = 'arafasfasfa
asfasfafa
asfafafa
asfaasfaf
asfasasfa'; //var sadalīt tekstu vairākās rindas, bet, ievietojot lapā, viss šis formatējums tiks ignorēts
$someTrue = true; //boolean
$someNothing = null; //nav vērtības

$someArray = [
    'asd',
    'asfa',
    true,
    123,
]; //masīvs var saturēt dažādu tipu vērtības. Pirms 5.2 atšķīrās masīva sintakse = array ([]), tagad = []

//lai izdrukātu 2. masīva stringu:
echo $someArray[1];

$someAssociativeArray = [
    5 => 'foo',
    6 => 'bar',
'baz' => 'biz',
]; //asociatīvs masīvs - piedēvējam citu vērtību kādam masīva elementam

$person = [
    'name' => 'John',
    'lastName' => 'Doe',
    'age' => '21', //pēdējam elementam masīvā atstāt komatu ir labā prakse
];
echo $person['age']; //izdrukājam ārā 3. masīva elementu

$someMultiDimensionalArray = [ //vairākdimensiju masīvi
[
    'name' => 'John',
    'lastName' => 'Doe',
    'age' => '21', 
],
[
    'name' => 'John',
    'lastName' => 'Doe',
    'age' => '21', 
]
];
echo $someMultiDimensionalArray[1]['lastName']; //norādam ceļu, kur atrodas izdrukājamais elements
//masīvā var miksēt asociatīvos stringus un parastos + dažādus elementu tipus

$someMultiDimensionalArray[] = [ // šādi pievienojam klāt pie esoša masīva vērtību, bet, ja kvadrātiekavās norādām skaitli, tad tas masīva elements tiks pārrakstīts
    'name' => 'Billy',
    'lastName' => 'Doe',
    'age' => '23', 
];

// +
// -
// /
// *
// % - dalījums bez atlikuma
echo 'foo ' . 'bar'; //PHP stringu savienošana notiek ar punktu, nevis komatu.
echo 1 + 1; // 2
echo 1 . 1; // 11

$num = 1; 
$num++; // pievienojam vienu vērtību
--$num; //noņemam vienu vērtību
$num += 2; //pievienojam divas vērtības utt.
echo $num;

// ==
// !=
// <
// >
// <=
// >=

// ===
// !==

//CIKLI:

$num1 = 1;
$num2 = 2;

if ($num1 = 1 && $num2 == 2) { // te ir arī ||

} else if ($num1) {

} else {

}

switch($num1) {
    case 'value':
    #code
    break;
    
    default:
    #code
    break;
}

while(false) {

}

do {

} while (false);

for ($i=0; $i < 10; $i++) { //izdrukājam visus skaitļu no 0 līdz 9
    echo $i;
}

//FIZZBUZZ uzdevums (izpildīts):


for ($i = 0; $i <= 30; $i++) {
    
    if ($i % 2 == 0 && $i % 3 == 0) {
        echo 'fizzbuzz', '<br>';
    
    } else if ($i % 2 == 0) {
        echo 'fizz', '<br>';

    } else if ($i % 3 == 0) {
        echo 'buzz', '<br>';
    }
    else {
        echo $i, '<br>';
    }

}

//FUNKCIJAS:
$foo = 'RTU is amazing';
echo str_replace('RTU', 'RCS', $foo); //stringa replace
echo strpos($foo, 'is'); //meklējam vai ir (un, ja ir, tad, kur atrodas) atbilstošs strings iekšā tekstā, šajā gadījumā 4. pozīcijā

$string = 'a,b,c,d,e,f';
$array = explode(',', $string); // metode explode, kuras 1. elements ir atdalītājs, bet otrais elements ir pats strings
var_dump($array); //debagošanas metode, kas izvadīs mainīgā tipu un visu pārējo

//alternatīva:
$string2 = 'abcdef';
$array2 = str_split($string2);
$backToString = implode('', $array2); //pretēja metode, kas atkal saliek kopā

echo 123 . ''; //stringam piekontatinējam pēdiņas, tā padarot to par stringu
echo intval('123aa1'); // šādi stringu par int pārtaisām (viss, kas nav int, tiek norauts nost (un arī viss aiz tā))
echo floatval('3.144aa1'); //šādi floatam

function addTwoNumbers(int $num1, int $num2 = 10): int { //kopš 7. PHP versijas varam arī norādīt mainīgā tipu, šajā gadījumā int + varam ielikt default vērtību, kas tiks izmantota, ja mums nebūs iedota nekāda vērtība
    return $num1 + $num2;
}
echo '<br><br>';
echo addTwoNumbers(1,2); //šis izdrukā skaitli 3
echo addTwoNumbers(1); //šis izdrukā skaitli 11






?> 
<!-- aizverošais PHP kods - ja lietosim failu tikai PHP kodam, tad aizverošais nav pat vajadzīgs -->