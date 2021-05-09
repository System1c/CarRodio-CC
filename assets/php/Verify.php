<?php
include_once('Dblog.php');
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
        $tb = hash('sha256', $this->v2);
        $sql = "SELECT * FROM users where email='$this->v1' AND passw = '$tb' AND type='s'";
        $result = $this->conn()->query($sql);
        $numRows = $result->num_rows;
        return $numRows;
    }

    function bDb(){
        $tb = hash('sha256', $this->v2);
        $sql = "SELECT * FROM users where email='$this->v1' AND passw = '$tb' AND type='b'";
        $result = $this->conn()->query($sql);
        $numRows = $result->num_rows;
        return $numRows;
    }

    function bId(){
        $sql = "SELECT * FROM users where email='$this->v1'";
        $result = $this->conn()->query($sql);
        while ($row = $result->fetch_assoc()) {
            $data1[] = $row;
        }
        return $data1;
    }

    function avDb()
    {
        $asql = "SELECT * FROM admin where email='$this->v1' AND passw = '$this->v2'";
        $aresult = $this->conn()->query($asql);
        $anumRows = $aresult->num_rows;
        return $anumRows;
    }



}