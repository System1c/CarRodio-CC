<?php
class queryImg extends Dblog{

    public $imgid;


    function __construct($id){
     $this->imgid = $id;
    }

    function qImg(){
        $sql = "SELECT link FROM img WHERE imgid='$this->imgid'";
        $res = $this->conn()->query($sql);
        while ($row = $res->fetch_assoc()) {
            return $row['link'];
        }

    }


}