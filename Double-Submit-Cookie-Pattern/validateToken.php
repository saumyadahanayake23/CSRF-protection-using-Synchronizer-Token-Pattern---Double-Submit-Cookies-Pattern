<?php

session_start();

if (!isset ($_SESSION['LoginState'])){
    ob_start();
    header('Location: ./login.html');
    ob_end_flush();
    die();
}

$csrfUser = $_POST['Token'];

$csrfCookie = $_POST['CsrfCookie'];
$cookieValue = $_COOKIE[$csrfCookie];

if ($csrfUser == $cookieValue){
  $_SESSION['status'] = "Data Transfer Success..";
  setcookie("DefineInformation",$_POST['phonenumber'].",".$_POST['dataamount']);
}else{
  $_SESSION['status'] = "Invalid Token!";
  setcookie("DefineInformation","".","."");
}
header('Location: ./endpoint.php');
?>