<?php

include_once('selladdb.php');
include_once('SellDblog.php');

class selladdetails extends selladdb
{


    public $uid;


    function __construct($id)
    {
        $this->uid = $id;
    }

    function sendQuery()
    {
        $sD3 = new addb($this->uid);
        $det = $sD3->getAdDetails();
        return $det;
    }

}
