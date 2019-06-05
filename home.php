<?php 
  session_start(); 

  if (!isset($_SESSION['benutzername'])) {
  	$_SESSION['msg'] = "sie müssen sie zuerst einloggen";
  	header('location: login.php');
  }
 
?>
<html>
    <head lang="de">
        <meta charset="utf-8" />
       
        
       
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        
       

        <title>Home</title>
        <style>
        .mySlides {display:none;}

        </style>
    </head>
<body >
      
<div>
   
  <div class="hamburger-wrapper">
    
     <div class="hamburger">
      <span class="hamurger-first"></span>
      <span class="hamurger-second"></span>
      <span class="hamurger-third"></span>
    </div>
    <div class="hamburger-menu">
      <ul class="main-links">
        <li class="delay02"><a href="home.php"><img src="img/online-shopping.jpg" width="80px"> Home</a></li>
        <li class="delay03"><a href="kinder.php"><img src="img/th8PLNIXA9.jpg" width="80px"> Kinder</a></li>
        <li class="delay03"><a href="herrn.php"><img src="img/79539456_0052_2.jpg" width="80px"> Herren</a></li>

        <li class="delay04"><a href="frauen.php"><img src="img/frauen.jpg" width="80px">Frauen</a></li>
      </ul>
     
    </div>
  

        
   
        <div style="background-color: #3A3A3A; height:51px ;">
          
            
            <div class="header">
              
              <div class="main-nav">
                  <ul>
                  <li><a href="mybestellung.php">mybestellungen</a></li>
                    <li><a href="account.php">Konto</a></li>
                    <li><a href="login.php">ausloggen</a></li>
                   
					
                    <li><a href="warenKorb.php"><span class="glyphicon glyphicon-shopping-cart"></span> </a></li>
                  </ul>
              </div>
          </div>
      
      
        </div>
               
   
<span class="fa-stack fa-2x has-badge" data-count="5">
  <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
  <i style="" class="fa fa-shopping-cart fa-stack-2x red-cart"></i>
</span>
            
 </div>
 <div class="w3-content w3-section" style="max-width:400px">
 <img class="mySlides w3-animate-top" src="img/online-shopping.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="img/petticoat-kinderkleider-27_16.jpg" style="width:260px">
  <img class="mySlides w3-animate-top" src="img/th45KZ7PCJ.jpg" style="width:50%">
  <img class="mySlides w3-animate-bottom" src="img/Shirt-Hose-T.jpg" style="width:80%">
</div>
      
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500);    
}
</script>
        <script type="text/javascript" src="index.js"></script>
      
    </body>
</html>