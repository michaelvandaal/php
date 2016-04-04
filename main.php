<?php
    $leeftijd = 31;
	$prijs = 10;
	
	
	if ($leeftijd >65){
		$prijs = $prijs /2;
		
	}else if ($leeftijd <3){
		$prijs = 0;
		
	}else if ($leeftijd <12){
		$prijs = $prijs /2;
	}
	
	echo "prijs: " .$prijs." ";
	echo "leeftijd: ".$leeftijd." ";
?>