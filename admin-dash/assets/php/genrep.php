<?php
include_once ('reports.php');
include_once ('regadreps.php');
include_once ('highreads.php');
include_once ('highrads.php');

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

    $ver = new highreads;
    $ver->genhighreads();
}

if (isset($_POST['hradsgen']))
{
    $ver = new highrads;
    $ver->genhighrads();
}



?>
