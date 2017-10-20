<?php   session_start();  ?>


<?php
      if(!isset($_SESSION['use'])) // If session is not set that redirect to Login Page                            {
           
       header("Location:index.php");  
       
    ?>
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
  border-left:1px solid rgba(255, 255, 255, 0.4);; rgba(0, 0, 0, 0.08);
border 2px 2px 0px 0px;
   display:block;
   min-width:120px;
   height: 43px;
   text-align: center;
   line-height: 44px;
   font-family: "Open Sans","Helvetica Neue",Arial,sans-serif;
   color: rgba(255, 255, 255, 0.9);rgba(1, 25, 40, 0.8);
   font-size: 15px;
  font-weight: 500;
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


 #imagediv{
height:auto; width:45%; float:left; margin-right:4%;
}
@media screen and (max-width:800px) {
  #imagediv { 

    width:100%;

   }
  }
#header{

  border-top 1px solid #1da8d6;border-bottom 1px solid #1da8d6; width:100%; height: 45px; border-radius 3px;  background: rgba(247, 74, 39, 0.8);  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.4); 
   margin-bottom 40px;
}

@media screen and (max-width:700px) {
  #header{ 
  height:auto;


   }
  
}





#tittle1{color:grey; padding-left:90px; font-size:15px; font-weight:bold;font-family:Helvetica;text-shadow:0px 1px 0px #4cb890;}
#tittle2 {color:#b5b7ac; font-size:16px; font-weight:bold;letter-spacing:-1px;padding-left:90px;text-shadow:0px 0.1px 0px #4cb890;}
#tittle3 {color:#b5b7ac; font-size:16px; padding-left:90px; font-weight:bold;font-familyHelvetica;text-shadow:0px 0.1px 0px #4cb890;}
@media screen and (max-width:1030px) {
    #tittle1, #tittle2,#tittle3 { padding-left:0px; font-size: 14px;  }
}


#posts{ height:auto; width:30%;  float:left; background-color:white; margin-top3px; font-size:15px; color:#373833; margin-left: 2%; margin-bottom: 3%; box-shadow: 1px 1px 2px 1px rgba(50, 50, 40, 0.1);  }

#posts:hover {

 -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;


 } 
@media screen and (max-width:1030px) {
  #posts { 
  height:150px; }
  
}

}

</style>



<body style="background#F5F3EE;">
<div class="col-sm-4" id="header">
<span style="float: left; color:white; font-size: 17px; font-weight: 500;  ">
<i class="fa fa-home fa-2x"></i>
Eka Real Estate
  
</span>


<label for="show-menu" class="show-menu"><i class="fa fa-bars fa-2x"></i></label>
   <input type="checkbox" id="show-menu" role="button">
      <ul id="menu">
        
         <li>
       <a href="logout.php">Logout &nbsp&nbsp[&nbsp<?php echo $_SESSION['use'];  ?>&nbsp]</a>

        
      </li>

<li>
         <a href="Contact.php">Contact </a>
           
         </li>

            
             <li>
         <a href="forsale.php">For Sale </a>
           
         </li>
      
      
      <li>
         <a href="rentals.php">Rentals</a>
         
      </li>
      
   </ul>


</div>







 
 <div style="height: 50px; padding-top: 70px; width:auto; padding-left:50%; background: #F5F6F7; font-size: 18px; text-transform: uppercase;  border-bottom 2px solid #F2F2F2;  color: #515B6E; ">



</div> 
 <div class="col-sm-4"  style="background:white;  width: 100%; height: 920px; text-align: center;  padding-top: 5px;">

 
 


  <div style="margin-left: 1.6%; width: 98.4%;"> 

<div style="height: auto; width: 96.4%; background: white; font-size: 21px;margin-left: 2%;  text-align: left; margin-bottom: 15px; color: #515B6E; font-weight: 600; padding-top: 20px;margin-bottom: 30px;">
  This seems like it is your dream house. Reserve it as soon as possible before it is taken. 

</div> 



  

 <?php
  error_reporting(0);
mysql_connect("localhost", "root", "") or die("mysql connection failed".mysql_error());
mysql_select_db("rentaldb") or die("database does not exist".mysql_error());
  

        $sql = "SELECT * FROM posts WHERE id=$_GET[id]";
        $result = mysql_query($sql);
    while ($row = mysql_fetch_assoc($result))
        
    { 
    echo
    "
<div style='height:auto; width:98%;  margin-left: 2%; '>

<div id='imagediv' >
<img src='".$row['pic']."' alt='house image' style='height:400px; width:100%;'></td>

</div>



<div style='height:400px; width:47%;  float:left; text-align:left;>

    <table width=100% border'1px solid black' style='height:auto;'>
 <table width=100% height=auto% >

 <tr><td style='height:30px;padding-left:17px;border-bottom: 1px solid #F2F2F2; font-weight:600; color: #999; '>

 
    More details


 </td></tr>
                         
<tr><td style='height:17px;'></td></tr>
       <tr><td style='color: #999; font-weight:400; font-size:17px;padding-left:15px;height:30px;'> Located in:&nbsp&nbsp" . $row['location'] . "</td></tr>

            <tr><td style='color: #999; font-weight:400; font-size:17px;padding-left:15px;height:30px;'> No. of Rooms:&nbsp&nbsp" . $row['rooms'] . "  </td></tr> 

            <tr><td style='color: #999; font-weight:400; font-size:17px;padding-left:15px;height:30px;'> House Type:&nbsp&nbsp" . $row['housetype'] . "</td></tr>
      
      <tr><td style='color: #999; font-weight:400; font-size:17px;padding-left:15px;height:30px;'> Cost:&nbsp&nbsp" . $row['cost'] . "</td></tr>
      <tr><td style='color: #999; font-weight:400; font-size:17px;padding-left:15px;height:30px;'> Other Details:&nbsp&nbsp<br>" . $row['description'] . "</td></tr>
  
      <tr><td style='text-align:left; height:80px;padding-left:15px;'>
<a href='rentbuy.php? id=".$row['id']."'>
<button type='button' class='btn btn-success btn-xs' style='background:rgba(247, 74, 39, 0.9); width:40%; height:auto; border: 1px solid white; font-size:18px; border-radius:4px;' >

" . $row['category'] . " House</button>
</a>
<br>
</td>


</tr>

 <tr><td style='text-align:left; height:80px;padding-left:15px;'>

<a href='account.php' style='font-size:20px; color:rgba(247, 74, 39, 0.9);'>


Back

</a>




</td>


</tr>
        </table>
        </div>
         </div>
    ";
    
    
        }
    
        ?>
  
  </div>

</div>
  </div>
  



<div class="col-sm-4" style=" width:100%; height:40px; padding-top: 14px; color: white; background: rgba(247, 74, 39, 0.9); text-align: center; ">

<i>

All rights reserved- 2017  &nbsp&nbsp&nbspFind a home near you
</i>
</div>

</body>
</html>