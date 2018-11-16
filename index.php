<?php       

include_once 'db.php';

include_once 'components/header.php';
// šeit mēs inklūdēsim saturu no lapām starp header un footer
$page = isset($_GET['page']) ? $_GET['page'] : 0; //GET ir superglobāls mainīgais - tam jau ir dati iekšā. + izmantojam superīso if pierakstu ar if un else

switch ($page) { //izmantojam switch, lai paņemtu info no vajadzīgās lapas
case '2':
    include_once 'components/page2.php';
    break;

case '3':
    include_once 'components/page3.php';
    break;

default:
    include_once 'components/page1.php';
    break;
}

include_once 'components/footer.php';
