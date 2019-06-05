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
     
        <link rel="stylesheet" type="text/css" href="account.css">
        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <title>Home</title>
        <style>
        .mySlides {display:none;}
        .input-group{
  list-style: none;
  padding: 5px;
  font-size: 1.1em;
  display: block;
  transition: all .3s ease-in-out;
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
                   
					
                    <li><a href="warenKorb.php"><span class="glyphicon glyphicon-shopping-cart">(2)</span> </a></li>
                  </ul>
              </div>
          </div>
      
      
        </div>
               
        <div class="container">
  
  <div class="leftbox">
  
  <?php 

if(isset($_POST["chaneName"]))  
{
  echo '
  <form method="post" action="account.php">
    <div class="input-group">  
        <label>neue Benutzername</label>
        <input type="text" name="neu_name" value="" >
      
      
        <button type="submit" class="btn" name="name_aendern">Klick</button>
       
      </div>
    </form>';
}
if(isset($_POST["changePass"])) {
  echo '
  <form method="post" action="account.php">
    <div class="input-group">
    
      
      
        <label>neu Password</label>
        <input type="text" name="neu_pass1" value="" >
        <label>Password wiederhloen</label>
        <input type="text" name="neu_pass2" value="" >
      
      
        <button type="submit" class="btn" name="pass_aendern">Klick</button>
       
      </div>
    </form>';
}

?>
  </div>
  <?php  if (isset($_SESSION['benutzername'])) : ?>

<?php $user=$_SESSION['benutzername']; ?>
  <div class="rightbox">
  <?php  
$db = mysqli_connect('localhost', 'root', '', 'anmeldungstabelle');
$query='SELECT * FROM benutzer_database ORDER by id ASC';
$result=mysqli_query($db,$query);
if($result):
   if(mysqli_num_rows($result)>0):
      while($benutzer1=mysqli_fetch_array($result)):
	   // hier wird nur jeder eigenständig Benutzer Daten gezeigt, damit er nur seine Konto sehen 
	  if($benutzer1['benutzername']==$user):
	
	  ?>
     <form method="post" action="">
    <div class="profile">
      <h1>Personal Info</h1>
      <h2>Benutzername</h2>
      <p><?php echo $benutzer1['benutzername']; ?> <button class="btn" name="chaneName">Change</button></p>
      <h2>vorname</h2>
      <p><?php echo $benutzer1['vorname']; ?></p>
      <h2>Nachname</h2>
      <p><?php echo $benutzer1['nachname']; ?></p>
      <h2>Straße</h2>
      <p><?php echo $benutzer1['strasse']; ?></p>
      <h2>Stadt</h2>
      <p><?php echo $benutzer1['stadt']; ?></p>
      <h2>Email</h2>
      <p><?php echo $benutzer1['email']; ?> </p>
      <h2>Password </h2>

      <p>••••••• <button class="btn" name="changePass">Change</button></p>
    </div>
    
	  </form >
	  </div>
    <?php  
    //Benutzer und password ändern
//hier stimme ich, in welcher id in der Tabeller, finde den Benutzer Daten
$idd= $benutzer1['id'];
$benutzer=$benutzer1['benutzername'];

 

$db = mysqli_connect('localhost', 'root', '', 'anmeldungstabelle');
if (isset($_POST['name_aendern'])){
	
	  $neu_name =  $_POST['neu_name'];
		  //hier wird die Daten in SQL geändert
       $sql = "UPDATE benutzer_database SET benutzername='$neu_name' WHERE id=$idd";	
        mysqli_query($db, $sql);
        header('location: login.php');
    
     
}
if (isset($_POST['pass_aendern'])){
	
  $pass1 =  $_POST['neu_pass1'];
  $pass2 =  $_POST['neu_pass2'];
 
    if($pass1===$pass2){
      $pass1=md5($pass1);
    //hier wird die Daten in SQL geändert
     $sql = "UPDATE benutzer_database SET password='$pass1' WHERE id=$idd";	
      mysqli_query($db, $sql);
      header('location: login.php');
    }
    else{
      echo '<script>alert("Password sind nicht gleich")</script>';
    }
   
}
    
    
    ?>
	  <?php
	  endif;
	  endwhile;
	  
	 endif;
	endif;
	  

?>
</div>
<?php endif; ?>
    

   <script type="text/javascript" src="index.js"></script>
      
    </body>
</html>