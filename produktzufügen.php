<?php 
  session_start(); 
  if (!isset($_SESSION['benutzername'])) {
  	$_SESSION['msg'] = "sie müssen sie zuerst einloggen";
  	header('location: login.php');
  }
 



?>
<?php
include('server_eingaben.php');
include('server_anzeige.php') ;
?>
<html>
    <head lang="de">
        <meta charset="utf-8" />
       
        
       
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="artikel.css">
        
       

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
  
<?php
//produksdaten per Link/URL parameter übergeben
$errors = array();
 if(isset($_GET['kategorie'])|| isset($_GET['name']) || isset($_GET['serenNum'])  || isset($_GET['preis']) || isset($_GET['beschreib']) || isset($_GET['foto']) || isset($_GET['anzahl']))
 {     
          // wenn alle value richtig eingegeben sind, füge das prudukt ein
     if(!empty($_GET["name"]) && !empty($_GET["kategorie"])  && !empty($_GET["serenNum"])  && !empty($_GET["preis"])  && !empty($_GET["beschreib"])  && !empty($_GET["foto"])  && !empty($_GET["anzahl"]))	
        {	
          if( $_GET['kategorie'] =="kinder" || $_GET['kategorie'] === 'frauen' || $_GET['kategorie'] === 'man' )
          { 
            // überprüfen ob die preis numerisch zahl ist
             if (is_numeric($_GET['preis'])) 
             {
               // überprüfen ob anzahl des Produktes numerisch zahl ist
              if (is_numeric($_GET['anzahl'])) { 
                $db = mysqli_connect('localhost', 'root', '', 'Produkt');
                $query = "INSERT INTO produkt_tabelle (kategorie,name, serenNum,preis, beschreib,foto,anzahl) 
                VALUES('{$_GET['kategorie']}','{$_GET['name']}', '{$_GET['serenNum']}', '{$_GET['preis']}'','{$_GET['beschreib']}','{$_GET['foto']}','{$_GET['anzahl']}')";
          mysqli_query($db, $query);
               }else{
                array_push($errors, "anzahl des Pruduktes darf nur numerisch zahl sein");
               }
               
//
             }else{
              array_push($errors, "die preis darf kein zeichen enthalten");
              
             }

          }else
          {
           
            array_push($errors, "diese kategorie ist bei uns leidr noch nicht veröffentlicht,
             sie könne Ihr Prpdukt entweder in frauen, man oder kinder kategorie anzeigen\n "); 
          }
             
       }
       else {
        

        if(empty($_GET["name"])){ array_push($errors, "bitte geben sie die die Value >>name"); }
        if(empty($_GET["kategorie"])) { array_push($errors, "bitte geben sie die die Value >>kategorie"); }
        if(empty($_GET["serenNum"])) { array_push($errors, "bitte geben sie die die Value >>serenNum"); }
        if(empty($_GET["preis"])) { array_push($errors, "bitte geben sie die die Value >>preis"); }
        if(empty($_GET["beschreib"])) { array_push($errors, "bitte geben sie die die Value >>beschreib"); }
        if(empty($_GET["anzahl"])) { array_push($errors, "bitte geben sie die die Value >>anzahl"); }
        if(empty($_GET["foto"])) { array_push($errors, "bitte geben sie die die Value >>foto"); }



   
        }
    }



?>
        
   
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
            

 
<div class="header">
  	<h1>Neue Produkt anzeigen</h1>
  </div>
  <form method="post" action="produktzufügen.php" enctype="multipart/form-data">
  	
  <?php include('errors.php'); ?>
	 
      <div class="select-field">

                        <select class="profil-select" name="Kategorie" style="border-radius: 25px;  border-style: solid; height: 40px;" id="Kategorie"  onchange="getseleclt_Value()" required="required" >
                        <option value selected="selected" >Kategorie</option>
                            <option value="man">
                                Herren
                            </option>
                            <option value="kinder">
                                Kinder
                            </option>
						               	<option value="damen">
                                Damen
                            </option>
                            <span class="error-block">Auswahl fehlt</span>
                        </select>

                    </div>
					
                   
  	<div class="input-group" class="col-xs-4">
	
  	  <label>produkt_name</label>
  	  <input type="text" name="name" value="<?php echo $name;?>">
  	</div>
  	<div class="input-group" class="col-xs-4">
  	  <label>SerNum</label>
  	  <input type="text" name="sernum" value="<?php echo $sernum;?>"/>
  	</div>
  	<div class="input-group" class="col-xs-2">
  	  <label>Preis</label>
  	  <input type="Nummer" name="preis" value="<?php echo $preis;?>">
  	</div>
    <div class="input-group" class="col-xs-2">
  	  <label>Anzahl</label>
  	  <input type="Nummer" name="anzahl" value="">
  	</div>
  	<div class="input-group">
  	  <label>Beschreibung</label>
  	  <textarea type="text" name="beschreiben" value=""  cols="60" rows="5"></textarea>
  	</div>
	<div>
  	  <input type="file" name="image1">
  	</div>
  	
  
  	<div class="input-group">
	
  	  <button type="submit" class="btn" name="submit1" value="upload" >erstellen</button>
  	</div>
  	<p>
  		zurück zur Home Seite? <a href="loggin.php">klick hier</a>
  	</p>

  </form>

        <script type="text/javascript" src="index.js"></script>
      
    </body>
</html>