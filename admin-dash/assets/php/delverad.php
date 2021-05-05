<?php
include_once ('rejverAd.php');
include_once ('Dblog.php');
if (isset($_POST['verify']))
{
    $id = $_POST['verify'];

    $ver = new rejverAd($id);
    $ver->verAd();
    header("Location: ../../adstat.php");
}

if (isset($_POST['reject']))
{
    $id = $_POST['reject'];

    $ver = new rejverAd($id);
    $ver->rejAd();
    header("Location: ../../adstat.php");
}


?>