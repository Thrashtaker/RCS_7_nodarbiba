<?php
include_once 'db.php'; //inklūdējam failu, kas 

$errors = false; //izveidojam mainīgo, lai pārbaudītu vai nav erors

if (empty($_POST['email'])) { //pārbaudām vai email ir tukšs ar empty metodi un $_POST, kas ir superglobāls mainīgais utt. citur
    $errors = true;
}
if (empty($_POST['password'])) { 
    $errors = true;
}
if (empty($_POST['first_name'])) { 
    $errors = true;
}
if (empty($_POST['last_name'])) { 
    $errors = true;
}
if ($_POST['password'] != $_POST['password2']){ //pārbaudām vai abas paroles ir vienādas 
    $errors = true;
}

if ($errors){
    // redirect back with error message
    //header('Location: index.php?page=3&error'); šo var nelietot, jo tālāk mēs iedodam session erroru
    $_SESSION['error'] = true;
} else {
    // insert in the database (DB)

    //conn ir objekts, lai tam izsauktu metodi (prepare) liekam ->, bet JS, Java un C# būtu ar punktiņu metodes izsaukšana
    // šo darām (kas tālāk), lai nepazaudētu datubāzi => ieliekam query iekš query, izmantojot drop table users; piemēram
    // šo sauc par sanitizēšanu!!!!!!!!!
    $query = $conn->prepare("
        INSERT INTO 
            users 
        SET 
            email = ?, 
            password = ?, 
            name = ?, 
            last_name = ?
    "); 
    //ar md5 encriptējam paroli - drošā parole (hashotā)
    $result = $query->execute([
        $_POST['email'],
        md5$_POST['password'],
        $_POST['first_name'],
        $_POST['last_name'],
    ]);
    if ($result) {
        //header('Location: index.php?page=3&success');
        $_SESSION['success'] = true;
        header('Location: index.php?page=3');
    } else {
        $_SESSION['error'] = true;
        header('Location: index.php?page=3');
        //header('Location: index.php?page=3&error');
    }
}

//var_dump($_POST);