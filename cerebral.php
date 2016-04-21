 <?php $titrepage="Description des pathologies";
 $titresouspage="Niveau cérébral";
 include "entete.php"; 
 ?>
		
	<body>	
	
	<!--<div class="starter-template">
		<h1><?php echo ($titrepage)?></h1></br>
    </div>-->
	
	<header>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
          ['Région cérébrale', 'Pourcentage de la population neuronale en fin de vie ', {role:'style'}],
		  ['Cerveau global', 75, '6f9300'],
		  ['Cortex cérébral', 70, '99cc00'],
		  ['Striatum', 40, '99cc00'],
		  ['Globus Pallidus', 50, '99cc00'],
		  ['Noyaux subthalamiques', 75, '99cc00'],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Pertes neuronales dans la maladie de Huntington",
		annotations:{textStyle: {fontName:'Montserrat', fontSize:15},},
		titleTextStyle:{fontName:'Montserrat', fontSize:15},
		tooltip:{textStyle: {fontName:'Montserrat', fontSize:15},},
		hAxis:{textStyle: {fontName:'Montserrat', fontSize:15},},
        width: 700,
        height: 400,
        bar: {groupWidth: "50%"},
        legend: { position: "none" },
		vAxis: {textStyle: {fontName:'Montserrat', fontSize:15},maxValue : 100, minValue: 0},
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

	</header>
	
	<body>
	<table align="center">
	<tr><th bgcolor=#dbff6d><titlep>Parkinson</titlep></th><th bgcolor=#6f9300><titleh>Huntington</titleh></th></tr>
	<tr><td valign="top"></td>
	<td valign="top">
	<table class=in><tr><td><img src="images/striatum2.png" width=350 height=341></img><p class=legend>Figure 1 - Coupe coronale de l'hémisphère gauche
	d'un individu sain (35 ans) et d'un individu atteint de la maladie de Huntington (fin de maladie)<sup><a href="references.php">[1]</a></sup></p></td><td>
	<p class=alinea>Comme dans la maladie de Parkinson, les ganglions de la base forment les
	régions cérébrales les plus touchées par la pathologie. En moyenne, à la fin de la maladie,
	le cerveau perd 25% de son volume, soit environ 300 grammes<sup><a href="references.php">[27]</a></sup>.</p>
	<h2>Striatum</h2><p class=alinea>La région cérébrale la plus précocément touchée par la maladie de Huntington est le néostriatum,
	qui subit une atrophie bilatérale. Au début de la pathologie, c'est le corps et la queue du noyau caudé
	qui sont les plus touchées par la neurodégénération, pour progresser plus tardivement
	vers la tête. Le noyau caudé et le putamen peuvent ainsi perdre 60% de leur volume
	au cours de la progression de la maladie<sup><a href="references.php">[1]</a></sup>.</p></td></tr></table>
	<h2>Autre noyaux gris centraux</h2>
	<p class=alinea>Le striatum n'est pas la seule structure des ganglions de la base diminuant en volume :
	<ul class=normal><li class=normal>Les globi pallidi subissent une atrophie, son volume diminuant de moitié en fin de vie ;</li>
	<li class=normal>La substance noire réticulée perd également en volume, tandis que la substance noire
	compacte semble perdre moins de neurones ;</li>
	<li class=normal>Les noyaux subthalamiques perdent jusqu'à 25% de leur volume.</li></ul></p>
	<div id="columnchart_values" style="width: 700px; height: 400px;"></div>	
	<h2>Cortex cérébral</h2>
	<p class=alinea>Le cortex cérébral subit également une perte neuronale, les lobes frontaux, temporaux, pariétaux et occipitaux
	étant touchés de façon similaire. Certaines études montrent également qu'il existe une corrélation entre
	nombre de répétitions du triplet CAG, degré d'atrophie du striatum et perte neuronale du cortex. Les couches III, V et VI
	du cortex sont les plus enclines à perdre de la masse neuronale, en particulier les neurones pyramidaux, responsables du mouvement
	volontaire. La perte neuronale semble débuter au niveau de l'aire visuelle primaire (lobe occipital) et des aires sensorielles et motrices
	primaires (lobe pariétal), pour ensuite se prolonger et s'étendre à toute la surface du cortex.<sup><a href="references.php">[1]</a></sup>.</p>
	<h2>Autres structures cérébrales</h2>
	<p class=alinea>La littérature fait également mention de pertes neuronales dans le thalamus,
	l'hypothalamus (son noyau tubéral latéral, régissant l'appétit et le métabolisme, pouvant
	perdre jusqu'à 90% de neurones<sup><a href="references.php">[28]</a></sup>), l'hippocampe (perdant jusqu'à
	20% de neurones), ou encore le cervelet<sup><a href="references.php">[1]</a></sup>.</p></td></tr></table>
	
	
	<!--<p>Voici une phrase avec un <a href="#">MOT<span><text align="center">Définition</text></br>La définition de mon mot est placée ici</span></a> pour lequel on affichera la défintion au survol de la souris.
	<br />
	<br />
	Une autre phrase en dessous, juste pour montrer le passage au-dessus du texte de la boite d'info et blabla et reblabla...
	<br /></p>-->
	</body>
	<?php include "pied.php";?> 
