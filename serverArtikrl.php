<?php
 $connect = mysqli_connect("localhost", "root", "", "produkt");  

 if(isset($_POST["add_to_cart"]))  
 { 


  $produktsnummer=$_POST["hidden_serNum"];
  $kaufMenge=$_POST["quantity"];
 $query = "SELECT anzahl FROM produkt_tabelle WHERE serenNum='$produktsnummer'";  
                $result = mysqli_query($connect, $query);
				 if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     { 
				  $lagerQuantity =$row["anzahl"];
				  if($lagerQuantity >= $kaufMenge)
				  {
					  
					  $lagerQuantity=$lagerQuantity-$kaufMenge;
					  
                    
                        $update = $connect->query("UPDATE produkt_tabelle SET anzahl='$lagerQuantity' 
                            WHERE serenNum='$produktsnummer' LIMIT 1");

    
$db = mysqli_connect('localhost', 'root', '', 'karte');
$benutzer=$_SESSION['benutzername'];
			$produktsname=$_POST["hidden_name"];
			 $preis=$_POST["hidden_price"];
			 $anzahl=$_POST["quantity"];
				$produktsnummer=$_POST["hidden_serNum"];
			$image=$_POST["hidden_foto"];
			//der Benutzer darf die Produkt nur einmal kaufen
			$user_check_query = "SELECT * FROM einkaufswagen WHERE produktsnummer='$produktsnummer' AND benutzer='$benutzer' LIMIT 1"; 
			$result = mysqli_query($db, $user_check_query);
												 $user = mysqli_fetch_assoc($result);
				 if(!$user){
				 
								 $query = "INSERT INTO einkaufswagen (benutzer,produktsname,preis,anzahl,produktsnummer,image) 
										 VALUES('$benutzer','$produktsname','$preis','$anzahl','$produktsnummer','$image')";
				 
				 
				 mysqli_query($db, $query);
				 }else
				 {
													 echo '<script>alert("Sie haben schon das Produkt gekauft")</script>';  
				 }


				  }
				  else
				  {
					
					  echo '<script>alert("Die Produkt ist ausverkauft oder die bestellte menge nicht Verfügbar")</script>'; 
				  }
				  
				}}




 }

 

 

?>