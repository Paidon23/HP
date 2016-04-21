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

<p class=alinea>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat, lacus ullamcorper consequat egestas, dolor lorem tempor augue, eu sagittis mauris ante quis turpis. Sed vulputate nunc quis malesuada tincidunt. Vivamus gravida neque nisl, vitae finibus tortor commodo molestie. Nullam id lacinia leo. Ut eget est id erat dapibus faucibus et a diam. Ut sed blandit mauris, venenatis efficitur quam. Suspendisse ultricies rutrum nibh quis consectetur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

<p class=alinea>Cras erat augue, luctus vel sem id, elementum viverra quam. Sed congue rhoncus quam a convallis. Fusce elementum iaculis magna, luctus egestas lorem iaculis viverra. Suspendisse potenti. Integer ut ante quis massa cursus consectetur. Aliquam eget tempor neque, eu fermentum metus. Integer sit amet neque at felis egestas mattis. Fusce id pretium sem. Phasellus facilisis leo eu mollis congue. Vivamus eu lectus id libero dictum ultricies. Nullam rutrum quis justo nec ullamcorper. Duis tristique, arcu vel ornare fermentum, neque lorem imperdiet lorem, ut tristique lectus neque ut mi. Nunc a imperdiet diam. In sodales pellentesque rutrum. Praesent volutpat eleifend dolor.</p>

<p class=alinea>Sed lacinia, ante non porta mattis, elit leo semper arcu, sed sollicitudin quam urna ut neque. Sed tempor porta dapibus. Integer risus enim, mollis eu orci quis, faucibus congue risus. Cras eu sodales orci. Donec ultricies convallis ipsum, vitae faucibus sapien ultricies sed. Duis vitae odio ut ipsum cursus venenatis sit amet eget felis. Donec finibus, augue vel sagittis suscipit, elit tellus porttitor elit, non aliquet est quam vel dui. Nam iaculis convallis leo a rhoncus.</p>

<p class=alinea>Proin in tincidunt nisl, non rutrum velit. Cras convallis rhoncus risus sit amet fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque mollis, augue varius aliquet euismod, ex orci dignissim elit, venenatis euismod dui urna id tellus. Proin a nunc eu velit faucibus venenatis venenatis sit amet ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut molestie posuere interdum. Proin tempus tincidunt pellentesque. Phasellus ut arcu a urna convallis varius vel eget justo. Pellentesque id dui sem. Fusce blandit risus eget mauris vehicula tincidunt. Vestibulum sagittis ligula nec arcu molestie feugiat. Maecenas sodales turpis et felis volutpat lobortis. Cras lacinia tortor vitae varius condimentum. Donec odio tortor, dictum eget mattis ac, rutrum ac ex. Maecenas quis velit finibus, auctor arcu non, imperdiet metus.</p>

<p class=alinea>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sodales neque dignissim tortor vulputate, vitae maximus justo malesuada. Nullam dictum ipsum ipsum, ac pellentesque dui congue sed. 
Donec varius eros tincidunt, consequat lectus vel, faucibus tortor. Quisque faucibus condimentum quam euismod bibendum. Aliquam bibendum elit id purus sollicitudin congue. 
Quisque vitae nisi vel nulla mattis rutrum. Morbi dictum elit nisi, ac gravida lacus euismod volutpat. Vivamus fermentum orci in orci gravida pharetra. 
Vivamus finibus dolor vitae purus posuere egestas. Quisque accumsan interdum sem quis maximus.</p> </td><td>	
    <p class=alinea>La maladie de Huntington étant une maladie orpheline, il est difficile d'obtenir des chiffres précis quant à 
	sa prévalence. On estime que la maladie de Huntington atteint en moyenne 5 à 7 personnes pour 100 000 habitants dans la population blanche<sup><a href="references.php">[5]</a></sup>. Toutefois,
	s'agissant d'une <a href="genetique.php">maladie génétique</a>, on observe des différences importantes de prévalence en fonction des régions du globe.
	Ainsi, elle est très faible chez les populations asiatiques (au Japon, elle est de 0,5 pour 100 000 habitants<sup><a href="references.php">[15]</a></sup>), afro-américaines 
	(notamment en Afrique du Sud, où elle est, pour la population noire, de 0,01 pour 100 000 hab.<sup><a href="references.php">[17]</a></sup>), et en Finlande (0,8 pour 100 000 hab.<sup><a href="references.php">[15]</a></sup>).</p></br>
	<div class="container">
	<div class="mapcontainer">
    <div class="map">
        <span>Carte interactive de la répartition de Huntington</span>
    </div>
    <div class="areaLegend">
        <span>Légende de la carte</span>
    </div>
    </div>
	</div>
	<center><script type="text/javascript" src="epidemio.js"></script></center>
	<p class=legend>Figure 1 - Prévalence de la maladie de Huntington dans certains pays du monde (pour 100 000 hab.)</p></br></br>
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
