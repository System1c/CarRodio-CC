<?php
class verifysig extends Dblog
{

    private $v1;
    private $v2;
    private $v3;
    private $v4;

    function __construct($fn, $ln, $emal, $paas)
    {
        $this->v1 = $fn;
        $this->v2 = $ln;
        $this->v3 = $emal;
        $this->v4 = $paas;
    }

    function vsDb()
    {
        $sql = "SELECT * FROM users where email='$this->v3'";
        $result = $this->conn()->query($sql);
        $numRows = $result->num_rows;
        return $numRows;
    }

    function signDb(){
    $ssql = "INSERT INTO users (firstname, lastname, email, passw) VALUES ('$this->v1','$this->v2','$this->v3','$this->v4')";
    $this->conn()->query($ssql);
    setcookie('emal', $this->v3, time() + 7 * 24 * 60 * 60, '/');
    }



}