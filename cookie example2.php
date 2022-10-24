<?php

session_start();

if(!isset($_SESSION['check last question'])){

//get last page visited
$lastPage = $_COOKIE['last_page'];

//expire cookie
setcookie('last_page', null, time() - 1000);

//forward to last page
header('Location: ' . $_COOKIE['last_page']);
exit(0);

}

//prevent doing redirect every time
$_SESSION['checked_last_page'] = true;

//set the last page in a cookie
setcookie('last_page', $_SERVER['REQUEST_URI'], time() + 3600 * 24 * 31);

?>