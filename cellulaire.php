 <?php $titrepage="Description des pathologies";
 $titresouspage="Niveau cellulaire";
 include "entete.php"; 
 ?>
		
	<body>	
	
	<!--<div class="starter-template">
		<h1><?php echo ($titrepage)?></h1></br>
    </div>-->
	
	<header>
		
	</header>
	
	<body>
	<p class=intro>Au niveau cellulaire, les maladies de Parkinson et de Huntington sont caractérisées par l'apparition d'agrégats de protéines, ce
	qui en font des protéinopathies.</p>
	<table align="center">
	<tr><th bgcolor=#dbff6d><titlep>Parkinson</titlep></th><th bgcolor=#6f9300><titleh>Huntington</titleh></th></tr>
	<tr><td valign="top"></td><td valign="top">
	<p class=alinea>
	Malgré la découverte de la protéine HTT (ou huntingtine) il y a plus de vingt ans, son rôle dans l'organisme
	reste méconnu, notamment car sa structure ne ressemble à celle d'aucune autre protéine connue<sup><a href="references.php">[1]</a></sup>.</p>
	<h2>Développement embryonnaire</h2>
	<p class=alinea>On sait que la protéine est essentielle : l'invalidation du gène HTT chez la souris provoque la mort de l'embryon avant
	la formation du système nerveux. Dans le même sens, la diminution de 50% de la huntingtine embryonnaire provoque de graves malformations,
	persistantes jusqu'à l'âge adulte : déficits cognitifs, neurodégénérescence... 
	Toutes ces études supportent la thèse d'un rôle central de la huntingtine dans la formation du SNC et de l'embryon<sup><a href="references.php">[20][21]</a></sup>.</p>
	<h2>Fonction de transport intracellulaire</h2>
	<p class=alinea>Chez l'adulte, la huntingtine est ubiquitaire dans l'organisme, avec des concentrations 5 fois plus importantes dans les neurones
	et les testicules. L'étude des fonctions de la protéine a mis en évidence son rôle important dans le transport de molécules au sein de la cellule,
	notamment du BDNF, ou facteur neurotrophique dérivé du cerveau, depuis son site de synthèse jusqu'à la membrane de la cellule. Le BDNF est une protéine importante, 
	qui permet à certains neurones de se développer et de survivre. Elle est sécrétée par des neurones du cortex et de la substance noire, 
	et a pour cible les neurones du striatum. Dans le cas pathologique, le transport de BDNF par la huntingtine est réduit, ce qui réduit également
	la quantité de BDNF reçue par les neurones du striatum<sup><a href="references.php">[21]</a></sup>.</p>
	<h2>Régulation de la transcription</h2>
	<p class=alinea>Le transport cellulaire ne semble pas être le seul rôle de la huntingtine. Il existe des régions de l'ADN sur lesquelles
	des protéines peuvent se fixer, diminuant l'expression d'un gêne. Ces zones sont appelées inactivateurs. Le REST/NSRF fait partie des protéines
	pouvant s'y fixer, notamment sur le gène codant pour le BDNF. La huntingtine peur se lier avec le REST/NSRF et ainsi l'empêcher d'entrer dans
	le noyau. Dans la maladie de Huntington, elle n'arrive plus à se lier avec la protéine inactivatrice, qui va ainsi pouvoir réduire l'expression
	du gène, provoquant ainsi la diminution de la production de BDNF<sup><a href="references.php">[21]</a></sup>.</p>
	<h2>Inhibition de l'apoptose</h2>
	<p class=alinea>Il arrive, dans certains cas, qu'une cellule réalise une apoptose, résultat d'une série de conséquences initiées par
	l'activation d'enzymes appelées capsases. Des recherches montrent que la huntingtine parvient à bloquer indirectement l'action
	des capsases, et donc la mort de la cellule : chez la souris adulte, la suppression de la huntingtine entraine une grave neurodégération.
	A l'inverse, un taux plus élevé de huntingtine a montré des vertus de neuroprotection<sup><a href="references.php">[21]</a></sup>.
	<h2>Dérèglement mitochondrial</h2>
	<p class=alinea>La mitochondrie est un organite présent dans la plupart de nos cellules, notamment responsable de la transformation 
	des nutriments en énergie. La huntingtine est naturellement présente dans les cellules somatiques humaines. Son rôle reste toutefois
	méconnu<sup><a href="references.php">[25]</a></sup>. La huningtine mutée semble pouvoir interagir avec la membrane des mitochondries, conduisant
	à des modifications de ces organites : réduction de la mobilité, changements dans la perméabilité, etc. Ces dérèglements
	de l'activité des mitochondries impliqueraient alors la diminution de l'énergie dont la cellule à besoin, 
	et donc, indirectement, sa mort<sup><a href="references.php">[23]</a></sup>.</p></td></tr></table>	
	
	<!--<p>Voici une phrase avec un <a href="#">MOT<span><text align="center">Définition</text></br>La définition de mon mot est placée ici</span></a> pour lequel on affichera la défintion au survol de la souris.
	<br />
	<br />
	Une autre phrase en dessous, juste pour montrer le passage au-dessus du texte de la boite d'info et blabla et reblabla...
	<br /></p>-->
	
	</body>
	
	<?php include "pied.php";?> 
