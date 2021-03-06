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

#header{

  border-top 1px solid #1da8d6;border-bottom 1px solid #1da8d6; width:100%; height: 45px; border-radius 3px;  background: rgba(247, 74, 39, 0.8);  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.4); 
   margin-bottom 40px;
}
@media screen and (max-width:700px) {
  #header{ 
  height:auto;


   }
  
}


 #image{
  width:100%;
  height:250px;
}
@media screen and (max-width:1030px) {
  #image { width:100%;
  height:100px; }
   background-color: #1da8d6;
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
<div class="col-sm-4"  id="header">
<span style="float: left; color:white; font-size: 17px; font-weight: 500;  ">
<i class="fa fa-home fa-2x"></i>
KaKamega GR Investors
  
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
         <a href="index.php">Login</a>
         </li> 
         <li>
         <a href="register.php">Register </a>

        
      </li>

      
      
   </ul>


</div>







 
 
 <div style="height: 50px; padding-top: 70px; width:auto; padding-left:50%; background: #F5F6F7; font-size: 18px; text-transform: uppercase;  border-bottom 2px solid #F2F2F2;  color: #515B6E; ">



</div> 
 <div class="col-sm-4"  style="background:white;  width: 100%; height: auto; text-align: center;  padding-top: 5px;">

 
  <div style=" width: 100%; height: auto; text-align: center; display: inline-block; background: white; margin-bottom:20px;"> 
  <div style="height: 50px; width: 96.4%; background: white; font-size: 20px;margin-left: 2%;  border-bottom: 1px solid #F2F2F2; margin-bottom: 15px; color: #515B6E; font-weight: 500; padding-top: 20px; text-align: center;">
 
 Have a question? Talk to us

</div>
<div style="width: 100%; display: inline-block; height: 500px; font-size: 25px;  font-weight: 500;">
  

You can reach us directly on : <br>


  Call :+254726459507


<br><br> Or <br> 

  Email Us: SupportBr@gmail.com
 
  <br>
Available from Monday to friday

  <br>

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