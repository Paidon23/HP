 <?php $titrepage="Description des pathologies";
 $titresouspage="Historique";
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
	<tr><td></td><td>		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/jquery.timelinr-0.9.6.js"></script>
	<script>
		$(function(){
			$().timelinr({
				arrowKeys: 'true',
				orientation: 'vertical',
			})
		});
	</script>
	<div id="timeline">
		<ul id="dates">
			<li><a href="#1485" class="selected">1485</a></li>
			<li><a href="#1860">1860</a></li>
			<li><a href="#1872">1872</a></li>
			<li><a href="#1952">1952</a></li>
			<li><a href="#1979">1979</a></li>
			<li><a href="#1983">1983</a></li>
			<li><a href="#1993">1993</a></li>
		</ul>
		<ul id="issues">
			<li id="1485" class="selected">
				<center><img src="images/DanseStGuy.jpg" width="256" height="256" /></center>
				<h1>1485</h1>
				<p class="alinea">Contrairement à la maladie de Parkinson, aucune mention d'une pathologie provoquant
				des mouvements involontaires n'est trouvée chez les Égyptiens ou chez les Grecs. Il faut attendre
				le XVe siècle, en Europe, pour voir apparaître le terme de « chorée de saint Guy » (image), avec un sens médical,
				dans une ordonnance de la cité de Rottweil, en Allemagne : « quiconque appelle sur un autre la malédiction de la chorée 
				de saint Guy devra payer une amende de 6 shillings »<sup><a href="references.php">[13]</a></sup>. Le terme provient du grec <i>choros</i>,
				désignant une danse en cercle. Le terme est alors utilisé par analogie avec les mouvements involontaires de la pathologie.</p>
			</li>
			<li id="1860" class="selected">
				<center><img src="images/Setesdal.jpg" width="256" height="256" /></center>
				<h1>1860</h1>
				<p class="alinea">Johan Christian Lund, médecin norvégien, publie un article dans lequel il réalise une description
				des symptomes la maladie de Huntington, qu'il nomme <i>Setesdalsrykkja</i>, ayant étudié des cas dans la vallée
				de Setesdal (photo). Dans son article, il parle de son caractère héréditaire. L'article ne sera traduit en anglais
				qu'en 1959, permettant à l'article d'Huntington d'avoir une portée plus importante, 12 ans plus tard.<sup><a href="references.php">[11][12]</a></sup></p>
			</li>
			<li id="1872" class="selected">
				<center><img src="images/GeorgeHuntington.jpg" width="256" height="256" /></center>
				<h1>1872</h1>
				<p class="alinea">George Huntington (photo), à l'âge de 22 ans, réalise la première description de la maladie dans un journal officiel<sup><a href="references.php">[4][6]</a></sup>.
				Il commence par une description de la Chorée de Sydenham, plutôt bénigne, avant d'aborder, en fin d'article, une « chorée héréditaire », caractérisée par
				une tendance à la folie et au suicide, et une atteinte tardive, à l'âge adulte.</p>
			</li>
			<li id="1952">
				<img src="images/AmericoNegrette.jpg" width="256" height="256" />
				<h1>1952</h1>
				<p class="alinea">Alors qu'il travaille en tant que médecin rural à Maracaibo, au Venezuela, Américo Negrette (photo) remarque
				une concentration anormale de gens ayant une démarche et des mouvements particuliers, appelés par les habitants les <i>Sanviteros</i>,
				atteints d'<i>el mal de San Vito</i>, ou en français de la « danse de Saint-Guy ». En 1963, il publie un livre contenant les
				descriptions cliniques de plusieurs patients qu'il a pu ausculter sur place<sup><a href="references.php">[8]</a></sup>.</p>
			</li>
			<li id="1979">
				<img src="images/NancyWexler.jpg" width="256" height="256" />
				<h1>1979</h1>
				<p class="alinea">Nancy Wexler (photo) et son équipe débutent une étude à Barranquitas et à Lagunetas,
				deux villages près du Lac Maracaibo, au Venezuela. Durant cette étude longue de 20 ans, il recueilleront plus de 4 000
				prélèvements sanguins et ausculteront plus de 18 000 personnes<sup><a href="references.php">[10]</a></sup>. Ces données participeront, en 1993, à la découverte
				du gène responsable de la maladie de Huntington.</p>
			</li>
			<li id="1983">
				<img src="images/JamesGusella.jpg" width="256" height="256" />
				<h1>1983</h1>
				<p class="alinea">Le défaut génétique provoquant à la maladie de Huntington est localisé sur le chromosome 4,
				grâce à des techniques de marquage ADN, par James Gusella (photo)
				et ses collaborateurs (parmi lesquels Nancy Wexler)<sup><a href="references.php">[14]</a></sup>.
				Il faudra attendre 10 ans de plus pour identifier le gène exact.</p>
			</li>
			<li id="1993">
				<img src="images/CAG.png" width="256" height="256" />
				<h1>1993</h1>
				<p class="alinea">Le gène responsable de la maladie de Huntington est formellement identifié par un groupe d'étude constitué
				d'équipes américaines et britanniques. Il s'agit du gène IT15, sur lequel le nombre de répétitions d'un triplet de nucléotides 
				est plus élevé dans le cas pathologique que dans le cas sain<sup><a href="references.php">[9]</a></sup>. Sur l'image ci-dessus,
				on distingue à gauche le séquençage ADN d'individus sains, et un plus grand nombre de répétitions à droite pour un individu
				atteint de la maladie.</p>
			</li>
		</ul>
		<div id="grad_top"></div>
		<div id="grad_bottom"></div>
		<a href="#" id="next">+</a>
		<a href="#" id="prev">-</a>
	</div>
	</td></tr></table>
	

</head>

<body>
	


	</body>
	
	<?php include "pied.php";?> 
