<?php
ob_start();
include_once('queryAD.php');
include_once('refAd.php');
include_once('Dblog.php');
include_once ('queryImg.php');






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
                            <img src="'.$clink.'" alt="" class="imgsize">
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
                                <li><a href="car-details.php?id=' . $data['id'] . '">+ View Car</a></li>
                                <form action="assets/php/carAd.php" method="post">
                                <li><button name="wlist" value="'.$data['id'].'">Wishlist This!</button> </li>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>';
}

if (isset($_POST['wlist'])){
    if (isset($_COOKIE['fname'])){
        $count++;
        $aid = $_POST['wlist'];
        $bid = $_COOKIE['bid'];
        $ad->saveWlist($aid,$bid);
        echo '<script>alert("Successfully Wishlisted!")</script>';
        header('Location: ../../cars.php');
    }
    elseif (isset($_COOKIE['bfname'])){
        echo '<script>alert("Please sign in as a Buyer!")</script>';
        header('Location: ../../login.php');

    }
    else{
        echo '<script>alert("Please sign in to wishlist cars!")</script>';
        header('Location: ../../login.php');
    }

}
?>