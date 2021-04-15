<?php

include_once('selladdetails.php');
include_once('selladdb.php');
include_once('SellDblog.php');
include_once('adcontrol.php');
include_once('delupAd.php');
$uid = $_SESSION["idd"];

$ad = new addetails($uid);
$res = $ad->sendQuery();
foreach ($res as $data) {
    echo '<tr>
        <th scope="row">' . $data['id'] . '</th>
        <td>' . $data['title'] . '</td>
        <td><button class="btn waves-effect waves-light btn-danger" name="delete" value="' . $data['id'] . '"><i class="icofont icofont-eye-alt"></i>Delete</button></td>
        </tr>';
}

if(isset($POST['update'])){
    $id = $_POST['update'];

    $ver= new delupAd($id);
    $ver-> upAd();
}



if (isset($_POST['delete'])) {
    $id = $_POST['delete'];

    $ver = new rejverAd($id);
    $ver->delAd();

    $ur = new adcontrol($uid);
    $ur->queryAdDetails();

    $_SESSION["title"] = $ur->showTitle();
    $_SESSION['vcondition'] = $ur->showVcondition();
    $_SESSION['type'] = $ur->showType();
    $_SESSION['brand'] = $ur->showBrand();
    $_SESSION['price'] = $ur->showPrice();
    $id = $ur->storeId();
    $_SESSION['idd'] = $id;

    header("Location: ../../allad.php");

}