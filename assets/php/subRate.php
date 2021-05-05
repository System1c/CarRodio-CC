<?php
include_once ('Dblog.php');
class subRate extends Dblog{

    public $rate;
    public $aid;
    public $sid;
    public $cmt;

    function __construct($aid, $rte, $ct, $sid){
        $this->aid = $aid;
        $this->rate = $rte;
        $this->sid = $sid;
        $this->cmt = $ct;
    }

    function subRate(){
        $rate = "INSERT INTO adrate (adid, rate, sid, cmnt) VALUES ('$this->aid', '$this->rate', '$this->sid', '$this->cmt')";
        $this->conn()->query($rate);

    }


}