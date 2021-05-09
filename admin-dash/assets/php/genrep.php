<?php
include_once ('reports.php');
include_once ('regadreps.php');
if (isset($_POST['sellgen']))
{

    $ver = new reports;
    $ver->genreport();

}
if (isset($_POST['regadgen']))
{

    $ver = new regadreps;
    $ver->genregadreport();

}
if (isset($_POST['highgen']))
{
    $id = $_POST['highgen'];
    $ver = new rejverAd($id);
    $ver->verAd();
    header("Location: ../../adstat.php");
}
if (isset($_POST['enggen']))
{
    $id = $_POST['enggen'];
    $ver = new rejverAd($id);
    $ver->verAd();
    header("Location: ../../adstat.php");
}



?>
