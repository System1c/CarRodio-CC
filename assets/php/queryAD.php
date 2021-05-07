<?php
include_once ('Dblog.php');
class queryAD extends Dblog {

     function queryfAd(){
         $qad = new refAd();
         $fad = $qad->adQuery();
            return $fad;
    }

    function saveWlist($aid, $bid){
         $sql = "INSERT into wlist(adid, uid) VALUES ($aid, $bid)";
         $this->conn()->query($sql);
    }


}