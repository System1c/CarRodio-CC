<?php
include_once ('insMsg.php');

$nme = $_POST['name'];
$sub = $_POST['email'];
$msg = $_POST['message'];
$aid = $_POST['aid'];
$sid = $_POST['sid'];


$mes = new insMsg($sub, $sid, $aid, $msg);
$mes->insMes();

