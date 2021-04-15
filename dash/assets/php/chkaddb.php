<?php

include_once('Dblog.php');

class checkdb extends SellDblog{
    public $title;
    public $vcondition;
    public $type;
    public $brand;
    public $price;
    public $id;
    function __construct($id,$title, $vcondition, $type, $brand, $price)
    {
        $this->title = $title;
        $this->vcondition = $vcondition;
        $this->type = $type;
        $this->brand = $brand;
        $this->price = $price;
    }

    function modAd()
    {
        echo $this->id1;
        $sql = "UPDATE advert SET title='$this->title', vcondition='$this->vcondition', type='$this->type', brand='$this->brand',price='$this->price' where id='$this->id'";
        $this->conn()->query($sql);
    }


}