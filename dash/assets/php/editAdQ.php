<?php
class editAdQ extends Dblog {

    public $adid;
    public $tit;
    public $condi;
    public $type;
    public $brd;
    public $oprc;
    public $prc;
    public $img;
    public $desc;
    public $mil;

    function __construct($id, $t, $c, $ty, $b, $op, $p, $img, $dsc, $mlg)
    {
        $this->adid = $id;
        $this->tit = $t;
        $this->condi = $c;
        $this->type = $ty;
        $this->brd = $b;
        $this->oprc = $op;
        $this->prc = $p;
        $this->img = $img;
        $this->desc = $dsc;
        $this->mil = $mlg;
    }

    function updAd(){
        $updSql = "UPDATE advert set title='$this->tit', vcondition='$this->condi', type='$this->type', brand='$this->brd', price='$this->oprc', oldpr = '$this->prc', status='p', descr='$this->desc', mileage=$this->mil WHERE id = '$this->adid'";
        $this->conn()->query($updSql);
    }

    function updImg(){
        $imgsql = "UPDATE img set link= '$this->img' WHERE imgid='$this->adid'";
        $this->conn()->query($imgsql);
        echo '<script>
            alert("Successfully Edited Advertisement");
            </script>
            ';
    }


}