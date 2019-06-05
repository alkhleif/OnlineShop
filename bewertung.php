
<?php


$db = mysqli_connect('localhost', 'root', '', 'warenkorb');


 if(isset($_POST['send'])){
	$komentare= $_POST['komentare'];
	$bewertung= $_POST['bewertung'];
	$Produkt_ID= $_POST['kategorie'];
	$kunde= $_POST['hidden_kunde'];
	
	if (empty($bewertung) ||empty($komentare) ) 
	{
		
		echo '<script>alert("Sie haben noch keine Bewertung ausgewählt")</script>'; 
	}
	else{
		
		 //Eine kunde darf das Produktnur einmal bewerten
		 $user_check_query = "SELECT * FROM bewertung WHERE kunde='$kunde' AND Produkt_ID='$Produkt_ID' ";
		 $result = mysqli_query($db, $user_check_query);
		 $user = mysqli_fetch_assoc($result);
		 
  // wenn der Benutzer das Produkt schon bewertet
    if ($user['kunde'] == $kunde &&  $user['Produkt_ID'] == $Produkt_ID ) {

		echo '<script>alert("Sie dürfen das Produkt nur einmal bewerten")</script>'; 
      
	}
	
	else{
		$query = "INSERT INTO bewertung (kunde,Produkt_ID,sterne,komentare) 
  			  VALUES('$kunde','$Produkt_ID','$bewertung','$komentare')";
  	mysqli_query($db, $query);
	}
}

}
			 
		 
	
		 

	 
        
		 
        
       




?>