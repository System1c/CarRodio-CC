<?php

class SellDblog
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function conn()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "1234";
        $this->dbname = "carrodio";

        $con = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        return $con;
    }
}




?>
