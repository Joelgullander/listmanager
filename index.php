<!DOCTYPE html>
<html>
  <head>
    <title>List manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/prefixfree.min.js"></script>
  </head>
  <body>
<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
include("config.php");
include('class/userClass.php');
$userClass = new userClass();

$errorMsgReg='';
$errorMsgLogin='';
/* Login Form */
if (!empty($_POST['loginSubmit'])) 
{
$usernameEmail=$_POST['usernameEmail'];
$password=$_POST['password'];
if(strlen(trim($usernameEmail))>1 && strlen(trim($password))>1 )
{
$uid=$userClass->userLogin($usernameEmail,$password);
if($uid)
{
$url=BASE_URL.'listmanager/mylist.php';
header("Location: $url"); // Page redirecting to home.php 
}
else
{
$errorMsgLogin="Please check login details.";
}
}
}

/* Signup Form */
if (!empty($_POST['signupSubmit'])) 
{
$username=$_POST['usernameReg'];
$password=$_POST['passwordReg'];
/* Regular expression check */
$username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
$password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

if($username_check && $password_check) 
{
$uid=$userClass->userRegistration($username,$password);
if($uid)
{
$url=BASE_URL.'listmanager/mylist.php';
header("Location: $url"); // Page redirecting to home.php 
}
else
{
$errorMsgReg="Username or Email already exists.";
}
}
}
?>
<!--<div id="signup">
<h3>Registration</h3>
<form method="post" action="" name="signup">
<label>Username</label>
<input type="text" name="usernameReg" autocomplete="off" />
<label>Password</label>
<input type="password" name="passwordReg" autocomplete="off"/>
<div class="errorMsg"><?php echo $errorMsgReg; ?></div>
<input type="submit" class="button" name="signupSubmit" value="Signup">
</form>
</div>-->

    <div class="login">
        <?= $errorMsgLogin ?>
        <h1>Login</h1>
        <form method="post" action="" name="login">
            <input type="text" name="usernameEmail" placeholder="Username" required="required" />
            <input type="password" name="password" placeholder="Password" required="required" />
            <input type="submit" name="loginSubmit" class="btn btn-primary btn-block btn-large" value="Logga in"/>
        </form>
    </div>
	
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="main.js"></script>
  </body>
</html>