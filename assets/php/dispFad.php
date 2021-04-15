<?php
include_once ('queryAD.php');
include_once ('refAd.php');
include_once ('Dblog.php');

$ad1 = new queryAD();
$res1 = $ad1->queryfAd();
$count = 0;

foreach ($res1 as $data1){
if ($count < 3){
        echo '<div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="' . $data1['img'] . '" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup>$</sup>' . $data1['oldpr'] . '</del> &nbsp; <sup>$</sup>' . $data1['price'] . '
                            </span>

                            <h4>' . $data1['title'] . '</h4>

                            <p>
                                <i class="fa fa-dashboard"></i> ' . $data1['type'] . ' &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> ' . $data1['vcondition'] . ' &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> ' . $data1['brand'] . ' &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class="social-icons">
                                <li><a href="car-details.html">+ View Car</a></li>
                            </ul>
                        </div>
                    </div>
                </div>';

    }
    $count++;
}