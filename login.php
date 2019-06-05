<?php include('meldungsserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Anmeldung</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <style>
  button
  {width:60px;

  }
  body{ background: linear-gradient(to right, aqua, green);}</style>
</head>
<body>

 <div>
  	<h1>Anmeldung</h1>
		
	 
  <form method="post" action="login.php">
  <?php include('errors.php'); ?>
  	
  		Benutzername <br>
  		<input type="text" name="benutzername" >
 
  
  		Password <br>
  		<input type="password" name="password">
  
	
  	
  		<button type="submit" class="btn" name="login_user">Login</button>
  

  	<p>
  		eine konto erstellen? <a href="register.php">klick hier</a>
  	</p>
	</form>

	</div>
</body>
</html>