<?php
include_once ('Dblog.php');
class refAd extends Dblog{


    function adQuery(){
        $sql = 'SELECT id, title, vcondition, type, brand, price, oldpr FROM advert WHERE status="v"';
        $res = $this->conn()->query($sql);
            while ($row = $res->fetch_assoc()) {
                $data1[] = $row;
            }
        return $data1;
    }




}


