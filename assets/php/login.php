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
                $q1 = mysqli_query("SELECT firstname FROM users WHERE email = '$emal'");
                $fquery = mysqli::_fetch_array($q1);
                echo $fquery['fname'];
                $q2 = mysqli_query("SELECT lastname FROM users WHERE email = '$emal'");
                $lname = mysqli_fetch_array($q2);

                setcookie("finame", $fname, "/" );

/*        header("Location: ../../dash/index.php");*/
        }
            else{
                $status1 = "false";
                $_COOKIE[$status1]=$logins;
                $_SESSION['err']= "Incorrect Login Information";
                header("Location: ../../login.php");

            }


};


?>