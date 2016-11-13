<!DOCTYPE html>
<!-- Début du HTML -->
<html lang="en">
<!-- Début du HEAD -->
<head>
	<meta charset="UTF-8">
	<title>Damier</title>
	<!-- Liens vers mes CSS -->
  	<link rel="stylesheet" href="https://cdnjs.clou	dflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
	<link rel="stylesheet" href="/assets/styles.css">
</head>
<!-- Fin du HEAD -->
<!-- Début du BODY -->
<body>
	<div class="container">
		<div class="row">
			<h4 class="title">Damier</h4>
    			<form class="col s12">
      				<div class="row">
       					<div class="input-field col s6 size">
          						<input name="size" id="size" type="number" class="validate" max="400" min ="3">
          						<label class="labeltxt" for="size">
          							Taille de la base du Damier:
          						</label>
          						<button class="envoyer btn waves-effect waves-light" id="sendbtn">Envoyer</button>
        					</div>
                                  <div class="col s6" >
                                      <svg width="500" height="500" id="draw">
                                            <?php draw_damier($size,$table)?>
                                      </svg>
                                  </div>
      				</div>
    			</form>
  		</div>
      </div>
<!-- Liens vers mes Fichiers JJavaScript -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
</body>
<!-- Fin du BODY -->
</html>
<!-- Fin du HTML -->