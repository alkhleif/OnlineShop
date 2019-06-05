<?php 
  session_start(); 

  if (!isset($_SESSION['benutzername'])) {
  	$_SESSION['msg'] = "sie müssen sie zuerst einloggen";
  	header('location: login.php');
  }
 
?>
<?php
include('serverArtikrl.php');

?>
 <?php   
  
 $connect = mysqli_connect("localhost", "root", "", "produkt");         
       

  
 ?> 

<html>
    <head lang="de">
        <meta charset="utf-8" />
       
        
       
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
        <link rel="stylesheet" type="text/css" href="abteilungen.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      
        <title>Home</title>
        <style>
        #cart_button
{
	margin-top:-100px;
	margin-left:80px;
	cursor:pointer;
	float:right;
}
#cart_button img
{
	width:60px;
	height:60px;
}
#cart_button input[type="button"]
{
	background:none;
	border:none;
	background-color:red;
	border-radius:100%;
	height:30px;
	width:30px;
	margin-top:0px;
	color:white;
	font-size:17px;
	cursor:pointer;
	position:relative;
	top:-4px;
	right:18px;
}
#mycart
{
	display:none;
	background:white;
	width:800px;
	border:2px solid #000;
	position:absolute; right:0px; top:90px;
	z-index:1;
}
#mycart .cart_items
{
	border-bottom:1px dashed silver;
	padding:20px;
	padding-left:10px;
}
#mycart .cart_items img
{
	width:70px;
	height:50px;
	float:left;
}
#mycart .cart_items p
{
	margin:0px;
	font-size:17px;
	color:green;
}

#item_div{
	width:86%;
	margin:60px auto;
	}
	.items{
	padding:20px;
	background-color:gray;
	width:260px;
	height:400px;
	margin-top:20px;
	box-shadow:0px 0px 10px 0px #A4A4A4;
	box-sizing:border-box;
	float:left;
	margin:20px;
	position:relative;
	transition: all .2s ease-out;
}
.items:hover {
	transform: scale(1.21);
}
.items:hover input[type="button"]
{
	display:block;
}
.items input[type="button"]
{
	display:none;
	background:none;
	background-color:#3ADF00;
	width:200px;
	height:50px;
	border:none;
	font-size:20px;
	color:white;
	position:absolute;
	top:150px;
	left:20px;
	cursor:pointer;
}
.items img
{
	width:100px;
	height:60px;
}
.items p
{
	color: green;
}
.cap_status{color:#fff; font-size:20px; float:right; margin-right:30px;  }
.dropbtn {
    background-color:black;
    
   color: white;
    
}



.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
#myCarousel{
 
  height:35%;
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
               
				
				<div class="w3-content w3-section" style="max-width:500px">
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

    
<div id="item_div">
           <br />  
           <div class="container" style="width:100%;">  
            
                <?php  
				// hier wird alle Kleidung Produkte anzeigt und für alle Kunden
                $query = "SELECT * FROM produkt_tabelle WHERE kategorie='kinder'  ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
				 
                  
				<div class="items" id="item1"> 
				<p class="text-info"><?php echo $row["name"]; ?></p> 
                     <form method="post" action="">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               
							  <img src="file/<?php echo $row["foto"]; ?>" class="img-responsive" /><br />  
				               
                               <p class="text-info">$ <?php echo $row["preis"]; ?></p> 
                                							   
                               <input type="text" name="quantity" class="form-control" value="1"  pattern="[1-9]{1,4}" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["preis"]; ?>" />  
							   <input type="hidden" name="hidden_serNum" value="<?php echo $row["serenNum"]; ?>" /> 
							   <input type="hidden" name="hidden_foto" value="<?php echo $row["foto"]; ?>" /> 
                          <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          
													<form></form>
													<small><i><form method="post" action="Details.php">

<input type="hidden" name="hidden_beschreibung" value="<?php echo $row["beschreib"]; ?>" /> 
<input type="hidden" name="hidden_menge_Lager" value="<?php echo $row["anzahl"]; ?>" />  
	 <input type="hidden" name="hidden_image" value="<?php echo $row["foto"]; ?>" /> 
	 <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
	 <input type="hidden" name="hidden_price" value="<?php echo $row["preis"]; ?>" />  
	 <input type="hidden" name="hidden_serNum" value="<?php echo $row["serenNum"]; ?>" /> 

<input type="submit"style="margin-top:5px;" class="btn btn-success" name="detail" value="Details">
</form></i></small> 
                          </div>  
						  <p>Anzahl : <?php echo $row["anzahl"]; ?></p>
           
						  <?php
              
						  $sum=0;
                           $i=0;
						   $id=$row["serenNum"];
						   $con = mysqli_connect("localhost", "root", "", "warenkorb");  
                          $qu = "SELECT * FROM bewertung WHERE Produkt_ID='$id' ";  
                $re = mysqli_query($con, $qu);  
                if(mysqli_num_rows($re) > 0)  
                {  
                     while($ro = mysqli_fetch_array($re))  
				{ 
			$i=$i+1;
$sum=$sum+$ro["sterne"];
			
			}}
			if(	$sum>0){ 
$averg=$sum/$i;

if($averg>=1 && $averg<2)
{
	echo " <p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star-empty'></p><p class='glyphicon glyphicon-star-empty'></p><p class='glyphicon glyphicon-star-empty'></p><p class='glyphicon glyphicon-star-empty'></p>($i)";
}
else if($averg>=2 && $averg<3)
{
	echo " <p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star'></p>(<p class='glyphicon glyphicon-star-empty'></p><p class='glyphicon glyphicon-star-empty'></p><p class='glyphicon glyphicon-star-empty'></p>$i)";
}
else if($averg>=3 && $averg<4)
{
	
	echo "<p class='glyphicon glyphicon-star '></p><p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star-empty'></p><p class='glyphicon glyphicon-star-empty'></p>($i)";
}
else if($averg>=4 && $averg<5)
{
	echo " <p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star-empty'></p>($i)";
}
else if($averg>=5)
{
	echo "<p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star'></p><p class='glyphicon glyphicon-star'></p>($i)";
}
			}
						 ?>
                     </form>  
                </div>
                 				
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
				

                  
           </div>  
		   </div>
           <br />  
        
 </div>
        
      
        <script type="text/javascript" src="index.js"></script>
      
    </body>
</html>