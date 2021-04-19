<?php

include_once('queryAD.php');
include_once('refAd.php');
include_once('Dblog.php');
include_once ('queryImg.php');


if (isset($_POST['wlist'])){
    $count++;
    $id = $_POST['wlist'];
    setcookie($id, $id , time() + 7*24*60*60, '/');
    $ad->saveWlist();
}




$ad = new queryAD();
$res = $ad->queryfAd();
$count =0;
foreach ($res as $data) {
    $uc = new queryImg($data['id']);
    $link = $uc->qImg();
    $clink = 'imgstore/'. $link;
        echo '<div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="'.$clink.'" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup>$</sup>'.$data['oldpr'].'</del> &nbsp; <sup>$</sup>'.$data['price'].'
                            </span>

                            <h4>'.$data['title'].'</h4>

                            <p>
                                <i class="fa fa-dashboard"></i> '.$data['type'].' &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> '.$data['vcondition'].' &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> '.$data['brand'].' &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class="social-icons">
                                <li><a href="car-details.html">+ View Car</a></li>
                                <form action="assets/php/carAd.php" method="post">
                                <li><button name="wlist" value="'.$data['id'].'">Wishlist This!</button> </li>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>';
}