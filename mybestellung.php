<?php
include('bewertung.php');
?>
<?php   
 session_start();  
  
 if(isset($_POST["delet"]))  
 {  
       
           
             
 $db =  mysqli_connect('localhost', 'root', '', 'karte');
 $idd=$_POST["hidden_serNum"];
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

								   
             }  
          
          
       

  
 ?> 

<html>
    <head lang="de">
        <meta charset="utf-8" />
       
        
       
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
        <link rel="stylesheet" type="text/css" href="bestellung.css">
        
      
        <title>Home</title>
		<style>
          

          .error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}

span#Bewertung { 
 line-height: 45px; 
} 

span.sternebewertung { 
 float: Left; 
} 

span.sternebewertung:not(:checked) > input { 
 display: None; 
} 

span.sternebewertung:not(:checked) > label { 
 float: Right; 
 width: 1em; 
 padding: 0 .1em; 
 overflow: Hidden; 
 white-space: Nowrap; 
 cursor: Pointer; 
 font-size: 310%; 
 line-height: 2.2; 
 color: #D0D0D0; 
 text-shadow: 1px 1px #B0B0B0, 2px 2px #606060, .1em .1em .2em rgba(0,0,0,.5); 
 transition: all .5s; 
} 

span.sternebewertung:not(:checked) > label:before { 
 content: '★ '; 
} 

span.sternebewertung > input:checked ~ label { 
 color: #FFD700; 
 text-shadow: 1px 1px #C06000, 2px 2px #904000, .1em .1em .2em rgba(0,0,0,.5); 
} 

span.sternebewertung:not(:checked) > label:hover, 
span.sternebewertung:not(:checked) > label:hover ~ label { 
 color: #FFD700; 
 text-shadow: 1px 1px #F29E02, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5); 
} 

span.sternebewertung > input:checked + label:hover, 
span.sternebewertung > input:checked + label:hover ~ label, 
span.sternebewertung > input:checked ~ label:hover, 
span.sternebewertung > input:checked ~ label:hover ~ label, 
span.sternebewertung > label:hover ~ input:checked ~ label { 
 color: #F9B500; 
 text-shadow: 1px 1px #F8BA01, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5); 
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
            <h1>  <span>Ihre Bestellung   : <?php echo $_SESSION['benutzername']; ?> </span></h1>
        </div>
        
    </div>
</div>

<?php $user=$_SESSION['benutzername']; ?>




<hr>
<div id="item_div">
           <br />  
           <div class="container" style="width:100%;">  
            
                <?php  
				 $db = mysqli_connect('localhost', 'root', '', 'karte');
				 //wird die gekaufte produkte angezeigt
                $query = "SELECT * FROM mybestellung ORDER BY id ASC";  
                $result = mysqli_query($db, $query);  
                if(mysqli_num_rows($result) > 0)  
                { 
                     while($row = mysqli_fetch_array($result))  
                     { 
				 //wird nur die Produkte, die von user gekauft wurde
                     if($row['K_name']==$user){				 
                ?>  
				 


               <div class="row">
    <div class="col-sm-4" ><img src="file/<?php echo $row['image']; ?>" class="img-responsive" /></div>
    <div class="col-sm-4" >
  
    
  </div>
    <div class="col-sm-4" >
    <h2>Name  :<?php echo $row['produkt_name']; ?> </h2>
    <h3>Menge   :<?php echo $row['menge']; ?></h3>
    <h3>Preis   :<?php echo $row['preis']; ?></h3>
    </div>
   
  </div>
</div>   				
                <?php  
                     }  
                }  
				}
                ?>  
                <div style="clear:both"></div>  
                <br />  
				
                <div class="container-fluid">
  
 

                  
           </div>  
		   </div>
           <br />  
     
	 <hr>
	   <h1>Bewertung Bereich</h1>
       <hr>
       <h2>Bitte eine Produkt von ihre gekaufte Produkte auswählen, um sie zu bewerten</h2> 

       <div class="row">



       <form action="" method="post">
       <div class="col-sm-4" >
       <div class="select-field">
       <input type="hidden" name="hidden_kunde" value="<?php echo $user; ?>" />  

<select class="profil-select" name="kategorie" style="border-radius: 25px;  border-style: solid; height: 40px;" id="Kategorie"  onchange="getseleclt_Value()" required="required" >
<option value selected="selected" >Kategorie</option>
<?php  
				 $db = mysqli_connect('localhost', 'root', '', 'karte');
				 //wird die gekaufte produkte angezeigt
                $query = "SELECT * FROM mybestellung ORDER BY id ASC";  
                $result = mysqli_query($db, $query);  
                if(mysqli_num_rows($result) > 0)  
                { 
                     while($row = mysqli_fetch_array($result))  
                     { 
				 //wird nur die Produkte, die von user gekauft wurde, angezeigt
                     if($row['K_name']==$user){	
                       			 
                ?>  
 

    <option value=<?php echo $row['Produkt_Id']; ?> >
    
    <?php echo $row['produkt_name']; ?>
    
    </option>

    </form>
    <?php  
                     }  
                }  
				}
                ?>
    <span class="error-block">Auswahl fehlt</span>
</select>

</div>    
                
                
  </div>
       <div class="col-sm-4" > <?php  
      
       
       ?>
         <label>Komentare schreiben</label>
  	  <textarea type="text" name="komentare" value=""  cols="60" rows="5" required="required"></textarea>
       
       </div>
       <div class="col-sm-4" >
          
    <p> 
<span class="sternebewertung" required="required"> 
 <input type="radio" id="stern5" name="bewertung" value="5"><label for="stern5" title="5 Sterne">5 Sterne</label> 
 <input type="radio" id="stern4" name="bewertung" value="4"><label for="stern4" title="4 Sterne">4 Sterne</label> 
 <input type="radio" id="stern3" name="bewertung" value="3"><label for="stern3" title="3 Sterne">3 Sterne</label> 
 <input type="radio" id="stern2" name="bewertung" value="2"><label for="stern2" title="2 Sterne">2 Sterne</label> 
 <input type="radio" id="stern1" name="bewertung" value="1"><label for="stern1" title="1 Stern">1 Stern</label> 
  
</span> 
</p>


       </div>
       <input type="submit" name="send" value="senden" />
     
        <script type="text/javascript" src="index.js"></script>
      
    </body>
</html>