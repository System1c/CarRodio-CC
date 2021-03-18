<?php
include ('dblog.php');
if (isset($_POST['signup'])) {

    $fname=$_POST['fname'];
    $lname = $_POST['lname'];
    $remail = $_POST['remail'];
    $pswr = $_POST['pswr'];


    $sql="INSERT INTO users (firstname, lastname, email, passw) VALUES ('$fname','$lname','$remail','$pswr')";
    $regu = mysqli_query($link, $sql);

    setcookie('emal', $remail, time() + 7*24*60*60, '/');

    $email = $_COOKIE['emal'];





    header('location: ../../dash/index.php');
};
?>
