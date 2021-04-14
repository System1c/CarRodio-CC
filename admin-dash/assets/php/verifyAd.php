<?php
include_once ('Dblog.php');
include_once ('verAdDet.php');
$ad = new verAdDet();
$res = $ad->getAdvertDetails();
foreach ($res as $row){
echo
    '<tr>
<th scope="row">'.$row['id'].'</th>
<td>'.$row['sellerid'].'</td>
<td>'.$row['title'].'</td>
<td><button class="btn waves-effect waves-light btn-success" name="verify" value="'.$row['id'].'"><i class="icofont icofont-check-circled" ></i>Verify</button>
<button class="btn waves-effect waves-light btn-danger" name="reject" value="'.$row['id'].'"><i class="icofont icofont-eye-alt"></i>Reject</button></td>
</tr>';
    }