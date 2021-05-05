<?php
class subAd extends Dblog{

    public $title;
    public $condition;
    public $type;
    public $brand;
    public $prc;
    public $dpr;
    public $sid;
    public $img;
    public $advid;
    public $desc;
    public $mile;

    function __construct($tit, $cond, $typ, $brd, $price, $dispr, $selid, $iname, $descr, $mlg)
    {
        $this->title = $tit;
        $this->condition =$cond;
        $this->type = $typ;
        $this->brand = $brd;
        $this->prc = $price;
        $this->dpr = $dispr;
        $this->sid = $selid;
        $this->img = $iname;
        $this->desc = $descr;
        $this->mile = $mlg;
    }

    function addAd(){
        $sql = "INSERT INTO advert (title, vcondition, type, brand, price, sellerid, oldpr, status, descr, mileage) 
                    VALUES ('$this->title', '$this->condition', '$this->type', '$this->brand', '$this->prc', '$this->sid', '$this->dpr', 'p', '$this->desc', '$this->mile')";
        $this->conn()->query($sql);
        echo '<script>
            alert("Successfully Submitted New Advertisement");
            </script>
            ';

    }

    function addImg(){
        $adId = "SELECT id from advert WHERE sellerid = '$this->sid' AND `postdate` BETWEEN DATE_SUB(NOW() , INTERVAL 1 MINUTE) AND NOW()";
        $db = $this->conn()->query($adId);
        $res = mysqli_fetch_array($db);
        $this->advid = $res['id'];

        $imgsql = "INSERT INTO img (imgid, link) 
                    VALUES ('$this->advid', '$this->img')";
        $this->conn()->query($imgsql);
    }


}