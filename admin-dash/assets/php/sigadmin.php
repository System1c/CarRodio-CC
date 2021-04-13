<?php
include_once('Dblog.php');
include_once('regad.php');
include_once('verifyregad.php');

if(isset($_SERVER['REQUEST_METHOD'])=="POST"
&& isset($_POST['submit'])) {

    $fename = $_POST["adfname"];
    $lename = $_POST["adlname"];
    $remail = $_POST["ademail"];
    $pswr = $_POST["repswr"];

    $lgres = new regad($fename, $lename, $remail, $pswr);
    $lgres->sigDb();
}
