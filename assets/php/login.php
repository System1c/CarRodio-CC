<?php
include('dblog.php');
session_start();

if (isset($_POST['submit']))
{
    $logins = $useemnameg = $logerr = $sqllog =  $status1 = "";

    $emal = $_POST['eml'];
    $paswd = $_POST['psw'];
    $sqllog = "SELECT * FROM users WHERE email = '$emal' AND passw = '$paswd'";
    $rslog = mysqli_query($link, $sqllog);
    $count = mysqli_num_rows($rslog);

    if($count == 1){
                $status1 = "true";
                $_COOKIE[$status1]=$logins;
/*              header("Location: ../../dash/index.php");*/
        }
            else{
                $status1 = "false";
                $_COOKIE[$status1]=$logins;
                $_SESSION['err']= "Incorrect Login Information";
                header("Location: ../../login.php");

            }


};


?>