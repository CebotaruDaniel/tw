<?php
include './php/connect.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


for($i = 1; $i <= 20; $i++) {
    $personaje[$i] = mysqli_query($connection, "SELECT nume_personaje FROM personaje where id_personaje=$i");
    $resPersonaje[$i] = $personaje[$i]->fetch_assoc();
}
for($i = 1; $i <= 20; $i++) {
	$calitati[$i] = mysqli_query($connection, "SELECT nume_calitate FROM calitati where id_calitati=$i");
	$resCalitati[$i] = $calitati[$i]->fetch_assoc();
}
for($i = 1; $i <= 20; $i++) {
	$consecinta[$i] = mysqli_query($connection, "SELECT nume_consecinta FROM consecinte where id_consecinta=$i");
	$resConsecinta[$i] = $consecinta[$i]->fetch_assoc();
}
for($i = 1; $i <= 20; $i++) {
	$eveniment[$i] = mysqli_query($connection, "SELECT nume_eveniment FROM evenimente where id_eveniment=$i");
	$resEveniment[$i] = $eveniment[$i]->fetch_assoc();
}
for($i = 1; $i <= 20; $i++) {
	$locatia[$i] = mysqli_query($connection, "SELECT nume_locatie FROM locatia where id_locatie=$i");
	$resLocatia[$i] = $locatia[$i]->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="ro">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="poze/cinderella-shoe.png">
	<title>Povestea Cenusareasa</title>
	<link rel="stylesheet" href="animation.css">
	<link rel="stylesheet" href="general.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand logo" href="#">
				<img src="poze/loog.png" alt="Bootstrap" width="100rem" height="50rem">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link  " aria-current="page" href="#">Acasa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" target="_blank" href="https://ro.wikipedia.org/wiki/Fra%C8%9Bii_Grimm">Autor</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#desen">Priveste Desenul Animat</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Mai Multe
						</a>
						<ul class="dropdown-menu">
							<li><a class="drop" href="#carte">Zodiile</a></li>
							<li><a class="drop" href="#faq">F.A.Q</a></li>
							<li><a class="drop" href="/php/modify.php">Modifica</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<div class="video">
		<video muted="" playsinline="" class="mp4" loop="" autoplay>
			<source src="poze/video.mp4" type="video/mp4">
		</video>
	</div>
	<div class="container">
		<div class="intro">
			<h1 style="color: #f49e9e;">Prințesa Cenușăreasa</h1>
			<p>
				Cenușăreasa este o printesa care știe că bunătatea este o magie care poate transforma lumea spre bine, așa că ea
				este caldă și sinceră cu toți cei pe care îi întâlnește. Fie că este cel mai mic șoarece sau regele însuși,
				ea îi tratează pe toti cu egal respect. Ea este increzuta și este hotărâtă să depășească adversitatea cu care se
				confruntă.
			</p>
		</div>
		<hr>
		<div class="container-poveste">
			<div class="pantof">
				<div class="text">
					<p>Cine <br> si-a pierdut <br> acest pantof de cristal?</p>
				</div>
				<img class="pantofimg" src="poze/pantof.png" alt="pasare">
			</div>
			<hr>
			<h4 class="avertizare">Citeste povestirea de mai jos pentru a descoperi cine a pierdut pantoful de cristal !</h1>
				<h1 class="textrez neon">Rezumatul povestii Cenușăreasa de Frații Grimm</h1>
				<div class="imaginetext">
					<img src="poze/img.png" alt="imagine">
				</div>
				<hr>
				<p class="rezumat">
					A fost odată un om văduv <span><?php echo $resPersonaje[2]['nume_personaje'];?></span>, care s-a căsătorit pentru a doua oară cu o femeie <span><?php echo $resCalitati[3]['nume_calitate'];?></span> și <span><?php echo $resCalitati[4]['nume_calitate'];?></span>. Dupa ce <span><?php echo $resEveniment[6]['nume_eveniment'];?></span> ,sotia sa cu ficele controlau tot in casa.Ea
					avea două fiice, care la rândul lor erau <span><?php echo $resCalitati[6]['nume_calitate'];?></span>.Prima sa soţie a avut o fiică <span><?php echo $resCalitati[5]['nume_calitate'];?></span>, care era o fată 
					 cu o fire <span><?php echo $resCalitati[1]['nume_calitate'];?></span> pe nume <span><?php echo $resPersonaje[3]['nume_personaje'];?></span>. Împreună cu fiicele ei <span><?php echo $resPersonaje[4]['nume_personaje'];?></span> si <span><?php echo $resPersonaje[5]['nume_personaje'];?></span> , mama
					vitregă <span><?php echo $resPersonaje[6]['nume_personaje'];?></span> o punea <span><?php echo $resEveniment[2]['nume_eveniment'];?></span> , din aceasta cauza <span><?php echo $resConsecinta[1]['nume_consecinta'];?></span>. Seara,
					când fata îşi termina treburile,<span><?php echo $resEveniment[1]['nume_eveniment'];?></span> <span><?php echo $resLocatia[1]['nume_locatie'];?></span>. Din această cauză,<span><?php echo $resConsecinta[2]['nume_consecinta'];?></span> , de
					unde şi porecla de <span><?php echo $resPersonaje[1]['nume_personaje'];?></span>. <span><?php echo ucfirst($resCalitati[1]['nume_calitate']);?></span> fată nu îndrăznea să îi spună tatălui ei ceea ce îndura. Într-o zi,
					prințul <span><?php echo $resPersonaje[8]['nume_personaje'];?></span> a invitat toate domnișoarele din ținut la un bal <span><?php echo $resLocatia[2]['nume_locatie'];?></span> pentru a-şi putea alege o soție. Cele
					două surori vitrege au început vesele să îşi pregătească garderoba pentru ca <span><?php echo $resEveniment[5]['nume_eveniment'];?></span> ,în timp ce biata <span><?php echo $resPersonaje[1]['nume_personaje'];?></span> le privea cu
					drag. Însă ele o tachinau spunându-i că o servitoare nu ar putea participa niciodată la un bal. După ce
					surorile ei au plecat, ea a izbucnit în plâns <span><?php echo $resLocatia[3]['nume_locatie'];?></span> de la mormântul mamei sale. Atunci şi-a făcut
					apariția în alun o <span><?php echo $resPersonaje[7]['nume_personaje'];?></span>, care i-a promis că o va ajuta să participe la bal. Apoi i-a dat o rochie
					frumoasă și o delicată pereche de pantofi. Porumbița i-a spus să se întoarcă acasă înainte de miezul nopţii,
					deoarece după ora douăsprezece vraja se va rupe. La bal, cu toții au fost fascinați de această domnișoară, în
					special prințul <span><?php echo $resPersonaje[8]['nume_personaje'];?></span> care a dansat tot timpul cu ea. Nici surorile vitrege nu au recunoscut-o. Înainte de
					miezul nopţii şi-a adus aminte să plece. Întoarsă <span><?php echo $resLocatia[5]['nume_locatie'];?></span>, ea i-a mulţumit porumbiței, apoi şi-a salutat
					surorile care nu se opreau din a vorbi despre <span><?php echo $resCalitati[5]['nume_calitate'];?></span> fată de la bal pe care nu o cunoştea nimeni. Cu
					ajutorul <span><?php echo $resPersonaje[7]['nume_personaje'];?></span> ea a participat la bal şi în seara următoare, <span><?php echo $resEveniment[3]['nume_eveniment'];?></span> chiar mai mult. Și de
					această dată ea a plecat doar la ultima bătaie a ceasului care anunța miezul nopții. A treia noapte s-a
					petrecut la fel, dar <span><?php echo $resEveniment[4]['nume_eveniment'];?></span> <span><?php echo $resConsecinta[4]['nume_consecinta'];?></span> coborând pe treptele palatului. Prinţul a urmărit-o,
					dar nu a mai putut-o prinde, însă, în urma ei a găsit pantoful pierdut şi a promis că o va găsi pe fata căreia
					îi aparţine şi o va lua de soţie. Prinţul a încercat pantoful pe toate fetele din ţinut. Surorile vitrege au
					încercat în zadar și ele, dar în ciuda batjocoririlor pe care i le adresau, acesteia i s-a
					potrivit perfect pantoful. Apoi s-a încălţat şi cu celălalt pantof pentru a risipi orice urmă de îndoială că
					aceștia nu i-ar aparține. La vederea acestui lucru mama și surorile vitrege au încremenit de invidie. Prințul
					a luat-o pe <span><?php echo $resPersonaje[1]['nume_personaje'];?></span> pe cal și au pornit către <span><?php echo $resLocatia[4]['nume_locatie'];?></span>, unde <span><?php echo $resConsecinta[3]['nume_consecinta'];?></span>, petrecând trei zile și
					trei nopți.
				</p>
				<p class="final">Sfârșit</p>
		</div>
		<hr id="desen">
		<div class="desenanimat">
			<div class="imaginetext">
				<img class="img1" src="poze/langatext.png" alt="img">
			</div>
			<div class="textmijloc">
				<p>Desenul Animat ,,Cenusareasa'' de Fratii Grimm</p>
			</div>
			<div class="imaginetext">
				<img class="img2" src="poze/prince.png" alt="imagine">
			</div>
		</div>
		<hr>
		<div class="video2">
			<iframe width="100%" height="475" src="https://www.youtube.com/embed/KicgPfKMtYc" title="YouTube video player"
				frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
				allowfullscreen></iframe>
		</div>
		<hr id="faq">
		<div class="faq">
			<div class="img3">
				<img class="zana" src="poze/faq.png" alt="intrebari">
			</div>
			<div class="text-faq">
				<p>Mai in jos vei gasi raspunsurile la cele mai frecvente intrebari legate de desenul animat vizionat mai sus!
				</p>
			</div>
		</div>
		<hr>
		<div class="intrebari-frecvente">
			<div class="box">
				<button type="button" class="collapsible" id="33"><a class="clicked" href="#33">Cum arată Prințesa
						Cenușăreasa?</a></button>
				<div class="content">
					<p class="text-despre">
						Cenușăreasa este o prințesă înaltă și zveltă, cu păr blond. În filmul de animație, ea poartă o cămașă
						albastră,
						fustă maro și șorț alb în timp ce face treburi prin casă, cu părul într-o coadă de cal joasă. La bal, o
						vedem pe
						Cenușăreasa într-o rochie de bal magnifică de o nuanță albastru pal, cu pantofi de cristal, părul ei este
						strâns
						într-un coc înalt și decorat cu o margine strălucitoare.
					</p>
				</div>
				<button type="button" class="titlu-intro collapsible" id="1"><a class="clicked" href="#1">În ce an a fost lansat
						filmul Cenușăreasa?
					</a></button>
				<div class="content">
					<p class="text-despre">
						Filmul de animație Cenușăreasa a fost lansat în 1949, continuările sale Cinderella 2: Dreams Come
						True în 2002 și Cinderella 3: Evil Spell în 2007. Și publicul a văzut lungmetrajul cu același nume în 2015.
					</p>
				</div>
				<button type="button" class="titlu-intro collapsible" id="2"><a class="clicked" href="#2">Din ce țară este
						Prințesa Cenușăreasa?
					</a></button>
				<div class="content">
					<p class="text-despre">
						Prințesa Disney Cenușăreasa din Europa.
					</p>
				</div>
				<div class="box">
					<button type="button" class="titlu-intro collapsible" id="3"><a class="clicked" href="#3">Care este numele
							prințului Cenușăresei?
						</a></button>
					<div class="content">
						<p class="text-despre">
							În desenul animat Cenușăreasa din 1950, Cenușăreasa îl întâlnește pe prințul fermecător. În lungmetrajul
							din 2015 Cenușăreasa, numele prințului este Keith.
						</p>
					</div>
					<button type="button" class="titlu-intro collapsible" id="4"><a class="clicked" href="#4">Care este numele
							prințesei Cenușăreasa?
						</a></button>
					<div class="content">
						<p class="text-despre">
							Numele adevărat al Cenușăresei, una dintre prințesele Disney, este Ella.
						</p>

					</div>

				</div>
				<hr id="carte">
				<h1 class="textrez texttab">Personajele povestii Cenusareasa</h1>
				<div class="section-carte">
					<div class="carte">
						<a href="https://www.elefant.md/cenusareasa_fd2744e9-f033-4c1c-8781-6f8093867d39" target="_blank"><img
								class="carteprintesa" src="poze/cartea.jpeg" alt="cartea"></a>
					</div>
					<div class="tabel">
						<h4 class="texttabel">Zodiile personajelor povestii Cenusareasa</h4>
						<table>
							<tr>
								<th>Cenusareasa</th>
								<td>Rac ♋</td>
							</tr>
							<tr>
								<th>Printul</th>
								<td>Taur ♉</td>
							</tr>
							<tr>
								<th>Lady Tremaine</th>
								<td>Capricorn ♑</td>
							</tr>
							<tr>
								<th>Zana cea Buna</th>
								<td>Gemeni ♊</td>
							</tr>
							<tr>
								<th>Regele</th>
								<td>Leu ♌</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>

		<footer class="bg-light text-center text-lg-start">
			<!-- Copyright -->
			<div class="text-center p-3" style="background-color: #f49e9e;">
				With ❤️ by
				<a class="text-dark nounderline" href="#"><b>Cebotaru Daniel</b></a>
			</div>
			<!-- Copyright -->
		</footer>

		<script src="/main.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
			integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
			crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
			integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
			crossorigin="anonymous"></script>

</body>


</html>