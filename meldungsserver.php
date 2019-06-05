<?php

session_start();
error_reporting(E_ERROR |E_PARSE);
// initializing variables
$benutzername = "";
$email    = "";
$vorname    = "";
$nachname    = "";
$strasse    = "";
$stadt    = "";

$errors = array(); 

// verbinden mit den database
$db = mysqli_connect('localhost', 'root', '', 'anmeldungstabelle');

// wenn der Benutzer auf Button erstellen klickt
if (isset($_POST['reg_user'])) {
  // empfange alle Eingabewerte aus dem Formular
  $benutzername = mysqli_real_escape_string($db, $_POST['benutzername']);
   $vorname = mysqli_real_escape_string($db, $_POST['vorname']);
    $nachname = mysqli_real_escape_string($db, $_POST['nachname']);
	 $strasse = mysqli_real_escape_string($db, $_POST['strasse']);
	  $stadt = mysqli_real_escape_string($db, $_POST['stadt']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  //Formularvalidierung: Stellt sicher, dass das Formular korrekt ausgefüllt wird
  // wenn nicht ausgefüllt, wird einen Felher gezeigt
  if (empty($benutzername)) { array_push($errors, "Bitte ihr benutzername eingeben"); }
   if (empty($vorname)) { array_push($errors, "Bitte ihr vorname eingeben"); }
    if (empty($nachname)) { array_push($errors, "Bitte ihr nachname eingeben"); }
	 if (empty($strasse)) { array_push($errors, "Bitte ihr strasse eingeben"); }
	  if (empty($stadt)) { array_push($errors, "Bitte ihr stadt eingeben"); }
  if (empty($email)) { array_push($errors, "Email eingeben"); }
  if (empty($password_1)) { array_push($errors, "bitte kennwort eingeben"); }
  //validieren, dass die zweite Kennwörte gleich sind
  if ($password_1 != $password_2) {
	array_push($errors, "die kennwörte sind nicht gleich");
  }

  
  //***************************************************************************************
  //Überprüft die Datenbank,ob
  //Ein Benutzer existiert nicht bereits mit demselben Benutzernamen oder derselben E-Mail
  $user_check_query = "SELECT * FROM benutzer_database WHERE benutzername='$benutzername' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // wenn der Benutzer existiert
    if ($user['benutzername'] === $benutzername) {
      array_push($errors, "Benutzer name ist schon benutzt");
    }

    if ($user['email'] === $email) {
      array_push($errors, "es wurde schon auf die email eine Konto gestellt");
    }
  }
//**********************************************************************************************

  // wird den Benutzer schließlich registriert, wenn das Formular keinen Fehler enthält
  if (count($errors) == 0) {
  	$password = md5($password_1);//verschlüsseln Sie das Passwort vor dem Speichern in der Datenbank

  	$query = "INSERT INTO benutzer_database (benutzername,vorname,nachname,strasse,stadt, password,email) 
  			  VALUES('$benutzername','$vorname','$nachname','$strasse','$stadt','$password','$email')";
  	mysqli_query($db, $query);
  	$_SESSION['benutzername'] = $benutzername;
  	//wenn alle Eingaben ausgefüllt,wird die Seite loggin.php angezeigt.
  	header('location: login.php');
  }
}

// wenn den Benuter auf einlogen klickt
if (isset($_POST['login_user'])) {
	 // empfange alle Eingabewerte aus dem Formular
  $benutzername = mysqli_real_escape_string($db, $_POST['benutzername']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($benutzername)) {
  	array_push($errors, "Bitte Benutzer name eingeben");
  }
  if (empty($password)) {
  	array_push($errors, "Bitte Kennwort eingeben");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM benutzer_database WHERE benutzername='$benutzername' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['benutzername'] = $benutzername;
  	  $_SESSION['success'] = "sin sind eingeloggen";
  	  header('location: home.php');
  	}else {
  		array_push($errors, "entweder die Benuter name oder Kennwort Falsch");
  	}
  }
}

?>