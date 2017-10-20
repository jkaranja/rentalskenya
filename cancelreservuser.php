
<?php  session_start(); ?> 
<?php

include('connect-db.php');


$category1="Rent";

$category2="Buy";




$reserved='lyn';



// save the data to the database



mysql_query("UPDATE posts SET category='$category1', username='$reserved'   WHERE id=$_GET[id]  AND category='Rented'")


or die(mysql_error());

mysql_query("UPDATE posts SET category='$category2', username='$reserved' WHERE id=$_GET[id]  AND category='Sold'")


or die(mysql_error());



// once saved, redirect back to the view page

header("Location: account.php");






?>