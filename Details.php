<?php 
  session_start(); 

  if (!isset($_SESSION['benutzername'])) {
  	$_SESSION['msg'] = "sie müssen sie zuerst einloggen";
    header('location: login.php');
    //////////////////////////////
  }
  ?>
 
<html>
    <head lang="de">
        <meta charset="utf-8" />
       
      
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

       
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

     
        <link rel="stylesheet" type="text/css" href="Details.css">
        
      
        <title>Home</title>
        <style>
        .column {
          float: left;
          
          height:100%;
        }
        
        .center {
          display: block;
          margin-left: auto;
          margin-right: 340px;
          width: 50%;
        } 
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
     
<div class="row">
 <div class="col-sm-2" style=" background:red">ss</div>
  <div class="col-sm-8"  >
 
  <?php 
if (isset($_POST['detail'])) {

  $produktsname=$_POST["hidden_name"];
   $preis=$_POST["hidden_price"];
   $anzahl=$_POST["hidden_menge_Lager"];
   $produktsnummer=$_POST["hidden_serNum"];
   $image=$_POST["hidden_image"];
   $beschreiben=$_POST["hidden_beschreibung"];
   
  
?>
  <h1> <?php echo  $produktsname; ?> </h1>
 <img src="file/<?php echo $image; ?>" class="center">
  <h3> <?php echo 'Preis:'. $preis.'$'; ?> 
  <h3> <?php echo 'Lager:'.$anzahl; ?> 
  <h3> <?php echo 'Beschreibung:'.$beschreiben; ?> 
 


    <form method="post" action="">  
                        
				               <div class="row" >
								<div class="col-sm-2"  ></div>

  </div>
                                							   
                           
                              
                          
    </form>
	<br><br>
	<h2> Kundenbewertung</h2>
                <?php  
				 $connect = mysqli_connect("localhost", "root", "", "warenkorb");  

				// hier wird alle schuhe Produkte anzeigt und für alle Kunden
                $query = "SELECT * FROM bewertung WHERE Produkt_ID='$produktsnummer' ";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
	
				
				 
  <div class="container mt-3">
 
 <div class="media border p-3">
   <img src="file/avatar3.png"  class="mr-3 mt-3 rounded-circle" style="width:60px;">
   <div class="media-body">
     <h4><?php echo $row["kunde"]; ?> <small><i>
     <?php
							   if($row["sterne"]==1)
{
	echo " <p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star-empty'></p><p class='glyphicon glyphicon-star-empty'></p><p class='glyphicon glyphicon-star-empty'></p><p class='glyphicon glyphicon-star-empty'></p>";
}
else if($row["sterne"]==2)
{
	echo " <p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star'></p>(<p class='glyphicon glyphicon-star-empty'></p><p class='glyphicon glyphicon-star-empty'></p><p class='glyphicon glyphicon-star-empty'></p>";
}
else if($row["sterne"]==3)
{
	
	echo "<p class='glyphicon glyphicon-star '></p><p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star-empty'></p><p class='glyphicon glyphicon-star-empty'></p>";
}
else if($row["sterne"]==4)
{
	echo " <p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star-empty'></p>";
}
else if($row["sterne"]==5)
{
	echo "<p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star'></p>";
}
							   
							   ?>
     </i></small></h4>
     <p><?php echo $row["komentare"]; ?></p>      
   </div>
 </div>
</div>
                 				
                <?php  
                     }  
                }  
                ?>
                <?php } ?>
  </div>
  <div class="col-sm-2" style=" background:red">ss</div>
  
</div> 

       
 </div>
        
      
        <script type="text/javascript" src="index.js"></script>
      
    </body>
</html>