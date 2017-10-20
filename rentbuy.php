
<?php  session_start(); ?> 
<?php

include('connect-db.php');


$category1="Rented";

$category2="Sold";



$reservedby=$_SESSION['use'];


$_SESSION['use1']=$reservedid;


// save the data to the database



mysql_query("UPDATE posts SET category='$category1', username='$reservedby', timeaction=Now()  WHERE id=$_GET[id]  AND category='Rent'")


or die(mysql_error());

mysql_query("UPDATE posts SET category='$category2', username='$reservedby', timeaction=Now() WHERE id=$_GET[id]  AND category='Buy'")


or die(mysql_error());



// once saved, redirect back to the view page

header("Location: reserve.php");






?>