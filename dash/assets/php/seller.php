<?php


class Seller extends SellDblog {

    private $e1;

    function __constructor($eml)
    {
        $this->e1 = $eml;
    }

    protected function getSellerName()
    {
        $sql = "SELECT firstname, lastname FROM user where email = '$this->e1' ";
        $result = $this->conn()->query($sql);
        $res = mysqli_fetch_array($result);
        $first = $res['firstname'];
        $last = $res['lastname'];

        if (!isset($_COOKIE['fname'])) {
            setcookie('fname', $first, time() + 7*24*60*60, '/');
            setcookie('lname', $last,  time() + 7*24*60*60, '/');
        } else {
            setcookie('fname', $first,  time() + 7*24*60*60, '/');
            setcookie('lname', $last,  time() + 7*24*60*60, '/');
        }
    }

}
