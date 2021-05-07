<?php
include_once ('Dblog.php');
class queryC extends Dblog{

    public $adid;

    function __construct($aid)
    {
        $this->adid = $aid;
    }


    function queryCom(){
        $comments = "SELECT * FROM adrate WHERE adid='$this->adid'";
        $res = $this->conn()->query($comments);
        while ($row = $res->fetch_assoc()) {
            $adata[] = $row;
        }
        return $adata;
    }

}