<?php
//Starting the session. If login attempt invalid, it will close session.
session_start();

//Storing errors inside error variable
$error = '';

//Gathering information from index.php
if (isset($_POST['submit'])) { 
    //If user does not enter in a username or password, process stops here and an error is shown.
    if (empty($_POST['username']) || empty($_POST['password'])) { 
        $error = "Not a valid login. Please attempt to login again!"; 
  } 
    else{ 
        //Starting a new connection to my database
        $database = mysqli_connect("localhost", "root", "Braden3268", "TEC319"); 

        //Gathering the username and password the user entered on the index.php page
        $username = $_POST['username']; 
        $password = $_POST['password']; 

        //Setting query variable equal to a mySQL statement
        $query = "SELECT username, password FROM users WHERE username=? AND password=? LIMIT 1"; 
        
        //Preparing query statement for execution
        $statement = $database->prepare($query); 
        //Binding parameters
        $statement->bind_param("ss", $username, $password); 
        //Executing statement
        $statement->execute(); 
        //Binds variables to a prepared statement for result storage
        $statement->bind_result($username, $password); 
        //Transfers a result set from the last query
        $statement->store_result(); 

        //Now that we have the results of the query stored, we redirect user to content.php if their login attempt was successful
        if($statement->fetch()) {
            $_SESSION['userLogin'] = $username; // Initializing Session 
            header("location: content.php"); // Redirecting To Profile Page 
        } 
        //mySQL connection is stopped.
        mysqli_close($database); 
        } 
    }
?>