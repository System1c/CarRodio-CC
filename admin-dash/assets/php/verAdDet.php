<?php

class verAdDet extends Dblog {


    function getAdvertDetails(){
        $sql = "SELECT id, title, sellerid FROM advert WHERE status='p'";
        $result = $this->conn()->query($sql);
        while ($row = $result->fetch_assoc()) {
            $data1[] = $row;
        }
        return $data1;
    }
}