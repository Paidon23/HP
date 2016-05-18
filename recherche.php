 <?php $titrepage="Pistes de recherche";
 $titresouspage="";
 include "entete.php"; 
 ?>
		
	<body>	
	
	<!--<div class="starter-template">
		<h1><?php echo ($titrepage)?></h1></br>
    </div>-->
	
	<header>
	
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" charset="utf-8"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" charset="utf-8"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.4/raphael-min.js" charset="utf-8"></script>
	<script src="mapael/jquery.mapael.js" charset="utf-8"></script>
    <script src="mapael/maps/world_countries.js" charset="utf-8"></script>
		
	</header>
	
	<body>
	
	<div class="container">
	<div class="mapcontainer">
    <div class="map">
        <span>Carte interactive de la répartition de Parkinson</span>
    </div>
    <div class="areaLegend">
        <span>Légende de la carte</span>
    </div>
    </div>
	</div>
	
	
	<div class="container">
	<div class="mapcontainer2">
    <div class="map">
        <span>Carte interactive de la répartition de Huntington</span>
    </div>
    <div class="areaLegend">
        <span>Légende de la carte</span>
    </div>
    </div>
	</div>
	<center><script type="text/javascript" src="epidemio_huntington.js"></script></center>
	<center><script type="text/javascript" src="epidemio_parkinson.js"></script></center>
	
	<table align="center">
	<tr><th bgcolor=#dbff6d><titlep>Parkinson</titlep></th><th bgcolor=#6f9300><titleh>Huntington</titleh></th></tr>
	<tr><td valign="top"></td><td valign="top"></td></tr></table>
	
	<!--<p>Voici une phrase avec un <a href="#">MOT<span><text align="center">Définition</text></br>La définition de mon mot est placée ici</span></a> pour lequel on affichera la défintion au survol de la souris.
	<br />
	<br />
	Une autre phrase en dessous, juste pour montrer le passage au-dessus du texte de la boite d'info et blabla et reblabla...
	<br /></p>-->
	</body>
	
	</body>
	
	<?php include "pied.php";?> 
