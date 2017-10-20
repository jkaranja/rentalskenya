<?php
 session_start();

  
  session_destroy();   // function that Destroys Session 
  unset($_SESSION['use']);
  header("Location: index.php");
?>

