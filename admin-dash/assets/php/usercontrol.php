<?php
include_once ('Dblog.php');
include_once ('queryuser.php');



class usercontrol extends queryuser {

    public $eml;

    function __constructor($email){
        $this->eml = $email;
    }

    public function showUsers(){
        $idfk = new queryuser($this->eml);
        $datas = $idfk->getUser($this->eml);
        return $datas;
    }

}
/*
if (isset($_POST['schus'])){
    $email = $_POST["uemail"];

    $qus = new queryuser($email);
    $q2 = $qus->getUser();

    $fname = $q2['firstname'];
    $lname = $q2['lastname'];
    $email = $q2['email'];
}*/

?>