<?php


// initializing variables
$name = "";
$sernum    = "";
$preis="";
$errors = array(); 




if (isset($_POST['submit1'])) {
 
  

   //Formularvalidierung: Stellt sicher, dass das Formular korrekt ausgefüllt wird
  // wenn nicht ausgefüllt, wird einen Felher gezeigt
   if (empty($Kategorie)) { array_push($errors, "bitte die Kategorie auswählen"); }
  if (empty($name)) { array_push($errors, "Bitte  name des Produkt eingeben "); }
  if (empty($sernum)) { array_push($errors, "sernum eingeben"); }
  if (empty($preis)) { array_push($errors, "bitte preis eingeben"); }
    if (empty($beschreiben)) { array_push($errors, "bitte kure die Produkt beschreiben"); }
 if (empty($beschreiben) ||empty($Kategorie)||empty($name)||empty($preis)||empty($sernum)) { array_push($errors, "die eingaben sind nicht Vollständig"); }

 

  
}


?>