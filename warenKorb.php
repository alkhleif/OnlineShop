<?php   
 session_start();  

 if(isset($_POST["delet"]))  
 {  
       
    $connect = mysqli_connect("localhost", "root", "", "produkt");  
       
 $db =  mysqli_connect('localhost', 'root', '', 'karte');
 $idd=$_POST["hidden_id"];
// 
if ($db->connect_error) {
    die( $db->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM einkaufswagen WHERE id=$idd";

if ($db->query($sql) === TRUE) {
   
} else {
    echo  $db->error;
}

$db->close();

// die gelöschte Produkt , in der produkt_tabelle addieren



$produktsnummer=$_POST["hidden_serNum"];

$deletMenge=$_POST["hidden_menge"];
$query = "SELECT anzahl FROM produkt_tabelle WHERE serenNum='$produktsnummer'";  
              $result = mysqli_query($connect, $query);
               if(mysqli_num_rows($result) > 0)  
              {  
                   while($row = mysqli_fetch_array($result))  
                   { 
                  $lagerQuantity =$row["anzahl"];
                
                    
                    $lagerQuantity=$lagerQuantity+$deletMenge;
                    
                  
                      $update = $connect->query("UPDATE produkt_tabelle SET anzahl='$lagerQuantity' 
                          WHERE serenNum='$produktsnummer' LIMIT 1");

                
                
                
              }}





                              
 }  
          
   
      
       

  
 ?> 

<html>
    <head lang="de">
        <meta charset="utf-8" />
       
        
       
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
        <link rel="stylesheet" type="text/css" href="warenkorb.css">
        
      
        <title>Home</title>
		<style>
 table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
	text-align: center;
   width:120px;
   
    padding: 8px;
}
img{
	width:110px;
}
hr{
	 display: block;
    margin-top: 1px;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
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
               
   

    
	
 </div>
<div class="jumbotron" id="headerr">
    <div class="container">
        <div class="chary">
            <h1>  <span>Ihre WarenKorb   : <?php echo $_SESSION['benutzername']; ?> </span></h1>
        </div>
        
    </div>
</div>

<?php $user=$_SESSION['benutzername']; ?>



<table>
<tr>
    
    <th>Produkt </th>
	 
   <th>Preis</th>
    <th>stückzhal</th>
	
	<th></th>
	 <th></th>
  </tr>
</table>
<hr>
<div id="item_div">
           <br />  
           <div class="container" style="width:100%;">  
            
                <?php  
				 $db = mysqli_connect('localhost', 'root', '', 'karte');
				 //wird die gekaufte produkte angezeigt
                $query = "SELECT * FROM einkaufswagen ORDER BY id ASC";  
                $result = mysqli_query($db, $query);  
                if(mysqli_num_rows($result) > 0)  
                { 
                     while($row = mysqli_fetch_array($result))  
                     { 
				 //wird nur die Produkte, die von user gekauft wurde
                     if($row['benutzer']==$user){	
                       	 
                ?>  
				 
                  
				<div class="items" id="item1"> 
				 
                     <form method="post" action="">  
                           
						    <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" /> 
                            <input type="hidden" name="hidden_serNum" value="<?php echo $row["produktsnummer"]; ?>" /> 

                            <input type="hidden" name="hidden_menge" value="<?php echo $row["anzahl"]; ?>" /> 

						   
                         <table align: center;>
                              <th><?php echo $row['produktsname']; ?> </th>
	                           <th><?php echo $row['preis']*$row['anzahl']; ?></th>
                               <th><?php echo $row['anzahl']; ?></th>
	                           <th><img src="file/<?php echo $row['image']; ?>" class="img-responsive" /></th>
	                            <th> <input type="submit" name="delet" style="margin-top:5px;" class="btn btn-success" value="löschen" /> </th>
	                        </table>
						 
                     </form> 
					 
                </div>
                 				
                <?php  
                     }  
                }  
				}
                ?>  
                <div style="clear:both"></div>  
                <br />  
			
 
                  
           </div>  
		   </div>
           <br />  
     
	 <hr>
	    
                         <table align: center;>
                              <th>Gesamt </th>
	                           <th></th>
                               <th></th>
	                         
	                            <th> <input type="submit" name="delet" style="margin-top:5px;" class="btn btn-success" value="zur Kasse" /> </th>
	                        </table>


      
        <script type="text/javascript" src="index.js"></script>
      
    </body>
</html>