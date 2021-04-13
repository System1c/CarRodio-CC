<?php
if(isset($_SERVER['REQUEST_METHOD'])=="POST"
    && isset($_POST['schus'])) {
    include ('usercontrol.php');
    $srchm = $_POST["uemail"];
    $users = new usercontrol($srchm);
    echo $users->showUsers();

}


?>