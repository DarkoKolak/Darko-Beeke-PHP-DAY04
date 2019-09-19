<!DOCTYPE html>
<html lang="en">
<?php
// start a new session or continues the previous:
ob_start();
session_start(); 

if(isset($_SESSION['user'])!="" ){
  // redirect to songs.php:
  header("Location: songs.php" ); 
}

include("dbconnect.php");
include('head.php');


?>

<body>

<?php

include('header.php');


$error = false;
if (isset($_POST['btn-register']) ) {

  // sanitize email to prevent sql injection:
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  // basic email validation:
  if (empty($email)) {
    $error = true ;
    $emailError = "Please enter your email.";
    } 
  else if (strlen($email) < 5) {
    $error = true;
    $emailError = "Your email must have at least 5 characters.";
  } 



  // sanitize name input to prevent sql injection:
  $name = trim($_POST['name']);
  //trim - strips whitespace (or other characters) from the beginning and end of a string

  $name = strip_tags($name);
  // strip_tags — strips HTML and PHP tags from a string

  $name = htmlspecialchars($name);
  // htmlspecialchars converts special characters to HTML entities

  // basic name validation:
  if (empty($name)){
    $error = true ;
    $nameError = "Please enter your name.";
    } 
  else if (strlen($name) < 3){
    $error = true;
    $nameError = "Your name must have at least 3 characters.";
  } 
/*  else if (!preg_match("/^[a-zA-Z0-9 ]+$/",$name)) {
    $error = true;
    $nameError = "Your name must contain only letters and numbers.";
  }
*/

  // sanitize password to prevent sql injection:
  $pass = trim($_POST['password']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);

  // basic password validation:
  if (empty($pass)) {
    $error = true ;
    $passError = "Please enter your password.";
    } 
  else if  (strlen($pass) < 3) {
    $error = true;
    $passError = "Your password must have at least 3 characters.";
  } 
/*  else if (!preg_match("/^[a-zA-Z ]/",$pass)) {
    $error = true ;
    $passError = "Your password must contain letters.";
  }*/

  // password hashing for security:
  $password = hash('sha256', $pass);

  // if there's no error, continue to register:
  if(!$error) {
    echo $query = "INSERT INTO user(email, name, password) VALUES('$email', '$name','$password')";
    $res = mysqli_query($conn, $query);
          echo "Darko was here";


    if ($res) {
      $errTyp = "success";
      $errMSG = "Successfully registered, you may login now";
      unset($email);
      unset($name);
      unset($password);
    } 
    else {
      $errTyp = "danger";
      $errMSG = "Something went wrong, please try again later!" ;
    }  
  }
}

?>

<h2>Register now</h2 >

<?php
 if (isset($errMSG)){
?>

<div class="alert alert-<?php echo $errTyp ?>" >
  <?php echo $errMSG; ?>
</div>

<?php
  }
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" autocomplete="off" >
  <div class="form-group">
    <label for="exampleInputPassword1">E-Mail</label>
    <input type="email" name="email" class="form-control" placeholder="email" maxlength="20" value="<?php echo $email?>"/>
    <span class = "text-danger"><?php echo $emailError;?></span >
  </div>  
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" name="name" class="form-control"placeholder="name" maxlength="20" value="<?php echo $name?>"/>
    <span   class = "text-danger"><?php echo  $nameError; ?></span >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password" maxlength="20"/>
    <span class = "text-danger"><?php echo  $passwordError;?></span >
  </div>  
  <button type="submit" class="btn btn-primary" name="btn-register">Register</button>
</form>

<a href = "login.php">Log in here</a>


<?php
	mysqli_close($conn);
?>
</body>
</html>

<!-- <script>

to check if email/username available:
  username:username = key value pair
  check day05 valeria nicole kari
  first username is php, 
  second is saved in value = name in input
  $(this).val(); = eigegebener wert im input field
  register disabled: you cannot register if email taken
  
  maybe needs to be inside the body
</script> -->

<?php  
  ob_end_flush(); 
?>


