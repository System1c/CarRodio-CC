<?php
class queryAD{

     function queryfAd(){
         $qad = new refAd();
         $fad = $qad->adQuery();
            return $fad;
    }

    function saveWlist(){
         $sql = "INSERT into wlist(adid, uid) VALUES ($aid, $usid0)";
         $this->conn()->query($sql);

    }


}