<?php 
    //Including login.php
    include('login.php');
    //Login.php will only redirect user to content.php if login attempt is valid
    if(isset($_SESSION['userLogin'])){
        header("Location: content.php"); 
    }
?> 

<!DOCTYPE html>
<html>
    <head>
        <!-- Including required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="BN Sports DB allows you to look up and obtain information about professional athletes!">
        <!-- Title of the web page -->
        <title>BN Sports DB</title>
        <!-- Linkning up all of my stylesheets -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="../css/indexphp.css" rel="stylesheet" type="text/css">
        <link rel="icon" 
      type="image/png" 
      href="../images/favicon.png">
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

        <!-- Start of centerContainer. Contains the form in which users can sign into. -->
        <div id="centerContainer">
            <div id="container">
                <h2>Log Into Your Account!</h2>
            <form action="" method="post">
                <label>Username:</label>
                <input id="name" name="username" placeholder="Username" type="text"><br>
                <label>Password :</label>
                <input id="password" name="password" placeholder="Password" type="password"><br><br>
                <a href="register.php"><h4>No account? Sign Up Here!</h4></a>
                <button name="submit" type="submit" value="Login">Login</button>
            </form>
            </div>
        </div>

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