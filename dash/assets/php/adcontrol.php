<?php

include_once('queryad.php');

class adcontrol extends queryad
{


    public $title;
    public $vcondition;
    public $type;
    public $brand;
    public $price;

    function __construct($id)
    {
        $this->id = $id;
    }

    function queryAdDetails()
    {
        $sD2 = new queryad($this->id);
        $det = $sD2->getAdDetails();
        foreach ($det as $data) {
            $this->id = $data['id'];
            $this->title = $data['title'];
            $this->vcondition = $data['vcondition'];
            $this->type = $data['type'];
            $this->brand = $data['brand'];
            $this->price = $data['price'];
        }
    }

    function showTitle()
    {
        return $this->title;
    }

    function showVcondition()
    {
        return $this->vcondition;
    }

    function showType()
    {
        return $this->type;
    }

    function showBrand()
    {
        return $this->brand;
    }
    function showPrice()
    {
        return $this->price;
    }

    function storeId()
    {
        return $this->id;
    }

}