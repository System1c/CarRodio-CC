<?php
include_once ('Dblog.php');
class queryWlist extends Dblog{
    public $uid;
    public $aid;

    function queryWish(){
        $this->uid = $_COOKIE['bid'];
        $wl = "SELECT * FROM wlist where uid = '$this->uid'";
        $wres = $this->conn()->query($wl);
        while ($row = $wres->fetch_assoc()) {
            $data1[] = $row;
        }
        return $data1;
    }

    function queryADW($a){
        $this->aid = $a;
        $wl2 = "SELECT * FROM advert where id = '$this->aid'";
        $wres2 = $this->conn()->query($wl2);
        while ($row = $wres2->fetch_assoc()) {
            $data2[] = $row;
        }
        return $data2;
    }
}