<?php
class verifysig extends Dblog
{

    private $v1;
    private $v2;
    private $v3;
    private $v4;
    private $v5;
    private $tpwr;
    private $v6;

    function __construct($fn, $ln, $emal, $paas, $ph, $tp)
    {
        $this->v1 = $fn;
        $this->v2 = $ln;
        $this->v3 = $emal;
        $this->v4 = $paas;
        $this->v5 = $ph;
        $this->v6 = $tp;
    }

    function vsDb()
    {
        $sql = "SELECT * FROM users where email='$this->v3'";
        $result = $this->conn()->query($sql);
        $numRows = $result->num_rows;
        return $numRows;
    }

    function signDb(){
        $this->tpwr = $tb = hash('sha256', $this->v4);
    $ssql = "INSERT INTO users (firstname, lastname, email, passw, phrase, type) VALUES ('$this->v1','$this->v2','$this->v3','$this->tpwr', '$this->v5', '$this->v6')";
    $this->conn()->query($ssql);
    setcookie('emal', $this->v3, time() + 7 * 24 * 60 * 60, '/');
    }



}