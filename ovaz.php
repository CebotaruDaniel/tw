<?php
include './php/connect.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


for($i =22; $i <= 28; $i++) {
    $cantitate[$i] = mysqli_query($connection, "SELECT cantitatea FROM pret natural join tip_cereala natural join cantitate where id_cereala=5 AND id_cantitate = $i");
    $resPersonaje[$i] = $cantitate[$i]->fetch_assoc();
}

for($i = 1; $i <= 7; $i++) {
	$pret[$i] = mysqli_query($connection, "SELECT pret FROM pret natural join tip_cereala where id_cereala=5 AND id_an = $i");
	$resPret[$i] = $pret[$i]->fetch_assoc();
}
for($i = 1; $i <= 7; $i++) {
	$furnizor[$i] = mysqli_query($connection, "SELECT cantitatea FROM cantitate natural join furnizor natural join pret where id_furnizor=1 AND id_an = $i");
	$resfurnzior[$i] = $furnizor[$i]->fetch_assoc();
}
?>


<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VILAGE.IO</title>
	<link rel="icon" type="image/x-icon" href="/images/harvest.png">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/animation.css">
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
	<div class="loader">
		<img src="images/d4b8990c4aba3ef1f3c088c69c4cb356.gif" alt="">
		<p>VILAGE.IO</p>
	</div>

	<div class="info">
		<div class="logo">
			<img style="width: 4rem;" src="/images/harvest.png" alt="barn">
			<a class="navbar-brand" href="#">
				Vilage.io 
			</a>
		</div>
		<div class="cereale">
			<h1>Control Center</h1>
			<div class="cereale_icon">
				<div class="cereale_grau">
					<a href="index.html"><img src="/images/home.png" alt="grau"></a>
					<p>Home</p>
				</div>
				<div class="cereale_porumb">
					<a href="/php/modify.php"><img src="/images/edit.png" alt="grau"></a>
					<p>Modify</p>
				</div>
			</div>
			<div class="cereale_icon2">
				<div class="cereale_orz">
					<a href="index.html"><img src="/images/about.png" alt="grau"></a>
					<p>About</p>
				</div>
				<div class="cereale_hrisca">
					<a href="index.html"><img src="/images/contact-mail.png" alt="grau"></a>
					<p>Contact</p>
				</div>

			</div>
			<div class="menu">
				<h1 style="text-align: center;">Tipuri de cereale </h1>
				<div class="cereale_icon">
					<div class="cereale_grau">
						<a href="grau.php"><img src="/images/wheat.png" alt="grau"></a>
						<p>Grau</p>
					</div>
					<div class="cereale_porumb">
						<a href="porumb.php"><img src="/images/corn.png" alt="grau"></a>
						<p>Porumb</p>
					</div>
					<div class="cereale_orz">
						<a href="orz.php"><img src="/images/barley.png" alt="grau"></a>
						<p>Orz</p>
					</div>
				</div>
				<div class="cereale_icon">
					<div class="cereale_hrisca">
						<a href="hrisca.php"><img src="/images/buckwheat.png" alt="grau"></a>
						<p>Hrisca</p>
					</div>
					<div class="cereale_icon3">
						<div class="cereale_rye">
							<a href="secara.php"><img src="/images/rye.png" alt="grau"></a>
							<p>Secara</p>
						</div>
						<div class="cereale_oat">
							<a href="ovaz.php"><img src="/images/oat.png" alt="grau"></a>
							<p>Ovaz</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="charts-container">
		<div class="chart1">
			<div>
				<canvas style="position: relative; height:350px; width:360px" id="myChart">
				</canvas>
			</div>
		</div>
		<div class="chart2">
			<div>
				<canvas style="position: relative; height:350px; width:360px" id="myChart2">
				</canvas>
			</div>
		</div>
	</div>
	<div class="charts-container2">
		<div class="chart3">
			<canvas style="position: relative; height:300px; width:800px" id="myChart3">
			</canvas>
		</div>


	


<!-- 
 Script pentru diagramele cu ajutorul bibliotecii Chart.js
 -->

		<script>
			const ctx = document.getElementById('myChart');
			let myChart = new Chart(ctx, {
				type: 'pie',
				data: {
					labels: ['2022', '2021','2020','2019', '2018', '2017', '2016'],
					datasets: [{
						label: 'Cantitatea in tone a recoltei de ovaz din Republica Moldova',
						data: [<?php echo $resPersonaje[28]['cantitatea'];?>, <?php echo $resPersonaje[27]['cantitatea'];?>, <?php echo $resPersonaje[26]['cantitatea'];?>, <?php echo $resPersonaje[25]['cantitatea'];?>, <?php echo $resPersonaje[24]['cantitatea'];?>, <?php echo $resPersonaje[23]['cantitatea'];?>,<?php echo $resPersonaje[22]['cantitatea'];?>],
						borderWidth: 1,
						backgroundColor: [
							'#007CC7',
							'#007CC7',
							'#4DA8DA',
							'#203647',
							'#3282B8',
							'#51e2f5',
							'#D6E6F2',
						],
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					},
					plugins: {
						title: {
							display: true,
							text: 'Cantitatea in tone a recoltei de ovaz din Republica Moldova'
						}
					}
				}
			});


			const ctx2 = document.getElementById('myChart2');
			let myChart2 = new Chart(ctx2, {
				type: 'doughnut',
				data: {
					labels: ['2022', '2021', '2020','2019', '2018', '2017', '2016'],
					datasets: [{
						label: 'Pretul in lei/kg ',
						data: [<?php echo $resPret[7]['pret'];?>, <?php echo $resPret[6]['pret'];?>, <?php echo $resPret[5]['pret'];?>, <?php echo $resPret[4]['pret'];?>, <?php echo $resPret[3]['pret'];?>, <?php echo $resPret[2]['pret'];?>,<?php echo $resPret[1]['pret'];?>],
						borderWidth: 1,
						backgroundColor: [
							'#007CC7',
							'#4DA8DA',
							'#203647',
							'#3282B8',
							'#51e2f5',
							'#D6E6F2',
						],
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					},
					plugins: {
						title: {
							display: true,
							text: 'Pretul în lei/kg al ovazului din Republica Moldova'
						}
					}
				}
			});

			const ctx3 = document.getElementById('myChart3');
			let myChart3 = new Chart(ctx3, {
				type: 'bar',
				data: {
					labels: ['2022', '2021', '2019', '2018', '2017', '2016'],
					datasets: [{
						label: 'Numarul de tone de ovaz exportate de furnizorul Imexpo',
						data: [40, 80, 130, 100, 95, 70],
						borderWidth: 1,
						backgroundColor: [
							'#007CC7',
							'#4DA8DA',
							'#203647',
							'#3282B8',
							'#51e2f5',
							'#D6E6F2',
						],
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					},
				}
			});
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
			crossorigin="anonymous"></script>
			<script src="/js/preloader.js"></script>
</body>

</html>