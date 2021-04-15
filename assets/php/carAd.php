<?php

include_once('queryAD.php');
include_once('refAd.php');
include_once('Dblog.php');

$ad = new queryAD();
$res = $ad->queryfAd();
foreach ($res as $data) {
        echo '<div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="'.$data['img'].'" alt="">
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
                            </ul>
                        </div>
                    </div>
                </div>';
}