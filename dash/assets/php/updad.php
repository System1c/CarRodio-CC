<?php

class updad
{
    public $title;
    public $vcondition;
    public $type;
    public $brand;
    public $price;


    function __construct($title, $vcondition, $type, $brand, $price)
    {
        $this->title = $title;
        $this->vcondition = $vcondition;
        $this->type = $type;
        $this->brand = $brand;
        $this->price = $price;
    }

    function runadCheck()
    {
        $rc = new checkdb($this->title, $this->vcondition, $this->type, $this->brand, $this->price);
        $rc->modAd();
    }

}