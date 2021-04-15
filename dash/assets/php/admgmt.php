<?php
session_start();

include_once ('adcontrol.php');
include_once ('queryad.php');
include_once ('updad.php.php');
include_once ('chkaddb.php');
$title = $vcondition = $type=  $brand= $price = "";
$err = "false";



if (isset($_POST['subch'])) {

    $_SESSION["titleErr"] ="";
    $_SESSION["vconditionErr"] ="";
    $_SESSION["typeErr"] ="";
    $_SESSION["brandErr"] ="";
    $_SESSION["priceErr"] ="";
    if (empty($_POST["title"])) {
        $_SESSION["titleErr"] = "Please Enter Title";
        $_SESSIONerr = "true";

    } else {

        $fename = $_POST["title"];
    }

    if (empty($_POST["vcondition"])) {
        $_SESSION["vconditionErr"] = "Please Enter Vehicle Condition";
        $err = "true";


    } else {
        $lename = $_POST["vcondition"];
    }

    if (empty($_POST["type"])) {
        $_SESSION["typeErr"] = "Please Enter Vehicle Type";
        $err = "true";

    } else {

        $remail = $_POST["type"];
    }

    if (empty($_POST["brand"])) {
        $_SESSION["brandErr"] = "Please Enter A Brand";
        $err = "true";
    } else{
        $pass = $_POST["brand"];
    }
    if (empty($_POST["price"])) {
        $_SESSION["priceErr"] = "Please Enter A Price";
        $err = "true";
    } else{
        $pass = $_POST["price"];
    }


    echo $err, $title, $vcondition, $type, $brand, $price;
    if($err=="false"){
        $lgres = new updad($_SESSION['idd'], $title, $vcondition, $type, $brand,$price);
        $lgres->runadCheck();
        header('location: ../../allad.php');
    }

}


/*

if ($err == "false") {
    $err == "false";
    include ("assets/php/signup.php");
    if ($status == "true"){
        $emailErr = "This Email is already in use";
        $status = "false";
        echo $emailErr;
    }

}*/


if(isset($_POST['schus'])) {


    $srchm = $_POST["uemail"];

    $ur = new adcontrol($srchm);
    $ur->queryAdDetails();

    $_SESSION['title'] = $ur->showTitle();
    $_SESSION['vcondition'] = $ur->showVcondition();
    $_SESSION['type'] = $ur->showType();
    $_SESSION['brand'] = $ur->showBrand();
    $_SESSION['price'] = $ur->showPrice();
    $id = $ur->storeId();
    $_SESSION['idd'] = $id;



}

?>
