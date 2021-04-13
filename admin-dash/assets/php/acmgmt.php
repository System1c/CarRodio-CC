<?php
include_once ('usercontrol.php');
include_once ('queryuser.php');

    $srchm = $_POST["uemail"];

    $ur = new usercontrol($srchm);
    $ur->queryUserDetails();

    $fname = $ur->showFname();
    $lname = $ur->showLname();
    $eml = $ur->showEmail();
    $id = $ur->storeId();
?>