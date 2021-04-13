<?php


include_once ('addetails.php');
include_once ('addb.php');
include_once ('Dblog.php');



    $ad = new addetails(1);
    $res = $ad->sendQuery();
    foreach ($res as $data){
        echo '<tr>
        <th scope="row">'.$data['id'].'</th>
        <td>'.$data['title'].'</td>
        <td><button class="btn waves-effect waves-light btn-danger" name="reject" value="'.$data['id'].'"><i class="icofont icofont-eye-alt"></i>Delete</button></td>
        </tr>';
    }