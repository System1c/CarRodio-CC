<?php
include_once ('Dblog.php');
include_once ('dbRes.php');

if (isset($_POST['reset']))
{
    $eml = $phr = "";
    $emal = $_POST['reml'];
    $phr = $_POST['resphr'];


    $acres = new dbRes($emal, $phr);
    $acres->checkRes();

    echo '<script> window.alert("If your account exists and your phrase is correct, your password has been reset") </script>';
}