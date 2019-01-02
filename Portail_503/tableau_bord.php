<?php 
	require 'Bateau/Bateau.php';
	session_start();
	

	$bateaux[0] = new Bateau("Mobidick",1.2,"ZODIAC","Downald Trump");
	$bateaux[1] = new Bateau("L'aventurier",10,"VOILIER","Downald Trump");
	$bateaux[2] = new Bateau("La Chaloupe",2,"PENICHE","Downald Trump");
	$bateaux[3] = new Bateau("El Mignot",200,"PAQUEBOT","Downald Trump");
	$bateaux[4] = new Bateau("El Baala",150,"YATCH","Downald Trump");
	$bateaux[5] = new Bateau("Le Charles de Gaule",300,"FREGATE","Downald Trump");
	$_SESSION['bateaux'] = $bateaux;

?>
<!doctype HTML>
		<html>
			<head>
				<title>Mon tableau de bord</title>
				<link rel='stylesheet'  type='text/css' href='style.css'/>
				<script src='jquery.js'></script>
				<script src='https://code.jquery.com/jquery-1.10.2.js'></script>		
			</head>	
			<body>	
					<div id='div_principale_tableau_de_bord'>
						<center><h1>Mon tableau de bord</h1></center>
						<?php
							if ($_SESSION['type_utilisateur'] == "proprietaire")
								include 'menu_proprietaire.php';
							else
								include 'menu_gestionaire.php';
							
							echo "<id ='message_bonjour'>Bonjour ".$_SESSION['civilite']." ".$_SESSION['nom']." ".$_SESSION['prenom'].".</p>"
						?>
						<center><h2>Mes bateaux</h2></center>
						<?php
							echo "<p id =nombre_bateaux>Vous avez ".count($_SESSION['liste_bateaux'])." bateau(x).</p>";

							echo "<p>ATTENTION TEST BATEAUX EN DUR DANS LE CODE</p>";
							for ($i=0; $i < count($bateaux); $i++) { 
								echo $bateaux[$i];
							}
						?>
						<div id="map"></div>
					</div>
					
				
				<!-- <script src='carte.js'></script>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAt_tUjODadjJJjaycP4DeMfxRML34ils&callback=initMap"async defer></script> -->
				<script type='text/javascript' src='getJsonUtilisateur.js'></script>
			</body>
		</html>


