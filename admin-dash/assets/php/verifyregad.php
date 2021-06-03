<?php
include_once ('dblog.php');
class verifyregad extends Dblog
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
        $sql = "SELECT * FROM admin where email='$this->v3'";
        $result = $this->conn()->query($sql);
        $numRows = $result->num_rows;
        return $numRows;
    }

    function signDb(){
        $encpw = hash('sha256', $this->v4);
        $ssql = "INSERT INTO admin (firstname, lastname, email, passw) VALUES ('$this->v1','$this->v2','$this->v3','$encpw')";
        $this->conn()->query($ssql);
    }
}