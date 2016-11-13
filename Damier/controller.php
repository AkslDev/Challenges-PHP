<?php
	// Déclaration de la fonction home_action
	function home_action(){
		// Taille par défaut : 3
		$size = (isset($_GET['size']))? $_GET['size']: 3;
		set_damier($size);
		$table=get_damier($size);
	    include 'views/damier.php' ;
	}
	