<?php

session_start();

$_SESSION['LoginState'] = 'SET';

$sessionID = session_id();

$SessionExpiry = time()+60*60*24;
setcookie('Session', $sessionID, $SessionExpiry, '', '', '', FALSE);

$CSRF_TOKEN = hash('sha256', $sessionID.rand(1000,10000));

$TokenExpiry = time()+60*60*24;
setcookie($sessionID, $CSRF_TOKEN, $TokenExpiry, '', '', '', FALSE);

header('Location: ./dataTransfer.php');
?>