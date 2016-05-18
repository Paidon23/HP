 <?php $titrepage="Description des pathologies";
 $titresouspage="Niveau génétique";
 include "entete.php"; 
 ?>
		
	<body>	
	
	<!--<div class="starter-template">
		<h1><?php echo ($titrepage)?></h1></br>
    </div>-->
	
	<header>
		
	</header>
	
	<body>
	<table align="center">
	<tr><th bgcolor=#dbff6d><titlep>Parkinson</titlep></th><th bgcolor=#6f9300><titleh>Huntington</titleh></th></tr>
	<tr><td valign="top"><p class="alinea">Gowers a émis les premières hypothèses comme quoi la maladie de Parkinson serait une maladie génétique. 
	Selon lui, 15% des patients atteints avaient des antécédents familiaux. On peut distinguer une première opposition entre la maladie de Parkinson 
	idiopathique (dont on ne connaît pas vraiment la cause) et l'accumulation des connaissances au niveau génétique et moléculaire qui pourrait laisser 
	penser qu'il n'existe pas une mais plusieurs maladies de Parkinson. </p><p class="alinea">Des études ont été réalisées sur la fréquence de la maladie de Parkinson 
	au sein d'une même famille. Elles ont montré que pour 6 à 21% des sujets atteints, au moins un autre membre de leur famille est atteint. 
	Quant au cas clinique, c'est environ 33% des patients qui ont un parent atteint. Il ne faut cependant pas omettre les risques liés à l'environnement 
	(la pollution, les pesticides). D'autres études ont été menées dans des familles et ont pu mettre en évidence la mutation du gène codant l’alphasynucléine 
	(régule la libération de dopamine) sur le chomosome 4 (cf. figure 1). Également, on a pu observer que dans 10% des formes familiales,
	il y avait une mutation de gène codant pour la proteine nommée « parkine ». Elle constitue actuellement une piste de recherche pour la maladie de Parkinson.
	De nombreux gènes seraient impliqués dans la maladie de Parkinson (cf. figure 1) mais elle n'est pas considérée comme étant une maladie génétique. 
	Depuis 2012, elle est considérée comme étant une maladie professionnelle.</p>
	<table class="in" bgcolor=#dbff6d><tr><td width="50%" height="15">Locus</td><td width="16%">Gène</td>
	<td width="16%">Transmission</td><td width="16%">Âge moyen de début</td><td>Phénotype</td></tr>
	<tr><td colspan=5>Formes autosomiques dominantes</td></tr><tr><td height="15">Pénétrance</td><td>Nulle</td><td>Interm.</td><td>Complète</td><td>Caca</td></tr></table>
</td>
	<td valign="top"><table class="in"><tr><td><p class="alinea">Contrairement à la maladie de Parkinson, la source de la maladie de Huntington est parfaitement connue, 
	et se trouve dans l'<span class="hover" title="Chacune des cellules somatiques de notre corps contient un noyau, contenant 23 paires de chromosomes. Le chromosome est constitué de l'ADN, qui contient toute l'information génétique qui va régir la « machinerie » de notre corps.">ADN</span>.
	Sur le bras court du chromosome 4 (représenté figure 1), est localisé le gène encodant une protéine appelée huntingtine (ou HTT), 
	essentielle au fonctionnement du corps humain. L’exon 1 de ce gène est formé d’une 
	répétition (normalement entre 6 et 36 répétitions) du triplet de nucléotides CAG (cytosine, adénine, guanine). L'ADN est transcrit en ARN messager, lui-même traduit
	en protéines. Le codon CAG permet ainsi la <a href="cellulaire.php">formation de glutamine sur la huntingtine</a>.</p>
	<p class="alinea">Si le nombre de répétitions du triplet CAG dépasse 36, le nombre de molécules de glutamine sur la huntingtine
	modifie le fonctionnement normal de la protéine, ce qui est la cause de la maladie de Huntington<sup><a href="references.php">[1]</a></sup>.</p>
	<table class="in" bgcolor=#dbff6d><tr><td width="50%" height="15">Nombre de répétitions du triplet CAG</td><td width="16%">< 36</td>
	<td width="16%">36 à 39</td><td width="16%">> 40</td></tr>
	<tr><td height="15">Pénétrance</td><td>Nulle</td><td>Interm.</td><td>Complète</td></tr></table>
	<p class="alinea">Les patients dont le nombre de répétitions se situe entre 36 et 39 peuvent développer la maladie à un âge plus avancé que
	les autres, voire ne jamais montrer de symptôme de la maladie. En revanche, lorsque le nombre de répétitions dépasse 40, l'expression
	de la maladie est assurée. De nombreuses études expriment également une corrélation (figure 2), à hauteur de 60%, entre le nombre de répétitions du triplet CAG et 
	l'âge de survenue de la maladie (généralement, l'âge de survenue des premiers symptômes moteurs)<sup><a href="references.php">[1][5]</a></sup>.</p>
	</td><td>
	<img src="images/chromosome_4.png" alt="Chromosome 4"><p class="legend"><b>Figure 1.</b> Chromosome 4 humain. Le gène codant pour la huntingtine se trouve sur le site 4p16.</p></td></tr></table></p>
	<table class="in"><tr><td width="400px"><img src="images/age_survenue.png" alt="Age de survenue" width="400px">
	<p class="legend"><b>Figure 2.</b> Age de survenue de la maladie de Huntington en fonction du nombre de répétitions du triplet CAG. D'après D.R. Langbehn, M. Hayden et J.S. Paulsen.<sup><a href="references.php">[19]</a></sup>
	</p></td><td><p class="alinea">Des études récentes laissent toutefois supposer l'apparition de symptômes comportementaux
	dès 27 à 35 répétitions du codon CAG<sup><a href="references.php">[1]</a></sup>.</p>
	<p class="alinea">La maladie de Huntington étant une maladie génétique, elle se transmet entre les générations d'individus.
	Il s'agit d'une maladie autosomale dominante : ainsi, chaque enfant d'un patient atteint a 50% de chances de développer
	à son tour la maladie.</p></td></tr></table>
	<p class="alinea">La chaîne de CAG étant particulièrement instable durant la méiose, elle peut se rallonger. 
	Ainsi, la maladie est sujette au phénomène d'anticipation<a href="references.php"><sup>[1]</sup></a> : 
	un parent dont le gène contient entre 27 et 35 répétitions (et donc n'exprimant pas la pathologie) peut engendrer
	une descendance atteinte d'Huntington. Ce phénomène est particulièrement marqué lorsque le gène vient du père.
	6 à 8% des cas sont ainsi sporadiques, apparaissant chez l'enfant lorsqu'aucun des parents n'a exprimé la maladie.</p>
	<table class="in" bgcolor=#dbff6d width="80%"><tr><td width="40%" height="15">Nombre de répétitions du triplet CAG</td><td width="10%">< 27</td>
	<td width="10%">27 à 36</td><td width="10%">> 36</td></tr>
	<tr><td height="15">Risque pour la descendance</td><td>0%</td><td>0 à 50%</td><td>50%</td></tr></table>
	<p class="alinea">Certaines études laissent supposer que la progression de la maladie est plus rapide chez les individus homozygotes que chez les individus
	hétérozygotes, ce qui serait dû à une expression bénéfique du gène sain, contrebalançant certains effets néfastes de la pathologie<sup><a href="references.php">[21][22]</a></sup>.</p></td></tr></table>
	
	<!--<p>Voici une phrase avec un <a href="#">MOT<span><text align="center">Définition</text></br>La définition de mon mot est placée ici</span></a> pour lequel on affichera la défintion au survol de la souris.
	<br />
	<br />
	Une autre phrase en dessous, juste pour montrer le passage au-dessus du texte de la boite d'info et blabla et reblabla...
	<br /></p>-->
	</body>
	
	</body>
	
	<?php include "pied.php";?> 
