<?php include('meldungsserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>neue Konto</title>
  <link rel="stylesheet" type="text/css" href="register.css">
   <style>
   
   table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 0px solid #dddddd;
    text-align: left;
    padding: 8px;
}

   </style>
</head>
<body>
 
  	
  
	<div id="Box">
  <form method="post" action="register.php">
	<h1>Neue Konto</h1>
  <div class="row">
  	<?php include('errors.php'); ?>
  	
  	  <label>Benutzername</label>
  	  <input type="text" name="benutzername" value="<?php echo $benutzername;?>">
  
	<table>
  <tr>
         <th>
					 <label>Vorname</label>
  	       <input type="text" name="vorname" value="<?php echo $vorname;?>">
				 </th>
				 <th>
  	        <label>Nachname</label>
  	       <input type="text" name="nachname" value="<?php echo $nachname;?>">
        </th>
    
  </tr>

</table>
	
	<table>
  <tr>
    <th>
  	  <label>Straße.</label>
  	  <input type="text" name="strasse" value="<?php echo $strasse;?>">
    </th>
    <th>
  	  <label>Stadt</label>
  	  <input type="text" name="stadt" value="<?php echo $stadt;?>">
  	</th>
    
  </tr>

</table>
	
  	
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	
  	
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  
  	
  	  <label>password bestätigen</label>
  	  <input type="password" name="password_2">
  
  	  <button type="submit" class="btn" name="reg_user">erstellen</button>
  	
  	<p>
  		wenn sie schon eine konto haben? <a href="login.php">klick hier</a>
  	</p>
	</div>
	</form>
</div>
</body>
</html>