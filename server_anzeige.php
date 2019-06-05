<?php


// initializing variables
$name = "";
$sernum    = "";
$preis="";
$errors = array(); 

// verbinden mit den database
$db = mysqli_connect('localhost', 'root', '', 'Produkt');

//
if (isset($_POST['submit1'])) {
  // empfange alle Eingabewerte aus dem Formular
  $Kategorie=mysqli_real_escape_string($db, $_POST['Kategorie']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $sernum = mysqli_real_escape_string($db, $_POST['sernum']);
  $preis = mysqli_real_escape_string($db, $_POST['preis']);
  $anzahl = mysqli_real_escape_string($db, $_POST['anzahl']);
  $beschreiben = mysqli_real_escape_string($db, $_POST['beschreiben']);
  $image_pfand="file/".basename($_FILES['image1']['name']);
  $image=$_FILES['image1']['name'];
  $imagetemp=$_FILES['image1']['tmp_name'];
  
  

   //Formularvalidierung: Stellt sicher, dass das Formular korrekt ausgefüllt wird
  // wenn nicht ausgefüllt, wird einen Felher gezeigt
   if (empty($Kategorie)) { array_push($errors, "bitte die Kategorie auswählen"); }
  if (empty($name)) { array_push($errors, "Bitte  name des Produkt eingeben "); }
  if (empty($sernum)) { array_push($errors, "sernum eingeben"); }
  if (empty($preis)) { array_push($errors, "bitte preis eingeben"); }
    if (empty($beschreiben)) { array_push($errors, "bitte kure die Produkt beschreiben"); }
 if (empty($beschreiben) ||empty($Kategorie)||empty($name)||empty($preis)||empty($sernum)) { array_push($errors, "die eingaben sind nicht Vollständig"); }

 // um das Foto hochzuladen
 $file_type=explode('.',$image);
 $file_Extention=strtolower(end($file_type));
 $zulaessig=array('jpg','png','jpeg');
 if(in_array($file_Extention, $zulaessig))
 {
	  move_uploaded_file($imagetemp, $image_pfand);
 }else{
	 array_push($errors, "unzulässig Dokument");
 }

  // Registrieren Sie schließlich den Benutzer, wenn das Formular keinen Fehler enthält
  if (count($errors) == 0) {
  
// hier wird die Kleidung Produkte in der Tabelle produkt_tabelle gepeichert
  	$query = "INSERT INTO produkt_tabelle (kategorie,name, serenNum,preis, beschreib,foto,anzahl) 
  			  VALUES('$Kategorie','$name', '$sernum', $preis,'$beschreiben','$image','$anzahl')";
  	mysqli_query($db, $query);
  	
  }
}


?>