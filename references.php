<?php $titrepage="Références";
 $titresouspage="";
 include "entete.php"; 
 ?>
		
	<body>	
	
	<!--<div class="starter-template">
		<h1><?php echo ($titrepage)?></h1></br>
    </div>-->
	
	<header>
		
	</header>
	
	<?php
	$ref=0; //valeur pour n par défaut
		if (isset($_GET['ref']))
		{
			$ref = $_GET['ref'];
		}
		?>

	<body>
	<p class="ref" id=1>[1]</p> <p <?php if ($ref==1) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Behavioral Neurobiology of Huntington's Disease and Parkinson's Disease</i>, Hoa Huu Phuc Nguyen, 
	M. Angela Cenci, Springer Berlin Heidelberg, 2015 - ISBN 978-3-662-46343-7</p></br>
	<p class="ref" id=2>[2]</p> <p <?php if ($ref==2) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>The genetic "grey area" of Huntington's disease : what does it all mean ?</i>, Dr. Nayana Lahiri, Dr. Jeff Carroll, 22 avril 2011 - HD Buzz</p></br>
	<p class="ref" id=3>[3]</p> <p <?php if ($ref==3) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Huntington's Disease Genetics</i>, Richard H. Myers - NeuroRx. 2004 Apr; 1(2): 255-262.</p></br>
	<p class="ref" id=4>[4]</p> <p <?php if ($ref==4) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>On Chorea</i>, George Huntington, M.D., The Medical and Surgical Reporter: A Weekly Journal, (Philadelphia: S.W. Butler), 
	vol. 26, no. 15 (April 13, 1872), pp. 317-321</p></br>
	<p class="ref" id=5>[5]</p> <p <?php if ($ref==5) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Huntigton's Disease</i>, Francis O. Walker, Lancet 2007; 369: 218–28</p></br>
	<p class="ref" id=6>[6]</p> <p <?php if ($ref==6) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Chorea: A Journey through History</i>, Thiago Cardoso Vale & Francisco Cardoso, Tremor Other Hyperkinet Mov (N Y). 2015 May 28;5. 
	pii: tre-5-296. doi: 10.7916/D8WM1C98. eCollection 2015.</p></br>
	<p class="ref" id=7>[7]</p> <p <?php if ($ref==7) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>The Neuropathology of Huntington’s Disease: Classical Findings, Recent Developments and Correlation to Functional Neuroanatomy</i>, 
	Udo Rüb, Jean Paul G. Vonsattel, Helmut Heinsen, Horst-Werner Korf, 2015 - ISBN 978-3-319-19284-0</p></br>
	<p class="ref" id=8>[8]</p> <p <?php if ($ref==8) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Américo Negrette and Huntington’s disease</i>, Mariana Moscovich, Renato P. Munhoz, Nilson Becker, 
	Egberto Reis Barbosa, Alberto J. Espay, Roberto Weiser, Hélio A.G. Teive - Arq Neuropsiquiatr 2011;69(4):711-713</p></br>
	<p class="ref" id=9>[9]</p> <p <?php if ($ref==9) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>A novel gene containing a trinucleotide repeat that is expanded and unstable on Huntington’s disease chromosomes</i>, 
	The Huntington's Disease Collaborative Research Group - Cell, Vol. 72, 971-983, March 26, 1993</p></br>
	<p class="ref" id=10>[10]</p> <p <?php if ($ref==10) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Nancy Wexler, PhD Profile</i>, ColumbiaPsychiatry.org</p></br>
	<p class="ref" id=11>[11]</p> <p <?php if ($ref==11) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Huntington's chorea</i>, Whonamedit.com</p></br>
	<p class="ref" id=12>[12]</p> <p <?php if ($ref==12) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Huntington disease</i>, Ben Harper, J R Soc Med 2005;98:550</p></br>
	<p class="ref" id=13>[13]</p> <p <?php if ($ref==13) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>De la danse de Saint Guy à la chorée de Huntington : rappels sur l'émergence d'un concept médical</i>,
	Thierry Grandmougin, Catherine Bourdet, Jean-Marc Gurruchaga, médecine/sciences 1997; 13 : 850-4</p></br>
	<p class="ref" id=14>[14]</p> <p <?php if ($ref==14) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>A polymorphic DNA marker genetically linked to Huntington's disease</i>,
	G.F. Gusella et al., Nature. 1983 Nov 17-23;306(5940):234-8.</p></br>
	<p class="ref" id=15>[15]</p> <p <?php if ($ref==15) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>The epidemiology of Huntington disease</i>, Peter S. Harper, Hum Genet (1992) 89: 365-376</p></br>
	<p class="ref" id=16>[16]</p> <p <?php if ($ref==16) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Published reports on worldwide prevalence of Huntington disease</i>,
	Centre for Molecular Medicine and Therapeutics, www.cmmt.ubc.ca</p></br>
	<p class="ref" id=17>[17]</p> <p <?php if ($ref==17) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>The prevalence of Huntington's chorea in South Africa</i>,
	Hayden MR, MacGregor JM, Beighton PH, 1980, 58(5):193-196</p></br>
	<p class="ref" id=18>[18]</p> <p <?php if ($ref==18) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>A Tale of Pain and Hope on Lake Maracaibo (int'l edition)</i>,
	Christina Hoag, BusinessWeek.com, 29 mai 2000</p></br>
	<p class="ref" id=19>[19]</p> <p <?php if ($ref==19) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>CAG-repeat length and the age of onset in Huntington disease (HD): a review and validation study of statistical approaches</i>,
	Langbehn DR, Hayden MR, Paulsen JS; PREDICT-HD Investigators of the Huntington Study Group, Am J Med Genet B Neuropsychiatr Genet. 2010 Mar 5;153B(2):397-408. doi: 10.1002/ajmg.b.30992</p></br>
	<p class="ref" id=20>[20]</p> <p <?php if ($ref==20) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Elucidating a normal function of huntingtin by functional and microarray analysis of huntingtin-null mouse embryonic fibroblasts</i>,
	Hua Zhang, Sudipto Das, Quan-Zhen Li, Ioannis Dragatsis, Joyce Repa, Scott Zeitlin, György Hajnóczky and Ilya Bezprozvanny, BMC Neuroscience 2008 9:38 DOI: 10.1186/1471-2202-9-38</p></br>
	<p class="ref" id=21>[21]</p> <p <?php if ($ref==21) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>"Normal" huntingtin and Huntington Disease</i>,
	Margot Hedlin, Huntington's Outreach Project for Education, at Stanford (HOPES), web.stanford.edu, 30 juillet 2011</p></br>
	<p class="ref" id=22>[22]</p> <p <?php if ($ref==22) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Homozygosity for CAG mutation in Huntington disease is associated with a more severe clinical course</i>,
	 Ferdinando Squitieri, Cinzia Gellera, Milena Cannella, Caterina Mariotti, Giuliana Cislaghi, David C. Rubinsztein, Elisabeth W. Almqvist, David Turner, Anne-Catherine Bachoud-Lévi, 
	 Sheila A. Simpson, Martin Delatycki, Vittorio Maglione, Michael R. Hayden, Stefano Di Donato, DOI: 946-955, 1er avril 2003</p></br>
	<p class="ref" id=23>[23]</p> <p <?php if ($ref==23) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Mitochondria in Huntington's disease</i>,
	Maria Damiano, Laurie Galvan, Nicole Déglon, Emmanuel Brouillet, doi:10.1016/j.bbadis.2009.07.012</p></br>
	<p class="ref" id=24>[24]</p> <p <?php if ($ref==24) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Rôle de la dysfonction mitochondriale dans deux maladies neurodégénératives, la Maladie de Huntington 
	et la Maladie de Parkinson</i>, Maria Damiano, Neurosciences [q-bio.NC]. Université Pierre et Marie Curie - Paris VI, 2014. Français. <NNT : 2014PA066584>
	.<tel-01140700></p></br>
	<p class="ref" id=25>[25]</p> <p <?php if ($ref==25) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Huntingtin protein is essential for mitochondrial metabolism, bioenergetics and structure 
	in murine embryonic stem cells</i>, Ismail Ismailoglu, Qiuying Chen, Melissa Popowski, Lili Yang, Steven S. Gross, Ali H. Brivanlou,
	doi:10.1016/j.ydbio.2014.04.005</p></br>
	<p class="ref" id=26>[26]</p> <p <?php if ($ref==26) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Cell loss in the motor and cingulate cortex correlates with symptomatology in Huntington’s disease</i>, 
	Doris C. V. Thu, Dorothy E. Oorschot, Lynette J. Tippett, Alissa L. Nana, Virginia M. Hogg, Beth J. Synek, Ruth Luthi-Carter, Henry J. Waldvogel, Richard L. M. Faull,
	Brain 2010: 133; 1094–1110</p></br>
	<p class="ref" id=27>[27]</p> <p <?php if ($ref==27) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Huntington disease</i>, 
	Gale Encyclopedia of Neurological Disorders, 2005</p></br>
	<p class="ref" id=28>[28]</p> <p <?php if ($ref==28) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Atrophy of the Hypothalamic Lateral Tuberal Nucleus in Huntington's Disease</i>, 
	H. P. H. Kremer M.D., R. A. C. Roos M.D., G. Dingjan, E. Marani Ph.D., G. Th. A. M. Bots M.D., 
	Journal of Neuropathology and Experimental Neurology, July 1990</p></br>
	<p class="ref" id=29>[29]</p> <p <?php if ($ref==29) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>The Basal Ganglia and Motor Control</i>, 
	Henk J. Groenewegen, Neural Plast. 2003; 10(1-2): 107–120</p></br>
	<p class="ref" id=30>[30]</p> <p <?php if ($ref==30) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Neuroscience, Third Edition</i>, 
	Dale Purves, George J. Augustine, David Fitzpatrick, William C. Hall, Anthony-Samuel LaMantia,
	James O. McNamara, S. Mark Williams, Sinauer Associates, Inc., Publishers Sunderland, 
	Massachusetts U.S.A., 2004</p></br>
	<p class="ref" id=31>[31]</p> <p <?php if ($ref==31) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>The History of The Basal Ganglia: The Contribution of Karl Friedrich Burdach</i>, 
	André Parent, Neuroscience & Medicine, 2012, 3, 374-379</p></br>
	<p class="ref" id=32>[32]</p> <p <?php if ($ref==32) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Historical review of research on functions of basal ganglia</i>, 
	Yanagisawa, N., European Neurology, Volume 36, Issue SUPPL. 1, May 1996, Pages 2-8</p></br>
	<p class="ref" id=33>[33]</p> <p <?php if ($ref==33) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Progressive atrophy of the globus pallidus (primary atrophy of the pallidal system). 
	A system disease of the paralysis agitans type, characterized by atrophy of the motor cells of the corpus striatum. 
	A contribution to the functions of the corpus striatum</i>, 
	Ramsey Hunt, 1917.</p></br>
	<p class="ref" id=34>[34]</p> <p <?php if ($ref==34) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Encyclopédie historique des neurosciences</i>, 
	François Clarac et Jean-Pierre Ternaux, 2008, ISBN 9782804158989.</p></br>
	<p class="ref" id=35>[35]</p> <p <?php if ($ref==35) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Handbook of Basal Ganglia Structure and Function</i>, 
	Heinz Steiner, Kuei Y. Tseng, 2010, ISBN 9780080912158.</p></br>
	<p class="ref" id=36>[36]</p> <p <?php if ($ref==36) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Atlas of Brain Injury & Anatomy</i>, 
	FINR.net</p></br>
	<p class="ref" id=37>[37]</p> <p <?php if ($ref==37) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Basal Ganglia</i>, 
	Scholarpedia.org</p></br>
	<p class="ref" id=38>[38]</p> <p <?php if ($ref==38) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Cerveau Humain</i>, 
	Universalis-Edu.com</p></br>
	<p class="ref" id=39>[39]</p> <p <?php if ($ref==39) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>The Basal Ganglia</i>, 
	Ann M. Graybiel, Current Biology, Volume 10, Issue 14, pR509–R511, 15 July 2000</p></br>
	<p class="ref" id=40>[40]</p> <p <?php if ($ref==40) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Le cerveau à tous les niveaux - Produire un mouvement volontaire</i>, 
	Bruno Dubuc, http://lecerveau.mcgill.ca</p></br>
	<p class="ref" id=41>[41]</p> <p <?php if ($ref==41) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>2-Minute Neuroscience: Basal Ganglia</i>, 
	Neuroscientifically Challenged, https://www.youtube.com/watch?v=OD2KPSGZ1No</p></br>
	<p class="ref" id=42>[42]</p> <p <?php if ($ref==42) { ?> class="refc" <?php } else { ?> class="refb" <?php } ?> ><i>Non-motor basal ganglia functions: A review and proposal 
	for a model of sensory predictability in auditory language perception</i>, 
	Sonja A. Kotz, Michael Schwartze and Maren Schmidt-Kassow, 9 mars 2009, Cortex 45 (2009) 982-990</p></br>
	</body>
	
	<?php include "pied.php";?> 
