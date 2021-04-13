<?php
include_once('addb.php');
include_once ('Dblog.php');

class addetails extends addb{


    public $uid;


    function __construct($id)
    {
        $this->uid = $id;
    }

    function sendQuery(){
        $sD3 = new addb($this->uid);
        $det = $sD3->getAdDetails();
        return $det;
    }

}