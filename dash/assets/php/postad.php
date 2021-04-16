<?php
include_once ('usercontrol.php');
include_once ('queryuser.php');
include_once ('subAd.php');

if (isset($_POST['submit'])) {
    $title = $_POST['adtit'];
    $condition = $_POST['cond'];
    $type = $_POST['ctype'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $email = $_COOKIE['emal'];
    $dpr = $_POST['dprice'];
    $filename = $_FILES['file']['name'];
    $destination = '../../../imgstore/' . $filename;

    $ur = new usercontrol($email);
    $ur->queryUserDetails();
    $id = $ur->storeId();

    $rs = new subAd($title, $condition, $type, $brand, $price, $dpr, $id, $filename);
    $rs->addAd();

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
        $rs->addImg();
        header('location: ../../newad.php');
    }
}




?>
