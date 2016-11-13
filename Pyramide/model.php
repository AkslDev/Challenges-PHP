<?php

// Définition de ma fonction set_pyramide :
function set_pyramide($size){
	$file 		= fopen('../data.txt', 'w+');
	$height		= (int)$size/2;
	$result		= "";
	$line		= "";

	for ($i=0; $i < $height ; $i++) { 
		for ($j=0; $j < $size ; $j++) {
			if ($j<$i || $j+1>$size-$i) {
				$character 	= "#";
			}else{
				$character 	= "*";
			}
			$line.=$character;
		}
		$line.="\n"; // Permet d'ajouter une ligne
		$result 	= $line.$result;
		$line 	= "";
	}
	fputs($file, $result);
	fclose($file);
}

// Définition de ma fonction get_pyramide :
function get_pyramide($size){
	$handle 	= fopen('../data.txt', 'r');
	$table		= [];

	// La boucle va remplir $table avec le fichier data.txt
	for ($i=0; $i < $size ; $i++) { 
		$line 		= fgets($handle);
		$table[] 	= [];
		for ($j=0; $j < strlen($line)-1 ; $j++){ 
			$table[$i][]= $line[$j];
		}	
	}
	return $table;
}

// Définition de ma fonction draw_pyramide
function  draw_pyramide ($size,$table){
	$dimension = (1/$size)*500;
	for ($i=0; $i < count($table) ; $i++){ 
		for ($j=0; $j < count($table[$i]) ; $j++) { 
			// choix de couleur
			$r 	= $i*9;
			$g 	= $i;
			$b 	= $i*3;

			if ($table[$i][$j] == "*"){
				echo "<rect x=".($j*$dimension)." y=".($i*$dimension)." width='$dimension' height='$dimension' fill='rgb($r,$g,$b)'/>";
			}
		}
	}
}


































