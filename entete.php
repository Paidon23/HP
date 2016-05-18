<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<html lang="fr">

	<head>
	
		<title><?php echo($titrepage)?></title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<div id="outer" height="200"> 
		<img class=top src='title.png' alt="<?php echo($titrepage)?>" height="200"/>		
		<hx>Parkinson et Huntington</hx>
		<hy>Comparaison de deux pathologies</hy>

		<ul class="nav">
			<li <?php if ($titrepage=="Accueil") { ?> class="active" <?php } ?> ><a class="nav" href="index.php">Accueil</a></li>
			<li <?php if ($titrepage=="Les ganglions de la base") { ?> class="active" <?php } ?> ><a class="nav" href="ganglions-de-la-base.php">Les ganglions de la base</a></li>
			<li <?php if ($titrepage=="Description des pathologies") { ?> class="active" <?php } ?> ><a class="nav" href="genetique.php">Description des pathologies</a></li>
			<li <?php if ($titrepage=="Pistes de recherche") { ?> class="active" <?php } ?> ><a class="nav" href="recherche.php">Pistes de recherche</a></li>
			<li <?php if ($titrepage=="Références") { ?> class="active" <?php } ?> ><a class="nav" href="references.php">Références</a></li>
		</ul>
		<ul class="undernav">
		<?php if ($titresouspage != "") { ?>
			<li><a <?php if ($titresouspage=="Historique") { ?> class="underactive" <?php } else { ?> class="undernav" <?php } ?> href="historique.php">> Historique</a></li>
			<li><a <?php if ($titresouspage=="Épidémiologie") { ?> class="underactive" <?php } else { ?> class="undernav" <?php } ?> href="epidemiologie.php">> Épidémiologie</a></li>
			<li><a <?php if ($titresouspage=="Niveau génétique") { ?> class="underactive" <?php } else { ?> class="undernav" <?php } ?> href="genetique.php">> Niveau génétique</a></li>
			<li><a <?php if ($titresouspage=="Niveau cellulaire") { ?> class="underactive" <?php } else { ?> class="undernav" <?php } ?> href="cellulaire.php">> Niveau cellulaire</a></li>
			<li><a <?php if ($titresouspage=="Niveau cérébral") { ?> class="underactive" <?php } else { ?> class="undernav" <?php } ?> href="cerebral.php">> Niveau cérébral</a></li>
			<li><a <?php if ($titresouspage=="Tableau clinique") { ?> class="underactive" <?php } else { ?> class="undernav" <?php } ?> href="clinique.php">> Tableau clinique</a></li>
			<li><a <?php if ($titresouspage=="Traitements") { ?> class="underactive" <?php } else { ?> class="undernav" <?php } ?> href="traitements.php">> Traitements</a></li>
		<?php } ?>
		</ul>
	</head>