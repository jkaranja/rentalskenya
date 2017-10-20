

 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Real Estate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
 
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function () {
var fixmeTop = $('#secondheader').offset().top;       // get initial position of the element

$(window).scroll(function() {                  // assign scroll event listener

    var currentScroll = $(window).scrollTop(); // get current position

    if (currentScroll >= fixmeTop) {           // apply position: fixed if you
        $('#secondheader').css({                      // scroll to that element or below it
            position: 'fixed',
            top: '0',
            left: '0'
        });
    } else {                                   // apply position: static
        $('#secondheader').css({                      // if you scroll above it
            position: 'static'
        });
    }

});
  });
</script>
<script type="text/javascript">

$(document).ready(function(){
  
  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
  })

})



</script>
<script type="text/javascript">

$(document).ready(function(){
  
  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
  })

})



</script>


<?php session_start();?>
<?php
$connected =mysqli_connect("localhost", "root", "") or die("mysql connection failed".mysql_error());
mysqli_select_db($connected,"rentaldb") or die("database does not exist".mysql_error());





 if(isset($_POST['submit']))   // it checks whether the user clicked login button or not 
{
    
    $username=$_POST['username'];
                 
       $password=$_POST['password'];

    if( $username== "lyn" && $password=="marylyn2017")  // username is  set to "Ank"  and Password   
  {                                   // is 1234 by default     

   


         echo '<script type="text/javascript"> window.open("admin.php","_self");</script>';            //  On Successfull Login redirects to home.php

        }




$_SESSION['use']=$username;
  




  

$queryresults="SELECT email, password 
    FROM users
    WHERE username='$username' AND password='$password' ";




  $var=mysqli_query($connected,$queryresults)or die(mysql_error());
  echo mysqli_num_rows($var);
    
   
      if(mysqli_num_rows($var)> 0)  
         {                                       

          
    
         echo '<script type="text/javascript"> window.open("account.php","_self");</script>';            //  On Successfull Login redirects to home.php

        }

        else
        {








            echo "<script>window.alert('Invalid email or password')</script>";        
        }
}
 ?>

 




<style type="text/css">





  
ul {
   list-style-type:none;
   margin:0;
   padding:0;
   position absolute;
   
   float: right;
}

/*Create a horizontal list with spacing*/
li {

   display:inline-block;
   float: right;
   
}

/*Style for menu links*/
li a {
  border-left:1px solid rgba(0, 0, 0, 0.08);
border 2px 2px 0px 0px;
   display:block;
   min-width:120px;
   height: 43px;
   text-align: center;
   line-height: 44px;
   font-family: "Open Sans","Helvetica Neue",Arial,sans-serif;
   color: white;rgba(1, 25, 40, 0.8); 

   font-size: 15px;
  font-weight: 600;
   text-decoration: none;
}

/*Hover state for top level links*/

li:hover a {
   background #19c589;
       color:white;
border-right 1px solid #BAD5DE;
}

/*Style for dropdown links*/

li:hover ul{
   z-index: 1;
   margin-left:-20px;
   background: white;
   border none;
   border-radius: 4px;
   -webkit-box-shadow: 1px 3px 4px 0px black;
-moz-box-shadow:    1px 3px 4px 0px black;
box-shadow:         1px 3px 4px 0px black;
width: 520px;
height: 290px;

}
li:hover ul a {
  border none;
   background: white;
   color: #F74A27;
   height: 40px;
   width:84%;
   letter-spacing: -1px;
     font-size: 13px; 
   line-height: 20px;
}

/*Hover state for dropdown links*/
li:hover ul a:hover {
   background #19c589;
   color: #F74A27;
}

/*Hide dropdown links until they are needed*/

/*Style 'show menu' label button and hide it by default*/
.show-menu {
   font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
   text-decoration: none;
   color: #fff;
   background: transparent;
   text-align: center;
   padding: 10px 0;
   display: none;
}

/*Hide checkbox*/
input[type=checkbox]{
    display: none;
}

/*Show menu when invisible checkbox is checked*/
input[type=checkbox]:checked ~ #menu{
    display: block;
    background: rgba(247, 74, 39, 0.9);
}


/*Responsive Styles*/

@media screen and (max-width : 760px){
   /*Make dropdown links appear inline*/
   ul {
      position: static;
      display: none;
   }
   /*Create vertical spacing*/
   li {
      margin-bottom: 1px;
   }
   /*Make all menu links full width*/
   ul li, li a {
      width: 100%;
   }
   /*Display 'show menu' link*/
   .show-menu {
    font-size: 11px;
      display:block;
   }
}
#song_feature:hover {
 background-color: lavender;
  cursor: pointer;
  
box-shadow:   1px 3px 15px 0px yellow;


 } 

#logindiv{
  text-align:center;color:#1da8d6;  border-radius: 4px;  width: 65%; height: auto; display: inline-block;margin-top: 7%; 
}
 @media screen and (max-width:700px) {
  #logindiv { 
  height:auto;
width: 80%;

   }
  
}

</style>



<body style="background: #F5F3EE;">




 <div  style="background:white;  width: 100%; margin-top 0.5%;">
 
  
  <div  style="background:url(images/5.png)no-repeat center; background-size: cover; 

background:linear-gradient( rgba(1, 25, 40, 0.6), rgba(1, 25, 40, 0.6) ), url(images/5.png);background-size: cover; 

   width:100%; height: 680px; text-align: center;  color:#3b80f7;  ">
  
<div class="col-sm-4"  style="border-top 1px solid #1da8d6;border-bottom 1px solid #1da8d6; width:100%; height: 45px; border-radius 3px; backgroundrgba(1, 25, 40, 0.6);   box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.4);  ">
<span style="float: left; color:white;#0074E4; font-size: 17px; font-weight: 500;  ">
<i class="fa fa-home fa-2x"></i>
Eka Real Estate
  
</span>


<label for="show-menu" class="show-menu"><i class="fa fa-bars fa-2x"></i></label>
   <input type="checkbox" id="show-menu" role="button">
      <ul id="menu">
        
                     <li>
         <a href="about.php">About</a>
         
      </li>
      
      <li>
         <a href="contact1.php">Contact</a>
         
      </li>
      <li>
         <a href="register.php">Register </a>

        
      </li>
   </ul>


</div>
  <div id="logindiv">
  <br>

  <span style="font-size: 36px; color: white; font-weight: 600;">
    Find Your Perfect House Within Kakamega Town
  </span><br>
<span style="font-size: 17px; color: white; font-weight: 400;">
   Login to view houses you can buy or rent 
  </span>
<form  action="" method="POST"    >
  <br><input type="text"name="username"  placeholder="User name"  required/ style="width: 33%; height: 45px;color: grey; border-radius: 4px 0px 0px 4px;border: 0px solid white; padding-left: 5px;">


<input type="password"name="password"  placeholder="Password"  required/style="width: 33%; height: 45px;color: grey; border-radius: 0px 4px 4px 0px; border: 0px solid white; padding-left: 5px; margin-left: -10px; border-left: 1px solid rgba(0, 0, 0, 0.08);" ><br>

 <br>
<br><input type="submit" value="Login " name="submit" class="myButton"  style="height: 45px; width: auto; background:#F74A27; border:none; color: white; text-transform: uppercase; font-weight: 500; font-size: 18px; border-radius: 25px; padding-left: 8%; padding-right: 8%;">

<span style="font-size: 17px; color: white; font-weight: 500;">
<br><br>
   Don't have an account yet? <a href="register.php" style="color:white;"> Register</a>
  </span>
</form>
<br>

</div>
  
  
    </div>
<div class="col-sm-4" style=" width:100%; height:40px; padding-top: 14px; color: white; background: rgba(247, 74, 39, 0.9); text-align: center; ">

<i>

All rights reserved- 2017  &nbsp&nbsp&nbspFind a home near you
</i>
</div>

</div>
</body>
</html>