<?php

include_once ('Dblog.php');
include_once ('querySeller.php');

$email = $_COOKIE['emal'];
$lsg = new querySeller($email);
$lsg->getUsername();

/*session_start();
include ('SellDblog.php');
include ('dblog.php');
$email = $_COOKIE['emal'];

$sqllog = "SELECT firstname, lastname FROM users WHERE email = '$email'";

$rslog = mysqli_query($sqllog);
$res = mysqli_fetch_array($rslog);
$first= $res['firstname'];
$last = $res['lastname'];

if(!isset($_COOKIE['fname'])){
    setcookie('fname', $first, time() + 7*24*60*60, '/');
    setcookie('lname', $last, time() + 7*24*60*60, '/');
} else {

}*/






?>
