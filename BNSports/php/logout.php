<?php
session_start(); 
//Once user clicks on logout button, they are redirected here for a split second.
//This will destroy the current session and redirect the user back to index.php
if(session_destroy()) {
  header("Location: index.php");
}
?>