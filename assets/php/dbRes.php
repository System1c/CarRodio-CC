<?php
class dbRes extends Dblog{

    public $eml;
    public $phr;


    function __construct($em, $ph)
    {
        $this->eml=$em;
        $this->phr=$ph;
    }

    function checkRes(){
        echo $this->phr;
        $val = $this->checkDab();
        if ($val > 0) {
            $this->resetDb();
            echo "1";
        }
    }

    private function checkDab(){
        $sql = "SELECT * FROM users where email='$this->eml' AND phrase = '$this->phr'";
        $result = $this->conn()->query($sql);
        $numRows = $result->num_rows;
        echo "2";
        return $numRows;

    }

    private function resetDb(){
        $sql = "UPDATE FROM users SET passw='1234' where email='$this->eml'";
        $this->conn()->query($sql);
        echo "3";
    }


}