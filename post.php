 <?php session_start();?>




<?php
      if(!isset($_SESSION['use'])) // If session is not set that redirect to Login Page                            {
           
       header("Location:index.php");  
       
    ?>

 <?php
error_reporting(0);

 $connected =mysqli_connect("localhost", "root", "") or die("mysql connection failed".mysqli_error());
mysqli_select_db($connected,"rentaldb") or die("database does not exist".mysql_error());
if($_SERVER["REQUEST_METHOD"]=="POST"){


//mysql_query("INSERT INTO files SET file_data='$file_contents'") or die("MySQL Query Error: " . mysql_error() . "<br><br>". "The SQL was: $SQL<br><br>");
    
  
   
    // image code
     
            $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file2"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
 
//if (file_exists($target_file)) {
   // echo "Sorry, file already exists.";
   // $uploadOk = 0;
//}
// Check file size
// if ($_FILES["file2"]["size"] > 5120*1024) {

//   //echo "<script>window.alert('Sorry, your file is too large.')</script>";
//    //echo "Sorry, your file is too large.";
// echo "<script>window.alert('file too large')</script>"; 
// echo '<script type="text/javascript"> window.open("admin.php","_self");</script>';

//     $uploadOk = 0;
// }
// Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//    $uploadOk = 0;
// }
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} elseif (move_uploaded_file($_FILES["file2"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    }
  //end of image code
   

$Location  = mysqli_real_escape_string(htmlspecialchars($_POST['location']));
$category  = mysqli_real_escape_string(htmlspecialchars($_POST['category']));
$housetype = mysqli_real_escape_string(htmlspecialchars($_POST['housetype']));
$cost= mysqli_real_escape_string(htmlspecialchars($_POST['cost']));
$rooms= mysqli_real_escape_string(htmlspecialchars($_POST['rooms']));
$description= mysqli_real_escape_string(htmlspecialchars($_POST['description']));

$username=$_SESSION['use'];



$mysql="insert into posts VALUES('','$Location','$category','$housetype','$cost','$target_file','$rooms','$description','$username',NOW())";
mysqli_query($connected,$mysql) or die("error".mysqli_error($connected));


 echo "<script>window.alert('Added')</script>"; 
echo '<script type="text/javascript"> window.open("admin.php","_self");</script>';  
}

?>