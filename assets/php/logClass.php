<?php
include_once 'Verify.php';
class logClass extends Verify
{
    public $email;
    public $passw;

    function __construct($eml, $pas)
    {
        $this->email = $eml;
        $this->passw = $pas;
    }

    function checkdb()
    {
        $sDb = new Verify($this->email, $this->passw);
        $numRows = $sDb->vDb();
        if ($numRows > 0) {
            $this->uLog();
        } else {
                $anumRows = $sDb->avDb();
                if($anumRows > 0){
                    $this->alog();
                }
                else{
                    setcookie('err', 'Login information is incorrect!', time() + 7*24*60*60, '/');
                    header("Location: ../../login.php");
                    setcookie('emal', '', time() + 7*24*60*60, '/');
                    setcookie('aemal', '', time() + 7*24*60*60, '/');
                }
        }


    }

    function uLog(){
        $status1 = "true";
        setcookie('err', 'No errors', time() + 7*24*60*60, '/');
        setcookie('emal', $this->email, time() + 7*24*60*60, '/');
        header("Location: ../../dash/index.php");
    }

    function alog(){
        $status1 = "true";
        setcookie('err', '', time() + 7*24*60*60, '/');
        setcookie('aemal', $this->email, time() + 7*24*60*60, '/');
        header("Location: ../../admin-dash/index.php");
    }
}