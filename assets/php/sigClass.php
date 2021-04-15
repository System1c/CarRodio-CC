<?php
include_once 'verifysig.php';
class sigClass extends verifysig
{
    public $fname;
    public $lname;
    public $eml;
    public $psw;

    function __construct($fn, $ln, $eml, $pas)
    {
        $this->fname = $fn;
        $this->lname = $ln;
        $this->email = $eml;
        $this->passw = $pas;
    }

    function sigDb()
    {
        $sDb = new verifysig($this->fname, $this->lname,$this->email, $this->passw);
        $num1Rows = $sDb->vsDb();
        if ($num1Rows != 0) {
            $this->inc();
        } else {
            $sDb->signDb();
            header('location: dash/index.php');
        }


    }

    function inc(){
        setcookie('status', 'true', time() + 7*24*60*60, '/');
    }
}