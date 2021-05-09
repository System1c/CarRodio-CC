<?php
include_once ('Dblog.php');
class insMsg extends Dblog{

    private $beml;
    private $slid;
    private $aid;
    private $msg;

    function __construct($buymail, $selid, $adid, $messg){
        $this->beml = $buymail;
        $this->slid = $selid;
        $this->aid = $adid;
        $this->msg = $messg;
    }


    function insMes(){
        $msgins = "INSERT into messages (buyerem, sellerid, adid, message) VALUES ('$this->beml', '$this->slid', '$this->aid', '$this->msg' )";
        $this->conn()->query($msgins);
        echo '<script>alert("Your Message has been sent to the Seller!")</script>';
        header("Location: ../../car-details.php?id=$this->aid");
    }


}