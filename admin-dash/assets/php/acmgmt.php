<?php
session_start();

include_once ('usercontrol.php');
include_once ('queryuser.php');
include_once ('updacc.php');
include_once ('checkdb.php');
$fename = $lename = $pswr=  $remail = "";
$err = "false";



if (isset($_POST['subch'])) {

    $_SESSION["fenameErr"] ="";
    $_SESSION["lenameErr"] ="";
    $_SESSION["emailErr"] ="";
    $_SESSION["passErr"] ="";
    if (empty($_POST["fname"])) {
        $_SESSION["fenameErr"] = "Please Enter First Name";
        $_SESSIONerr = "true";

    } else {

        $fename = $_POST["fname"];
    }

    if (empty($_POST["lname"])) {
        $_SESSION["lenameErr"] = "Please Enter Last Name";
        $err = "true";


    } else {
        $lename = $_POST["lname"];
    }

    if (empty($_POST["email"])) {
        $_SESSION["emailErr"] = "Please Enter Email";
        $err = "true";

    } else {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION["passErr"] = "Invalid email format";
            $err = "true";
        }
        $remail = $_POST["email"];
    }

    if (empty($_POST["pswr"])) {
        $_SESSION["passErr"] = "Please Enter A Password";
        $err = "true";
    } else{
        $pass = $_POST["pswr"];
    }
    echo $err, $fename, $lename, $remail, $pass;
    if($err=="false"){
        $lgres = new updacc($_SESSION['idd'], $fename, $lename, $remail, $pass);
        $lgres->runCheck();
        header('location: ../../userc.php');
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

    $ur = new usercontrol($srchm);
    $ur->queryUserDetails();

    $_SESSION['fname'] = $ur->showFname();
    $_SESSION['lname'] = $ur->showLname();
    $_SESSION['eml'] = $ur->showEmail();
    $id = $ur->storeId();
    $_SESSION['idd'] = $id;



}

?>