<?php
include_once ('SellDblog.php');
include_once ('seller.php');

$email = $_COOKIE['aemal'];
$lsg = new Seller($email);
?>
