<?php
include_once ('carDetQ.php');
include_once ('Dblog.php');
include_once ('queryAD.php');
include_once ('queryUserDets.php');
include_once ('queryC.php');
$adid = $_GET['id'];

$ad = new carDetQ($adid);
$ad->clickInc();
$cd = $ad->carDQuery();
foreach ($cd as $data){
    $title = $data['title'];
    $vcon = $data['vcondition'];
    $tp = $data['type'];
    $br = $data['brand'];
    $pr  = $data['price'];;
    $opr  = $data['oldpr'];;
    $dsc  = $data['descr'];;
    $mlg = $data['mileage']; ;
    $sid = $data['sellerid'];
}
$usd = new queryUserDets($sid);
$ud = $usd->queryUserAd();
foreach ($ud as $userd){
     $fname = $userd['firstname'];
    $lname = $userd['lastname'];
    $emil = $userd['email'];
}
$cm = new queryC($adid);
$cmd = $cm->queryCom();

$im = $ad->carimgQuery();
foreach($im as $data){
    $img = $data['link'];
}

    echo '
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2><small><del>'.$opr.'</del></small> <em>'.$pr.'</em></h2>
                        <h2>'.$title.'</h2>
                    </div>
                </div>
            </div>
        </div>
        </section>


        <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="imgstore/'.$img.'" alt="First slide">
                </div>
                <!--<div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/car-image-1-1200x600.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/car-image-1-1200x600.jpg" alt="Third slide">
                </div>-->
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            
            <br>
            <br>

            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href="#tabs-1"><i class="fa fa-cog"></i> Vehicle Specs</a></li>
                  <li><a href="#tabs-2"><i class="fa fa-info-circle"></i> Vehicle Description</a></li>
                  <li><a href="#tabs-3"><i class="fa fa-plus-circle"></i> Vehicle Extras</a></li>
                  <li><a href="#tabs-4"><i class="fa fa-phone"></i> Contact Details</a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class="tabs-content" style="width: 100%;">
                  <article id="tabs-1">
                    <h4>Vehicle Specs</h4>

                    <div class="row">
                       <div class="col-sm-6">
                            <label>Type</label>
                       
                            <p>'.$vcon.'</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Make</label>
                       
                            <p>'.$br.'</p>
                       </div>

                       <div class="col-sm-6">
                            <label> Model</label>
                       
                            <p>'.$title.'</p>
                       </div>

                       <div class="col-sm-6">
                            <label>First registration</label>
                       
                            <p>05/2010</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Mileage</label>
                       
                            <p>'.$mlg.'</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Fuel</label>
                       
                            <p>Diesel</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Engine size</label>
                       
                            <p>1800 cc</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Power</label>
                       
                            <p>85 hp</p>
                       </div>


                       <div class="col-sm-6">
                            <label>Gearbox</label>
                       
                            <p>Manual</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Number of seats</label>
                       
                            <p>4</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Doors</label>
                       
                            <p>2/3</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Color</label>
                       
                            <p>Black</p>
                       </div>
                    </div>
                  </article>
                  <article id="tabs-2">
                    <h4>Vehicle Description</h4>
                    <p>'.$dsc.'</p>
                   </article>
                  <article id="tabs-3">
                    <h4>Vehicle Extras</h4>

                    <div class="row">   
                        <div class="col-sm-6">
                            <p>ABS</p>
                        </div>
                        <div class="col-sm-6">
                            <p>Leather seats</p>
                        </div>
                        <div class="col-sm-6">
                            <p>Power Assisted Steering</p>
                        </div>
                        <div class="col-sm-6">
                            <p>Electric heated seats</p>
                        </div>
                        <div class="col-sm-6">
                            <p>New HU and AU</p>
                        </div>
                        <div class="col-sm-6">
                            <p>Xenon headlights</p>
                        </div>
                    </div>
                  </article>
                  <article id="tabs-4">
                    <h4>Contact Details</h4>

                    <div class="row">   
                        <div class="col-sm-6">
                            <label>Name</label>

                            <p>'.$fname.' '.$lname.'</p>
                        </div>
                        <div class="col-sm-6">
                            <label>Phone</label>

                            <p>123-456-789 </p>
                        </div>
                        <div class="col-sm-6">
                            <label>Average Rating</label>
                            <p>3.25 Stars</p>
                        </div>
                        <div class="col-sm-6">
                            <label>Email</label>
                            <p><a href="#">'.$emil.'</a></p>
                            <a href="msgsel.php?id='.$adid.'&sid='.$sid.'">Message This Seller</a>
                        </div>
                        
                    </div>
                    
                    <h5>Rate this Seller!</h5>
                    <br>
                    <form method="post" action="rateB.php">
                    <select name="rate" id="rate">  
                        <option value="1">1 Star</option>
                         <option value="2">2 Stars</option>
                         <option value="3">3 Stars</option>
                         <option value="4">4 Stars</option>
                         <option value="5">5 Stars</option>
                      </select>
                      <br>
                    <div class="form-group form-default">
                                <textarea class="form-control" name="rev" required></textarea>
                            <span class="form-bar"></span>
                        </div>
                       <input type="hidden" value="'.$sid.'" name="seller">
                     <button type="submit" name="submit" value="'.$adid.'">Submit Review</button>   
                    </form>
                  </article>
                </section>
              </div>
            </div>
        </div>
        
    </section>
    
    
    
    ';

foreach($cmd as $as){
    echo '<section class="section" id="trainers">
 <div class="container">
            <div class="row" style="border-style: dotted;">   
                        <div class="col-sm-6" >
                        <h5>Stars</h5>
                            <p>'.$as['rate'].' Stars</p>
                        </div>
                        <div class="col-sm-6">
                        <h5>Date Posted</h5>
                            <p>May 03rd 2021</p>
                        </div>
                        <div class="col-sm-6">
                        <h5>Comment</h5>
                            <p>'.$as['cmnt'].'</p>
                        </div>
                    </div>
                   </div> 
                 </section>';
}
