<?php
include('dblog.php');

if (isset($_POST['submit']))
{
    $logins = $useemnameg = $logerr = $sqllog = $sqllog1 = "";
    $usemname = $_POST['uname'];
    $paswd = $_POST['psw'];

        $sqllog = "SELECT * FROM users WHERE email = '$usemname' AND passw = '$paswd'";
        $rslog = mysqli_query($link, $sqllog);
        $checklog1 = mysqli_fetch_array($rslog, MYSQLI_NUM);
            if($checklog1[0]>1){
                $status1 = "true";
                $_COOKIE[$status1]=$logins;
                $_COOKIE['savedemail']=$useemnameg;
                $logerr = "false";
                session_destroy();
                echo 'it logs in but fuck you regardless';
            }
            else{
                $status1 = "false";
                $logerr = "true";
            }


};


?>