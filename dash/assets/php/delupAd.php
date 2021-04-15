<?php
include_once ('SellDblog.php');
class delupAd extends SellDblog
{

    public $id;
    public $title;
    public $vcondition;
    public $type;
    public $brand;
    public $price;



    function __construct($id,$title,$vcondition,$type,$brand,$price){
        $this->id=$id;
        $this->title=$title;
        $this->vcondition=$vcondition;
        $this->type=$type;
        $this->brand=$brand;
        $this->price=$price;

    }

    function upAd(){
        $ver = "UPDATE advert SET title = '$this->title',vcondition= '$this->vcondition', type='$this->type', brand='$this->brand',price='$this->price' WHERE id= '$this->id'";
        $this->conn()->query($ver);
    }



    function delAd(){
        $del = "DELETE from advert where id='$this->id'";
        $this->conn()->query($del);
    }

}
