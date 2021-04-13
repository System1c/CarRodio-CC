<?php
class Verify extends Dblog
{

    private $v1;
    private $v2;

    function __construct($emal, $paas)
    {
        $this->v1 = $emal;
        $this->v2 = $paas;
    }

    function vDb()
    {
        $sql = "SELECT * FROM users where email='$this->v1' AND passw = '$this->v2'";
        $result = $this->conn()->query($sql);
        $numRows = $result->num_rows;
        return $numRows;
    }

    function avDb()
    {
        $asql = "SELECT * FROM admin where email='$this->v1' AND passw = '$this->v2'";
        $aresult = $this->conn()->query($asql);
        $anumRows = $aresult->num_rows;
        return $anumRows;
    }



}