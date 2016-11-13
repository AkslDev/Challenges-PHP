<?php
	// Déclaration de ma fonction home_action
	function home_action(){
		// Taille par défaut: 3
		$size=(isset($_GET['size']))? $_GET['size']: 3;
		if ($size%2==0) {
			$size--;
		}
		set_pyramide($size);		
		$table=get_pyramide($size);
	    include 'views/pyramide.php' ;
	}