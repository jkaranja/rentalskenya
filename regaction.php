<?php  session_start(); ?> 


<?php

$connected =mysqli_connect("localhost", "root", "") or die("mysql connection failed".mysql_error());
mysqli_select_db($connected,"rentaldb") or die("database does not exist".mysql_error());
                          // true that header redirect it to the home page directly 
 

if(isset($_POST['submit'])){
  
           
        $firstname = mysql_real_escape_string(htmlspecialchars($_POST['firstname']));

        $lastname = mysql_real_escape_string(htmlspecialchars($_POST['lastname']));
        
$idnumber = mysql_real_escape_string(htmlspecialchars($_POST['idnumber']));
 $phonenumber = mysql_real_escape_string(htmlspecialchars($_POST['phonenumber']));
 $email = mysql_real_escape_string(htmlspecialchars($_POST['email']));

 $username = mysql_real_escape_string(htmlspecialchars($_POST['username']));
  $password = mysql_real_escape_string(htmlspecialchars($_POST['password']));
        
     

// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  

//  echo '<script type="text/javascript"> window.open("Invalid email format");</script>';

//  echo '<script type="text/javascript"> window.open("register.php","_self");</script>';
// }




$_SESSION['use']=$username;


 $queryresults="SELECT username
    FROM users
    WHERE username='$username'";










  $var=mysqli_query($connected,$queryresults)or die(mysql_error());
  echo mysqli_num_rows($var);
    
   
      if(mysqli_num_rows($var)> 0) 
{
  echo "<script>alert ('User name already registered. Please choose a different one.')</script>";
  
 echo '<script type="text/javascript"> window.open("register.php","_self");</script>';
 exit;
}  




$mysql="insert into users VALUES('','$firstname','$lastname','$idnumber','$phonenumber','$email','$username','$password')";
mysqli_query($connected,$mysql) or die("error".mysqli_error($connected));


 
 echo "<script>window.alert('Registration succesful.')</script>";
 echo '<script type="text/javascript"> window.open("account.php","_self");</script>';





}
?>