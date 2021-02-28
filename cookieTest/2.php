<?php


function inAscii($getArg) {


foreach($getArg as $i) {

$ind = array_keys($getArg, $i);

    $i = str_split($i);


for ($j = 0; $j <= count($i) - 1; $j++) {


    $i[$j] = ord($i[$j]) + 5;
    $i[$j] = chr($i[$j]);


}

$i = implode('', $i);

switch($ind[0]) {

    case 0:
setcookie('login', $i);
break;
    case 1:
setcookie('password', $i);
break;
    case 2:
setcookie('auth', $i);
break;

}

}

}

function fromAscii() {

$getCookie = $_COOKIE;

    foreach($getCookie as $i) {
    
    $ind = array_keys($getCookie, $i);
    
        $i = str_split($i);
    
    
    for ($j = 0; $j <= count($i) - 1; $j++) {
    
    
        $i[$j] = ord($i[$j]) - 5;
        $i[$j] = chr($i[$j]);
    
    
    }
    
$i = implode('', $i);

if ($ind[0] == 0) {

$getCookie[$ind[0]] = $i;

}

if ($ind[0] == 1) {

$getCookie[$ind[0]] = $i;

}

if ($ind[0] == 2) {

$getCookie[$ind[0]] = $i;

}

    }
    
return $getCookie;

    }


    if (isset($_POST) &&  $_POST["log"] == "pass")
    {

        $login = 'Sergey';
        $password = 'IceCream58';
        $auth = 'true';

$futureCookie = array($login, $password, $auth);

inAscii($futureCookie);

    //    $cookie = "true+red";
    //    setcookie("auth" , "true");
    //  setcookie("session" , $cookie);
    //    setcookie('login', 'Сергей');
    
    }

    if (isset($_COOKIE))
    {

$ArrCookie = fromAscii();

        $login = $ArrCookie['login'];
        require_once('admin.php');
    } 
    else 
    {
        require_once('start.php');
    }
?>