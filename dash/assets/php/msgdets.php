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
$res = $lsg->queryUmsg();
foreach ($res as $data){

    echo '<tr>
          <td>'.$data['id'].'</td>
           <td>'.$data['buyerem'].'</td>
           <td>'.$data['message'].'</td>
           <td><a href="mailto:'.$data['buyerem'].'">E-mail this Buyer</a></td>
           <td>'.$data['adid'].'</td>
          </tr>';
}

