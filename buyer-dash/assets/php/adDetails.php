<?php

include_once ('usercontrol.php');
include_once ('queryuser.php');
include_once ('queryWlist.php');
include_once ('rejverAd.php');
$email = $_COOKIE['bemal'];

$wi = new queryWlist();
$res = $wi->queryWish();
foreach ($res as $data){
    $aid = $data['adid'];
    $wlid = $data['id'];
    $qes = $wi->queryADW($aid);
    foreach ($qes as $data2){
        echo '<tr>
          <td>'.$data2['id'].'</td>
           <td>'.$data2['title'].'</td>
           <td>'.$data2['descr'].'</td>
         <td><button class="btn waves-effect waves-light btn-danger" name="delete" value="'.$wlid.'"><i class="icofont icofont-eye-alt"></i>Delete</button></td>
          </tr>';
    }
}



if (isset($_POST['delete']))
{
    $id = $_POST['delete'];
    $ver = new rejverAd($id);
    $ver->delAd2();
    header("Location: ../../allad.php");
}

