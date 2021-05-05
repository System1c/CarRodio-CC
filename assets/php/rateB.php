<?php

include_once ('subRate.php');

$rate = $_POST['rate'];
$rev = $_POST['rev'];
$id = $_POST['submit'];
$sid = $_POST['seller'];


$ratesub = new subRate($id, $rate, $rev, $sid);
$ratesub->subRate();

if (isset($_POST['submit'])){
    echo '<script language="javascript">';
    echo 'alert("Review Successfully Submitted")';
    echo '</script>';
}


header("Location: ../../car-details.php?id=$id");
