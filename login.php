<!DOCTYPE html>
<?php


$fename = $lename = $pswr=  $remail = $emailErr  = $passErr = $passErr2 = $status = $fenameErr = $lenameErr=  $ps1 = $ps2 = "";
$err = "false";
unset($emailErr);
unset($fenameErr);
unset($lenameErr);
unset($passErr2);
unset($passErr);


    if (isset($_POST['signup']) && $err == "false") {

        if (empty($_POST["fname"])) {
            $fenameErr = "Please Enter Your First Name";
            $err = "true";
            echo $fenameErr;
            echo "<br>";
        } else {
            $fename = $_POST["fname"];
        }

        if (empty($_POST["lname"])) {
            $lenameErr = "Please Enter Your Last Name";
            $err = "true";
            echo $lenameErr;
            echo "<br>";

        } else {
            $lename = $_POST["lname"];
        }

        if (empty($_POST["remail"])) {
            $emailErr = "Please Enter Your Email";
            $err = "true";
            echo $emailErr;
            echo "<br>";

        } else {

            $remail = $_POST["remail"];
        }

        if (empty($_POST["pswr"])) {
            $passErr = "Please Enter A Password";
            $err = "true";
            echo $passErr;
            echo "<br>";
        } else {

            if (empty($_POST["repswr"])) {
                $passErr2 = "Please Repeat Your Password";
                $err = "true";
                echo $passErr2;
                echo "<br>";

            } else {
                $ps1 = $_POST["pswr"];
                $ps2 = $_POST["repswr"];
                if (strlen($ps1) < 6 || strlen($ps2) < 6) {
                    $passErr2 = "Password is too short";
                    $err = "true";
                    echo $passErr2;
                    echo "<br>";
                } else {
                    if ($_POST["pswr"] != $_POST["repswr"]) {
                        $passErr2 = "Passwords do not match";
                        $err = "true";
                        echo $passErr2;
                        echo "<br>";
                    } else {
                        $pswr = $_POST["repswr"];
                    }
                }
            }
        }


    }


if ($err == "true"){
    sleep(5);
    $err == "false";

}


if ($err == "false") {
    $err == "false";
    include ("assets/php/signup.php");
    if ($status == "true"){
        $emailErr = "This Email is already in use";
        $status = "false";
        echo $emailErr;
    }

}

if(!isset($_COOKIE['err'])){
    setcookie('err', '', time() + 7*24*60*60, '/');
    echo "";
} else {
    print $_COOKIE['err'];

}

?>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CarRodio - Login or Sign Up</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
	<link rel="stylesheet" href="assets/mod/css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<h2>Sign In or Sign Up</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="login.php" method="post">
			<h1>Create Account</h1>
			<!--<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>-->
			<span>Use your email for registration</span>
			<input type="text" placeholder="First Name" name="fname" />
            <input type="text" placeholder="Last Name" name="lname" />
			<input type="email" placeholder="Email" name="remail" />
			<input type="password" placeholder="Password" name="pswr" />
            <input type="password" placeholder="Re-enter Password" name="repswr" />
            <!--<select name="secq">
            <option value="maiden">Your Mothers Maiden Name</option>
            <option value="pet">First Pet's Name</option>
            </select>-->

            <input type="phrase" placeholder="Enter your Special Phrase" name="phrase" required/>

            <button name="signup">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="assets/php/login.php" method="post">
			<h1>Sign in</h1>
			<!--<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>-->
			<span>to use your account</span>
			<input type="text" placeholder="Email" name="eml" required/>
			<input type="password" placeholder="Password" name="psw" required/>
			<a href="fogpw.php">Forgot your password?</a>
            <a href="index.php">Go Back Home</a>
            <input type="submit" name="submit" value="Sign In">
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To continue with more features, please login</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello!</h1>
				<p>Enter your personal details and start driving with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


<!-- partial -->
<script  src="assets/mod/js/login.js"></script>

</body>
</html>
