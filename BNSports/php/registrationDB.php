<?php
//Starting session
session_start();

//Creating variables that will eventually store all of the input data recieved from register.php
$username = "";
$email    = "";
$errors = 0; 

//Using mysqli_connect to connect to my TEC 319 database. Storing it in database variable
$database = mysqli_connect('localhost', 'root', 'Braden3268', 'TEC319');

//Gathering all of the information once the user hits register button
if (isset($_POST['userRegistration'])) {
  //Setting variables equal to the form data we recieve
  $username = mysqli_real_escape_string($database, $_POST['username']);
  $email = mysqli_real_escape_string($database, $_POST['email']);
  $password1 = mysqli_real_escape_string($database, $_POST['password1']);
  $passwordCheck = mysqli_real_escape_string($database, $_POST['passwordCheck']);

  //Making sure user inputs correct data. If user does not, errors variable gets one added to it.
  //If errors variable equals anything but 0, the website will not let users register.
  if (empty($username)) { 
    $errors = $errors + 1; 
  }
  if (empty($email)){
    $errors = $errors + 1; 
  }
  if (empty($password1)) { 
    $errors = $errors + 1; 
  }
  if ($password1 != $passwordCheck) {
	  $errors = $errors + 1; 
}

  //Checks to make sure that username and/or email are not already in the database
  $registrationCheck = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($database, $registrationCheck);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      $errors = $errors + 1; 
    }

    if ($user['email'] === $email) {
      $errors = $errors + 1; 
    }
  }

  //If there are no erros, the form data gets inserted into the database. User gets redirected to index.php to login.
  if ($errors == 0) {
  	$password = $password1;
  	$query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
  	mysqli_query($database, $query);
  	header('location: index.php');
  }
}