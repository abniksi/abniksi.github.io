<?php 
    //Must include registrationDB.php so that users can register and store their information into the database
    include('registrationDB.php') 
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="BN Sports DB allows you to look up and obtain information about professional athletes!">
    <!-- Linking all my stylesheets -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="icon" 
      type="image/png" 
      href="../images/favicon.png">
    <!-- Title of page -->
    <title>BN Sports DB</title>
</head>
<!-- Start of body -->
<body>
    <!-- Start of navbar -->
    <nav>
        <ul>
            <a href="../index.html"><li class="left">BN Sports DB<i class="fas fa-trophy"></i></li></a>
            <a href="../about.html"><li class="right">About</li></a>
            <a href="index.php"><li class="right">Login</li></a>
        </ul>
    </nav>

    <!-- Start of form. Method is post and we are sending the data gathered to register.php -->
    <form method="post" action="register.php">
        <h2>Register</h2>
  	    <div class="container">
  	        <label>Username:</label>
  	        <input type="text" name="username">
  	    </div>
  	    <div class="container">
  	        <label>Email:</label>
  	        <input type="email" name="email">
  	    </div>
  	    <div class="container">
  	        <label>Password:</label>
  	        <input type="password" name="password1">
  	    </div>
  	    <div class="container">
  	        <label>Confirm Password:</label>
  	        <input type="password" name="passwordCheck">
  	    </div>
  	    <div class="container">
  	        <button type="submit" class="btn" name="userRegistration">Register</button>
        </div>
    <!-- Redirects you to index.php to sign in -->
  	<p>Already a member? <a href="index.php">Sign in</a></p>
   </form>
   <!-- End of form -->

   <!-- Start of footer -->
    <footer>
        <ul>
            <li><i class="fab fa-facebook"></i></li>
            <li><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-twitter"></i></li>
            <li><i class="fab fa-snapchat"></i></li>
            <li><i class="fab fa-youtube"></i></li>
            </ul>
    </footer>
</body>
</html>