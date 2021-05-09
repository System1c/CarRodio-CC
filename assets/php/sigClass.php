<?php
include_once 'verifysig.php';
class sigClass extends verifysig
{
    public $fname;
    public $lname;
    public $eml;
    public $psw;
    public $phr;
    public $type;

    function __construct($fn, $ln, $eml, $pas, $ph, $tpe)
    {
        $this->fname = $fn;
        $this->lname = $ln;
        $this->email = $eml;
        $this->passw = $pas;
        $this->phr = $ph;
        $this->type = $tpe;
    }

    function sigDb()
    {
        $sDb = new verifysig($this->fname, $this->lname,$this->email, $this->passw, $this->phr, $this->type);
        $num1Rows = $sDb->vsDb();
        if ($num1Rows != 0) {
            $this->inc();
        } else {
            $sDb->signDb();
            if($this->type == 's') {
                header('location: dash/index.php');
            }
            else{
                header('location: buyer-dash/allad.php');
            }
        }
    }

    function inc(){
        setcookie('status', 'true', time() + 7*24*60*60, '/');
    }
}