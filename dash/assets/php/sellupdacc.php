<?php
class sellupdacc {
    public $first;
    public $last;
    public $eml;
    public $pass;
    public $id;

    function __construct($id, $fname, $lname, $email, $pass){
        $this->id = $id;
        $this->first = $fname;
        $this->last = $lname;
        $this->eml = $email;
        $this->pass= $pass;
    }

    function runCheck(){
        $rc = new sellchkdb($this->id, $this->first,$this->last,$this->eml, $this->pass);
        $rc->modUser();
    }

}