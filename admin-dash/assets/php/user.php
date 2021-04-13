<?php

class User extends Dblog {

    private $e1;

    function __constructor($eml){
        $this->e1 = $eml;
    }

    protected function getAdminName(){
        $sql = "SELECT firstname, lastname FROM admin where email = '$this->e1' ";
        $result = $this->conn()->query($sql);
        $res = mysqli_fetch_array($result);
        $first= $res['firstname'];
        $last = $res['lastname'];

        if(!isset($_COOKIE['afname'])){
            setcookie('afname', $first, time() + 7*24*60*60, '/');
            setcookie('alname', $last, time() + 7*24*60*60, '/');
        } else {
            setcookie('afname', $first, time() + 7*24*60*60, '/');
            setcookie('alname', $last, time() + 7*24*60*60, '/');
        }
    }

}
