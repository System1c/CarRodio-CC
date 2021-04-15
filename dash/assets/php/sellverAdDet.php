<?php

include_once ('sellacinfo.php');

class sellverAdDet extends SellDblog
{


    function getsellAdvertDetails()
    {
        $sql = "SELECT  title  FROM advert WHERE sellerid='1'";
        $result = $this->conn()->query($sql);
        while ($row = $result->fetch_assoc()) {
            $data1[] = $row;
        }
        if (isset($data1)) {
            return $data1;
        }
    }
}
