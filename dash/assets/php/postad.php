<?php
include ('dblog.php');
if (isset($_POST['submit']))
{
    $title=$_POST['adtit'];
    $condition = $_POST['cond'];
    $type = $_POST['ctype'];
    $price = $_POST['price'];
    $imglink = $_POST['link'];
    $brand = $_POST['brand'];
    $email = $_COOKIE['emal'];

    $sqllog = "SELECT id FROM users WHERE email = '$email'";
    $rslog = mysqli_query($link, $sqllog);
    $res = mysqli_fetch_array($rslog);
    $id= $res['id'];


    $sql="INSERT INTO advert (title, vcondition, type, brand, price, sellerid, img, status) VALUES ('$title', '$condition', '$type', '$brand','$price', '$id', '$imglink', 'p')";
    $addad = mysqli_query($link, $sql);

    header("Location: ../newad.php");

}




?>
