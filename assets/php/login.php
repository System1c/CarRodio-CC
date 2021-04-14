<?php
include_once('../../admin-dash/assets/php/Dblog.php');
include_once('logClass.php');
include_once('Verify.php');
session_start();

if (isset($_POST['submit']))
{
    $logins = $useemnameg = $logerr = $sqllog =  $status1 = "";
    $emal = $_POST['eml'];
    $paswd = $_POST['psw'];

    $logres = new logClass($emal, $paswd);
    $logres->checkdb();
};


?>