


<?php

include_once('delupAd.php');
include_once('SellDblog.php');
if (isset($_POST['update'])) {
    $id = $_POST['update'];

    $ver = new delupAd($id);
    $ver->upAd();
    header("Location: ../../allad.php");
}

if (isset($_POST['delete'])) {
    $id = $_POST['delete'];

    $ver = new delupAd($id);
    $ver->delAd();
    header("Location: ../../allad.php");

}




