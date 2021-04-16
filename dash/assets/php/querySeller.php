<?php

class querySeller extends Dblog
{

    private $e1;

    function __construct($eml)
    {
        $this->e1 = $eml;
    }

    function getUsername()
    {
        $sql = "SELECT firstname, lastname FROM users where email = '$this->e1'";
        $result = $this->conn()->query($sql);
        $res = mysqli_fetch_array($result);
        $first = $res['firstname'];
        $last = $res['lastname'];
        if (!isset($_COOKIE['fname'])) {
            setcookie('fname', $first, time() + 7 * 24 * 60 * 60, '/');
            setcookie('lname', $last, time() + 7 * 24 * 60 * 60, '/');
        } else {
            setcookie('fname', $first, time() + 7 * 24 * 60 * 60, '/');
            setcookie('lname', $last, time() + 7 * 24 * 60 * 60, '/');
        }
    }

}
