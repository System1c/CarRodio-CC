<?php
include_once ('queryuser.php');
class usercontrol extends queryuser {


    public $email;
    public $fname;
    public $lname;
    public $id;

    function __construct($email){
        $this->email = $email;
    }

    function queryUserDetails(){
        $sD2 = new queryuser($this->email);
        $det = $sD2->getUserDetails();
        foreach ($det as $data){
            $this->id = $data['id'];
            $this->fname = $data['firstname'];
            $this->lname = $data['lastname'];
            $this->email = $data['email'];

        }
    }

    function showFname(){
        return $this->fname;
    }
    function showLname(){
        return $this->lname;
    }
    function showEmail(){
        return $this->email;
    }

    function storeId(){
        return $this->id;
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

