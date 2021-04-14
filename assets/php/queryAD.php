<?php
class queryAD extends Dblog {

     function queryfAd(){
        $sql = 'SELECT title, vcondition, type, brand, price, img, oldpr FROM advert WHERE status="v"';

    }


}