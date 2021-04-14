<?php
include_once ('dblog.php');
include_once ('user.php');

$email = $_COOKIE['aemal'];
$lsg = new User($email);

/*$email = $_COOKIE['aemal'];

$sqllog = "SELECT firstname, lastname FROM admin WHERE email = '$email'";
$rslog = mysqli_query($link, $sqllog);


if(!isset($_COOKIE['afname'])){
    setcookie('afname', $first, time() + 7*24*60*60, '/');
    setcookie('alname', $last, time() + 7*24*60*60, '/');
} else {
    setcookie('afname', $first, time() + 7*24*60*60, '/');
    setcookie('alname', $last, time() + 7*24*60*60, '/');
}*/

?>
