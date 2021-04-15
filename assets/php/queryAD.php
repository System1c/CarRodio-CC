<?php
class queryAD{

     function queryfAd(){
         $qad = new refAd();
         $fad = $qad->adQuery();
            return $fad;
    }


}