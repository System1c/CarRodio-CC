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
                setcookie('err', 'No errors', time() + 7*24*60*60, '/');
                setcookie('emal', $emal, time() + 7*24*60*60, '/');
                header("Location: ../../dash/index.php");


        }
            else{

                $sqllogad = "SELECT * FROM admin WHERE email = '$emal' AND passw = '$paswd'";
                $rslogad = mysqli_query($link, $sqllogad);
                $countad = mysqli_num_rows($rslogad);
                if($countad == 1){
                    $status1 = "true";
                    $_COOKIE[$status1]=$logins;
                    setcookie('err', '', time() + 7*24*60*60, '/');
                    setcookie('aemal', $emal, time() + 7*24*60*60, '/');
                    header("Location: ../../admin-dash/index.php");
                }
                else{
                    $status1 = "false";
                    $_COOKIE[$status1]=$logins;
                    setcookie('err', 'Login information is incorrect!', time() + 7*24*60*60, '/');
                    header("Location: ../../login.php");
                    setcookie('emal', '', time() + 7*24*60*60, '/');
                    setcookie('aemal', '', time() + 7*24*60*60, '/');
                }

            }


};


?>