<?php
session_start();
include_once ('addetails.php');
include_once ('addb.php');
include_once ('Dblog.php');
include_once ('usercontrol.php');
include_once ('rejverAd.php');
    $uid = $_SESSION["idd"];

    $ad = new addetails($uid);
    $res = $ad->sendQuery();
    foreach ($res as $data){
        echo '<tr>
        <th scope="row">'.$data['id'].'</th>
        <td>'.$data['title'].'</td>
        <td><button class="btn waves-effect waves-light btn-danger" name="delete" value="'.$data['id'].'"><i class="icofont icofont-eye-alt"></i>Delete</button></td>
        </tr>';
    }

if (isset($_POST['delete']))
{
    $id = $_POST['delete'];

    $ver = new rejverAd($id);
    $ver->delAd();

    $ur = new usercontrol($uid);
    $ur->queryUserDetails();

    $_SESSION["fname"] = $ur->showFname();
    $_SESSION['lname'] = $ur->showLname();
    $_SESSION['eml'] = $ur->showEmail();
    $id = $ur->storeId();
    $_SESSION['idd'] = $id;

    header("Location: ../../userc.php");

}
