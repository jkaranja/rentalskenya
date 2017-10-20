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


 #image{
  width:100%;
  height:250px;
}
@media screen and (max-width:1030px) {
  #image { width:100%;
  height100px; }
   background-color: #1da8d6;
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
@media screen and (max-width:850px) {
  #posts { 
  height:auto;
width: 95%;

   }
  
}


#footer1{
  width:100%; height:40px; padding-top: 14px; color: white; background: rgba(247, 74, 39, 0.9); text-align: center; 
}
@media screen and (max-width:900px) {
  #footer1 { 
  display:none;

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
      <li>
         <a href="account.php">All</a>

        
      </li>
      
   </ul>


</div>







 
 <div style="height: 130px; padding-top: 70px; width:100%;  background: #F5F6F7; font-size: 18px;  text-align: center; color: #515B6E; ">


<div style=" display: inline-block; width: 70%; margin-left: 3%;">
  

 

<form method='POST' action="">

  <font style="color:#45AEC1; font-weight: 300;"> Sort By:</font>

<select name="location"  style="width: 20%; height: 30px;color: #515B6E; font-size: 15px; border-radius: 2px; border: 1px solid #45AEC1; box-shadow: inset 6px 6px 10px rgba(0, 0, 0, 0.1);  color:#45AEC1;">
 <option value="" selected="selected">location</option>
   <option>Amalemba</option>
    <option>Kefinco</option>
    <option>Lurambi</option>
  
</select>

<select name="housetype"  style="width: 20%; height: 30px;color: #515B6E; font-size: 15px; border-radius: 2px; border: 1px solid #45AEC1;box-shadow: inset 6px 6px 10px rgba(0, 0, 0, 0.1);  color:#45AEC1;  ">
 <option value="" selected="selected">House type</option>
   <option>Residential</option>
    <option>Offices</option>
  </select>


<input type="submit" name="submit" value="Find"  style="box-shadow: inset 6px 6px 10px rgba(0, 0, 0, 0.1);  color:#45AEC1; border-radius: 5px; height: 28px;border:none; ">

</form>
</div>

</div> 


 <div class="col-sm-4"  style="background:white;  width: 100%; min-height: auto;  padding-top: 5px;">

 
 


  <div style="margin-left: 1.6%; width: 98.4%;"> 

<div style="height: auto; width: 96.4%; background: white; font-size: 24px;margin-left: 2%;   margin-bottom: 15px; color: #515B6E; font-weight: 600; padding-top: 20px;">
  Find Your Dream House.  Rent a House Within Kakamega

</div> 


<div style="height: auto; width: 96.4%; background: white; font-size: 16px;margin-left: 2%;  border-bottom: 1px solid #F2F2F2; margin-bottom: 17px; color: #515B6E; font-weight: 300; padding-top: 10px; padding-bottom: 10px; ">
     Available houses you can rent

</div> 



  
<?php
error_reporting(0);

mysql_connect("localhost", "root", "") or die("mysql connection failed".mysql_error());
mysql_select_db("rentaldb") or die("database does not exist".mysql_error());
  
  define("NUMBER_PER_PAGE", 10); //number of records per page of the search results




require_once('functions.php');


  
//load the current paginated page number
$page = ($_GET['page']) ? $_GET['page'] : 1;
$start = ($page-1) * NUMBER_PER_PAGE;

/**
* if we used the search form use those variables, otherwise look for
* variables passed in the URL because someone clicked on a page number
**/

$location = ($_POST['location']) ? $_POST['location'] : $_GET['location'];
// $category= ($_POST['category']) ? $_POST['category'] : $_GET['category'];
$housetype = ($_POST['housetype']) ? $_POST['housetype'] : $_GET['housetype'];


$sql = "SELECT * FROM posts WHERE 1=1 AND username='lyn' AND category='Rent'";



if ($location)
  $sql .= " AND location='" . mysql_real_escape_string($location) . "'";
  
// if ($category)
//   $sql .= " AND category='" . mysql_real_escape_string($category) . "'";
  
if ($housetype)
  $sql .= " AND housetype='" . mysql_real_escape_string($housetype) . "'";
  
//this return the total number of records returned by our query
$total_records = mysql_num_rows(mysql_query($sql));

//now we limit our query to the number of results we want per page
$sql .= " order by id desc LIMIT $start, " . NUMBER_PER_PAGE;

/**
* Next we display our pagination at the top of our search results
* and we include the search words filled into our form so we can pass
* this information to the page numbers. That way as they click from page
* to page the query will pull up the correct results
**/
//echo "<center>" . number_format($total_records) . " search results found</center>";
//pagination($page, $total_records, "house_type=$house_type&county=$county&sub_county=$sub_county");
  
$loop = mysql_query($sql)
  or die ('cannot run the query because: ' . mysql_error());
  
while ($post = mysql_fetch_assoc($loop))
   { echo "
<a href='moredetails.php? id=".$post['id']."'>

    <div id='posts'>
    
  <table width=100% height=auto% >
 
               <tr>   <td ><img src='".$post['pic']."' alt='house image' id='image'/></td></tr>
           
<tr><td style='height:17px;'></td></tr>
       <tr><td style='color: #999; font-weight:300; font-size:15px;padding-left:15px;height:20px;'> Located in:&nbsp&nbsp" . $post['location'] . "</td></tr>

            <tr><td style='color: #999; font-weight:300; font-size:16px;padding-left:15px;height:20px;'> No. of Rooms:&nbsp&nbsp" . $post['rooms'] . "  </td></tr> 

            <tr><td style='color: #999; font-weight:300; font-size:16px;padding-left:15px;height:20px;'> House Type:&nbsp&nbsp" . $post['housetype'] . "</td></tr>
      
      <tr><td style='color: #999; font-weight:300; font-size:16px;padding-left:15px;height:20px;'> Cost:&nbsp&nbsp" . $post['cost'] . "</td></tr>
                
               <tr>
<td style='text-align:left; height:80px;padding-left:15px;'>
<a href='rentbuy.php? id=".$post['id']."'>
<button type='button' class='btn btn-success btn-xs' style='background:rgba(247, 74, 39, 0.9); width:auto; height:auto; border: 1px solid white; font-size:16px; border-radius:4px;' >

" . $post['category'] . " House</button>
</a>


</td>


</tr>
      
       
      
      
  
      
        </table>
    </div> 
    </a>";
    
    
        }

       
        ?>
  
  </div>


<!--  <div style="height: auto; width: 96.4%; background: white; font-size: 16px;margin-left: 2%;  border-bottom 1px solid #F2F2F2; margin-bottom: 15px; color: #515B6E; text-align: center; font-weight: 300; padding-top: 20px;">
    <?php  pagination($page, $total_records, "category=$category&location=$location&housetype=$housetype");
   ?>

</div>  -->


</div>
  
 


<div class="col-sm-4" id="footer1">

<i>

All rights reserved- 2017  &nbsp&nbsp&nbspFind a home near you
</i>
</div>

</body>
</html>