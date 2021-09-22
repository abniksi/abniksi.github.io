<?php
  //Simply using mysqli_connect to link my database into the project 
  $database = mysqli_connect("localhost", "root", "Braden3268", "TEC319"); 

  //Starting the session if users login in valid
  session_start();

  //userUsername is set to the session
  $userUsername = $_SESSION['userLogin']; 

  //Preparing a mySQL query to be performed
  $query = "SELECT username FROM users WHERE username = '$userUsername'"; 

  //Performing a query to my database and storing the results into the databaseQuery variable
  $databaseQuery = mysqli_query($database, $query); 

  //Fetching a result row as an associative array
  $row = mysqli_fetch_assoc($databaseQuery); 

  //Setting the name of the user to login_session
  $loginUsername = $row['username'];
?>