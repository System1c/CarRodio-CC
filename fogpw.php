<!DOCTYPE html>
<?php


?>

<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>CarRodio - Reset Password</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <link rel="stylesheet" href="assets/mod/css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<h2>Reset Password</h2>
<div class="container" id="container">
    <div class="form-container2 sign-in-container2">
        <form action="assets/php/forgot.php" method="post">
            <h1>Reset your Password</h1>
            <span>to get back in</span>
            <input type="text" placeholder="Email" name="reml" required/>
            <input type="text" placeholder="Secret Phrase" name="resphr" required/>
            <input type="submit" name="reset" value="Reset Password">
        </form>
    </div>
</div>


<!-- partial -->
<script  src="assets/mod/js/login.js"></script>

</body>
</html>
