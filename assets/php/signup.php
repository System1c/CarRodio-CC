<?php
include ('dblog.php');

if(isset($_SERVER['REQUEST_METHOD'])=="POST"
&& isset($_POST['signup'])) {
    $status = $user = "";


    $sql2 = "SELECT * FROM users WHERE email = '$remail'";
    $rs = mysqli_query($link, $sql2);
    $check = mysqli_fetch_array($rs, MYSQLI_NUM);
    if ($check[0] > 1) {
        $status = "true";
        $_COOKIE[$status] = $user;
    } else {
        $sql = "INSERT INTO users (firstname, lastname, email, passw) VALUES ('$fename','$lename','$remail','$pswr')";
        $regu = mysqli_query($link, $sql);

        setcookie('emal', $remail, time() + 7 * 24 * 60 * 60, '/');

        $email = $_COOKIE['emal'];


        header('location: dash/index.php');
    }
}
?>