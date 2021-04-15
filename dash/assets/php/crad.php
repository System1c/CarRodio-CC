<?php

include_once('verad.php');

class crad extends verad
{

    public $title;
    public $vcondition;
    public $type;
    public $brand;
    public $price;


    function __construct($ttl, $vc, $typ, $br, $pri)
    {
        $this->title = $ttl;
        $this->vcondition = $vc;
        $this->type = $typ;
        $this->brand = $br;
        $this->price = $pri;
    }

    function sigDb()
    {
        $sDb = new crad ($this->title, $this->vcondition, $this->type, $this->brand, $this->price);
        $num1Rows = $sDb->vsDb();
        if ($num1Rows != 0) {
            $this->inc();
        } else {
            $sDb->signDb();
            echo '<script>
            alert("Successfully Added New Avert");
            </script>
            ';
        }


    }

    function inc()
    {
        setcookie('status', 'true', time() + 7 * 24 * 60 * 60, '/');
    }


}

?>