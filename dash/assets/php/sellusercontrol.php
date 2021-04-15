<?php
include_once ('sellquery.php');
class sellusercontrol extends sellquery {



    public $id;

    function __construct($email){
        $this->email = $email;
    }

    function querySellDetails(){
        $sD2 = new sellquery($this->email);
        $det = $sD2->getSellDetails();
        foreach ($det as $data){
            $this->id = $data['id'];

        }
    }




}
