<?php
setcookie('err', time() - 3600);
setcookie('uid', time() - 3600);
setcookie('aid', time() - 3600);
setcookie('fname', time() - 3600);
setcookie('lname', time() - 3600);
setcookie('afname', time() - 3600);
setcookie('alname', time() - 3600);

header('../../../login.php');
?>