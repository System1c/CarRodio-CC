<?php
include('assets/php/Dblog.php');
$loopResult = ''; // leave blank to start var for loop
$result = 'SELECT title, vcondition, type, brand, price FROM advert';
$rslog = mysqli_query($link, $result);
while($row = mysqli_fetch_array($rslog, MYSQLI_ASSOC)) {
    $loopResult = '
		<div class="dlcontainer">
		<div class="dlitem">
		<div class="dltitle">'.$row['title'].'</div>
		<div class="dlimage">'.$row['vcondition'].'</div>
		<div class="dldescription">'.$row['type'].'</div>
		<div class="dllink">'.$row['brand'].'</div>
		<div class="dllink">'.$row['price'].'</div>
		</div>
		</div>
		<br>
		<br>
	';
    echo $loopResult;
}



?>