<?php
setcookie('err', "",time() - 3600,'/');
setcookie('emal', "", time() - 3600, '/');
setcookie('aemal', "",time() - 3600,'/');
setcookie('fname', "",time() - 3600,'/');
setcookie('lname', "",time() - 3600,'/');
setcookie('bfname', "",time() - 3600,'/');
setcookie('blname', "",time() - 3600,'/');
setcookie('afname', "",time() - 3600,'/');
setcookie('alname', "",time() - 3600,'/');

header('location: ../../../login.php');
?>