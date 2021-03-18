<?php
session_start();
include ('dblog.php');
$email = $_COOKIE['aemal'];

$sqllog = "SELECT firstname, lastname FROM admin WHERE email = '$email'";
$rslog = mysqli_query($link, $sqllog);
$res = mysqli_fetch_array($rslog);
$first= $res['firstname'];
$last = $res['lastname'];

if(!isset($_COOKIE['afname'])){
    setcookie('afname', $first, time() + 7*24*60*60, '/');
    setcookie('alname', $last, time() + 7*24*60*60, '/');
} else {
    setcookie('afname', $first, time() + 7*24*60*60, '/');
    setcookie('alname', $last, time() + 7*24*60*60, '/');
}

?>
