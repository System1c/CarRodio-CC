<?php

include_once ('usercontrol.php');
include_once ('queryuser.php');
include_once ('queryNotif.php');
$email1 = $_COOKIE['emal'];
$count=0;

$ur = new usercontrol($email1);
$ur->queryUserDetails();
$id = $ur->storeId();



$lsg = new queryNotif($id);
$res = $lsg->queryNAd();
foreach ($res as $data) {
    if ($count < 3) {
        $st = $data['status'];
        switch ($st) {
            case "v":
                $sts = "Your Ad has been verified and is live!";
                break;
            case "p":
                $sts = "Your Ad is currently pending verification";
                break;
            case "r":
                $sts = "Your Ad has been rejected!";
                break;
        }
        echo '
                <a href="/carrodio-cc/dash/allad.php">
                <li class="waves-effect waves-light">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="notification-user">' . $data['title'] . '</h5>
                                                <p class="notification-msg">' . $sts . '</p>
                                                <span class="notification-time">Advert ID: ' . $data['id'] . '</span>
                                            </div>
                                        </div>
                                    </li>
                                    </a>';

    }
    $count++;
}