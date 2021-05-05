<?php
include_once ('Dblog.php');
class carDetQ extends Dblog{
    public $id;


    function __construct($iid){
        $this->id=$iid;
    }

    function carDQuery(){
        $sql = "SELECT title, vcondition, type, brand, price, oldpr, descr, mileage, sellerid FROM advert WHERE id='$this->id'";
        $result = $this->conn()->query($sql);
        while ($row = $result->fetch_assoc()) {
            $adata[] = $row;
        }
        return $adata;
    }

    function clickInc(){
        $click = "UPDATE advert SET clk = clk + 1 WHERE id='$this->id'";
        $this->conn()->query($click);
    }

}