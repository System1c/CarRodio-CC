<?php
include ('dblog.php');
if (isset($_POST['verify']))
{
    $id = $_POST['verify'];

    $ver = "UPDATE advert SET status = 'v' WHERE id= '$id'";
    $verad = mysqli_query($link, $ver);
    header("Location: ../../adstat.php");

}


?>