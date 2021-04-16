<?php
include_once ('queryEdAd.php');
include_once('editAdQ.php');
session_start();

$aid = $_SESSION['adid'];

$lsg = new queryEdAd($aid);
$res = $lsg->queryEAd();
foreach ($res as $re) {
    $tit = $re['title'];
    $cond = $re['vcondition'];
    $stype = $re['type'];
    $brd = $re['brand'];
    $prc = $re['price'];
    $oprc = $re['oldpr'];
}


if (isset($_POST['update'])) {
    $aid2 = $_SESSION['adid'];
    $title = $_POST['adtit'];
    $condition = $_POST['cond'];
    $type = $_POST['ctype'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $email = $_COOKIE['emal'];
    $dpr = $_POST['dprice'];

    $filename = $_FILES['file']['name'];
    $destination = '../../../imgstore/' . $filename;

    $rs = new editAdQ($aid2, $title, $condition, $type, $brand, $price, $dpr, $filename);
    $rs->updAd();

    // name of the uploaded file

    // destination of the file on the server

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];

    if (!in_array($extension, ['jpg', 'jpeg'])) {
        echo "You file extension must be .jpeg or .jpg";
    } elseif ($_FILES['file']['size'] > 20000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        move_uploaded_file($file, $destination);
        $rs->updImg();
        header('location: ../../editAd.php');
    }
}
