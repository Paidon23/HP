 <?php $titrepage="Description des pathologies";
 $titresouspage="Épidémiologie";
 include "entete.php"; 
 ?>
		
	<body>	
	
	  
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" charset="utf-8"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" charset="utf-8"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.4/raphael-min.js" charset="utf-8"></script>
	<script src="mapael/jquery.mapael.js" charset="utf-8"></script>
    <script src="mapael/maps/world_countries.js" charset="utf-8"></script>
	
	<!-- <div class="starter-template">
		<h1><?php echo ($titrepage)?></h1></br>
    </div> -->
	
	<header>
		
	</header>
	
	<body>
	<table align="center">
	<tr><th bgcolor=#dbff6d><titlep>Parkinson</titlep></th><th bgcolor=#6f9300><titleh>Huntington</titleh></th></tr>
	<tr><td valign="top">

	<p class=alinea>La maladie de Parkinson touche en France entre 100 000 et 150 000 personnes. 
	Chaque année entre 8 000 et 10 000 nouveaux individus sont recensés. 
	Il y a 1% des sujets de plus de 60 ans qui sont touchés à travers le monde avec un 
	pourcentage un peu plus élevé pour les hommes. 
	Soit, dans la population générale on parle de 6 à 8 cas pour 1000 entre 65 et 69 ans 
	et de 26 à 35 cas pour 1000 entre 85 et 89 ans.</p>
	<p class=alinea>On retrouve une prévalence (nombre de nouveaux cas par an) qui est plus élevée 
	en Europe ou en Amérique du nord qu'en Afrique. 
	De manière générale, les pays les plus industrialisés ont une prévalence 
	de la maladie de Parkinson plus élevée. Néanmoins, cela peut être dû au peu d'études 
	réalisées dans les pays en développement.
	Les premiers symptômes apparaissent entre 58 et 62 ans et 80 % des cas sont 
	diagnostiqués entre 40 et 75 ans. La prévalence de la maladie augmente
	avec l'age de manière exponentielle.</p> 
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
	<center><script type="text/javascript" src="epidemio_parkinson.js"></script></center>
	<p class=legend>Figure 1 - Prévalence de la maladie de Parkinson dans certains pays du monde (pour 100 000 hab.)</p></br>
	</td><td>	
    <p class=alinea>La maladie de Huntington étant une maladie orpheline, 
	il est difficile d'obtenir des chiffres précis quant à 
	sa prévalence. On estime que la maladie de Huntington atteint en moyenne 
	5 à 7 personnes pour 100 000 habitants dans la population blanche<sup><a href="references.php">[5]</a></sup>. Toutefois,
	s'agissant d'une <a href="genetique.php">maladie génétique</a>, on observe des différences importantes de prévalence en fonction des régions du globe.
	Ainsi, elle est très faible chez les populations asiatiques (au Japon, elle est de 0,5 pour 100 000 habitants<sup><a href="references.php">[15]</a></sup>), afro-américaines 
	(notamment en Afrique du Sud, où elle est, pour la population noire, de 0,01 pour 100 000 hab.<sup><a href="references.php">[17]</a></sup>), et en Finlande (0,8 pour 100 000 hab.<sup><a href="references.php">[15]</a></sup>).</p></br>
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
	<p class=legend>Figure 2 - Prévalence de la maladie de Huntington dans certains pays du monde (pour 100 000 hab.)</p></br></br>
	<table class=in><tr><td valign="top">
	<p class=alinea>A l'opposé, les habitants du village de Barranquitas, au Vénézuela, atteignent une prévalence
	de 700 personnes sur 100 000. Au début du XIXe siècle, une femme aurait en effet été atteinte de la maladie, son arbre généalogique s'étendant
	aujourd'hui sur près de 16 000 individus<sup><a href="references.php">[18]</a></sup>.
	L'étude de la population de ce village a par ailleurs grandement contribué à découvrir le gène responsable de la maladie en 1993<sup><a href="references.php">[9]</a></sup>.</p></td>
	<td><iframe width="355" height="200" src="https://www.youtube.com/embed/D6LbkTW8fDU" frameborder="0" allowfullscreen></iframe><p class=legend>Figure 2 - Reportage de la BBC sur Nancy Wexler et le village de Barranquitas.</p></td></tr></table>
	<p class=alinea>La maladie touche les hommes et les femmes sans distinction. Les premiers signes de la maladie surviennent en général 
	aux alentours de l'âge de 40 ans. Toutefois, cet âge peut varier de façon considérable : ainsi, la maladie est apparue, dans des cas
	exceptionnels, dès l'âge de 2 ans, ou bien pas avant l'âge de 87 ans. 6 à 10% des patients sont atteints de la forme juvénile de la maladie : 
	leurs premiers symptômes sont apparus avant l'âge de 20 ans. A l'inverse, on parle de forme tardive lorsqu'ils surviennent après 50 ans. 
	L'espérance de vie est de 15 à 20 ans après le diagnostic, période durant laquelle les symptômes progressent continuellement<sup><a href="references.php">[1][5]</a></sup>.</p></td></tr></table>


	
	<!--<p>Voici une phrase avec un <a href="#">MOT<span><text align="center">Définition</text></br>La définition de mon mot est placée ici</span></a> pour lequel on affichera la défintion au survol de la souris.
	<br />
	<br />
	Une autre phrase en dessous, juste pour montrer le passage au-dessus du texte de la boite d'info et blabla et reblabla...
	<br /></p>
	</body>-->
	
	</body>
	
	<?php include "pied.php";?> 
