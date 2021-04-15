<?php
include_once ('SellDblog.php');
include_once ('sellverAdDet.php');
$ad = new sellverAdDet();
$res = $ad->getsellAdvertDetails();
if (!empty($res)) {
    foreach ($res as $row) {
        echo
            '<tr>
    <th scope="row">' . $row['id'] . '</th>
    <td>' . $row['title'] . '</td>
    <td><button class="btn waves-effect waves-light btn-success" name="Update" value="' . $row['id'] . '"><i class="icofont icofont-check-circled" ></i>Update</button>
    <button class="btn waves-effect waves-light btn-danger" name="Delete" value="' . $row['id'] . '"><i class="icofont icofont-eye-alt"></i>Delete</button></td>
    </tr>';
    }
}
