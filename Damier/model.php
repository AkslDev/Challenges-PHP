<?php

// Définition de ma fonction set_pyramide :
function set_damier($size){
	$file 	=  	fopen('../data.txt', 'w+');

	for ($i=0; $i < $size ; $i++) { 
		for ($j=0; $j < $size ; $j++) { 
			if ($j%2==1) {
				$character 	= 	($i%2==1)? "#": "*";
			}else{
				$character 	= 	($i%2==1)? "*": "#";
			}
			fputs($file, $character);
		}
		fputs($file, "\n");
	}
	fclose($file);
}

// Définition de ma fonction get_pyramide :
function get_damier($size){
	$handle 	= fopen ('../data.txt', 'r');
	$table 		= [];

	for ($i=0; $i < $size; $i++) { 
		$line = fgets($handle);
		$table[]=[];
		for ($j=0; $j < strlen($line)-1; $j++) { 
			$table[$i][]=$line[$j];
		}
	}
	return $table;
}
function draw_damier($size,$table){
//taille proportionelle
	$dimension=(1/$size)*500;
	for ($i=0; $i < Count($table); $i++) { 
		for ($j=0; $j < Count($table[$i]); $j++) { 
			//choix de la couleur
			if ($table[$i][$j]=="*") {
				$color="#ee6e73";
			}elseif($table[$i][$j]=="#"){
				$color="#777777";
			}
			//dessin d'un carré
			echo "<rect x=".($j*$dimension)." y=".($i*$dimension)." width='$dimension' height='$dimension' fill='$color'/>";
		}
	}
}
