<?php

include_once ('usercontrol.php');
include_once ('queryuser.php');
include_once ('queryUserAd.php');
include_once ('rejverAd.php');
$email = $_COOKIE['emal'];

$ur = new usercontrol($email);
$ur->queryUserDetails();
$id = $ur->storeId();

$lsg = new queryUserAd($id);
$res = $lsg->queryUAd();
foreach ($res as $data){
    echo '<tr>
          <td>'.$data['id'].'</td>
           <td>'.$data['title'].'</td>
           <td><button class="btn waves-effect waves-light btn-success" name="update" value="'.$data['id'].'"><i class="icofont icofont-eye-alt"></i>Update</button></td>
         <td><button class="btn waves-effect waves-light btn-danger" name="delete" value="'.$data['id'].'"><i class="icofont icofont-eye-alt"></i>Delete</button></td>
          </tr>';
}

if (isset($_POST['delete']))
{
    $id = $_POST['delete'];
    $ver = new rejverAd($id);
    $ver->delAd();
    header("Location: ../../allad.php");
}

if (isset($_POST['update']))
{
    session_start();
    $_SESSION['adid'] = $_POST['update'];
    echo $_SESSION['adid'];
    header('location: ../../editAd.php');
}