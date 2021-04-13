<?php
class addb extends Dblog{


    public $iad;
    function __construct($id){
        $this->iad = $id;
    }

    function getAdDetails(){
        $sql = "SELECT id, title FROM advert where sellerid = '$this->iad'";
        $result = $this->conn()->query($sql);
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

}

