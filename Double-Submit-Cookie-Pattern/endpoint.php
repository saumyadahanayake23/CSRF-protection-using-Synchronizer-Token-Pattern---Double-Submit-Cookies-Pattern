<?php

session_start();

if (!isset ($_SESSION['LoginState'])){
    ob_start();
    header('Location: /login.html');
    ob_end_flush();
    die();
}

if(isset($_COOKIE["DefineInformation"])){
    $getInformation = explode(",", $_COOKIE["DefineInformation"]);
    $phoenumber = $getInformation[0];
    $dataamount = $getInformation[1];
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EndPoint</title>
  </head>

  <body style="background-color:#B8D1D5;">
    <center><label><?php echo $_SESSION['status']; ?></label></center>
    <center><label><br>Phone Number : <?php echo $phoenumber ?></label></center>
    <center><label><br>Data Amount : <?php echo $dataamount ?></label></center>
  </body>
</html>