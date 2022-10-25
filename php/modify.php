<?php 
include 'connect.php';
include 'adaugare.php';
$connection =new mysqli('localhost','root','','povestea');
$sqlPersonaje = mysqli_query($connection, "SELECT * FROM personaje");
$sqlCalitati = mysqli_query($connection, "SELECT * FROM personaje natural join calitati ");
$sqlConsecinta = mysqli_query($connection, "SELECT * FROM evenimente natural join consecinte ");
$sqlEveniment = mysqli_query($connection, "SELECT * FROM consecinte natural join evenimente");
$sqlLocatia = mysqli_query($connection, "SELECT * FROM locatia");
$calitati = mysqli_query($connection, "SELECT * FROM calitati");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificare</title>
		<link rel="stylesheet" href="/modificare.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<html>
<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand logo" href="#">
				<img src="/poze/loog.png" alt="Bootstrap" width="100rem" height="50rem">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="/index.php">Acasa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" target="_blank" href="https://ro.wikipedia.org/wiki/Fra%C8%9Bii_Grimm">Autor</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/index.php">Priveste Desenul Animat</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Mai Multe
						</a>
						<ul class="dropdown-menu">
							<li><a class="drop" href="/index.php">Zodiile</a></li>
							<li><a class="drop" href="/index.php">F.A.Q</a></li>
							<li><a class="drop" href="/php/modify.php">Modifica</a></li>
							<li><a class="drop" href="/php/connect.php">Modifica</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
	<h4 class="avertizare">Mai in jos poti modifica povestea dupa cum doresti tu!</h1>
	<div class="butoane">
		<a href="#pers">Modifica personaje</a>
		<a href="#calitati">Modifica calitati</a>
		<a href="#consecinte">Modifica consecinte</a>
		<a href="#eveniment">Modifica evenimente</a>
		<a href="#locatia">Modifica locatii</a>
	</div>
		<hr>
	<h2 id="pers" style="text-align: center" class="texttabel">Modifica numele personajelor</h2>
<table  class="modifPersonaje">
    <tr>
        <th>ID</th>
        <th>Personajul</th>
        <th>Modifică</th>
    </tr>
    <?php while($resultPersonaje = $sqlPersonaje->fetch_assoc()) {?>
    <tr>
        <form action="./databaseUpdate.php" method='POST'>
            <td><?php echo $resultPersonaje['id_personaje'] ?></td>
            <td><input type="text" name="nume_personaje" required value="<?php echo $resultPersonaje['nume_personaje'] ?>"/></td>
            <td><input  type='hidden' name='id_personaje' value="<?php echo$resultPersonaje['id_personaje']?>"/>
                           <input type="submit" name='id_personajee' value='🛠️' ></td>
        </form><?php } ?>
    </tr>
</table>
<hr>
<h2 id="calitati" style="text-align: center" class="texttabel">Modifica calitatile personajelor</h2>
<table  class="modifPersonaje">
    <tr>
        <th>ID Personaj</th>
        <th>Personajul</th>
        <th>ID Calitate</th>
        <th>Calitatea</th>
        <th>Modifică</th>
    </tr>
    <?php while($resultCalitati = $sqlCalitati->fetch_assoc()) {?>
    <tr>
        <form action="./databaseUpdate.php" method='POST'>
            <td><?php echo $resultCalitati['id_personaje'] ?></td>
            <td><?php echo $resultCalitati['nume_personaje'] ?></td>
            <td><?php echo $resultCalitati['id_calitati'] ?></td>
            <td><input type="text" name="nume_calitate" value="<?php echo $resultCalitati['nume_calitate']?>" /></td>
            <td><input  type='hidden' name='id_calitati' value="<?php echo $resultCalitati['id_calitati']?>"/>
                           <input type='submit' name='id_calitatii' value='🛠️'> </td>
        </form><?php } ?>
    </tr>
</table>
<hr>
<h2 id="eveniment" style="text-align: center" class="texttabel">Modifica consecintele povestii</h2>
<table  class="modifPersonaje">
    <tr>
        <th>ID Eveniment</th>
        <th>nume_eveniment</th>
        <th>ID Consecinta</th>
        <th>Consecinta</th>
        <th>Modifică</th>
    </tr>
    <?php while($resultConsecinta = $sqlConsecinta->fetch_assoc()) {?>
    <tr>
        <form action="./databaseUpdate.php" method='POST'>
            <td><?php echo $resultConsecinta['id_eveniment'] ?></td>
            <td><?php echo $resultConsecinta['nume_eveniment'] ?></td>
            <td><?php echo $resultConsecinta['id_consecinta'] ?></td>
            <td><input type="text" name="nume_consecinta" value="<?php echo $resultConsecinta['nume_consecinta']?>" /></td>
            <td><input  type='hidden' name='id_consecinta' value="<?php echo $resultConsecinta['id_consecinta']?>"/>
                <input type='submit' name='id_consecinteaa' value='🛠️'> </td>
        </form><?php } ?>
    </tr>
</table>
<hr>
<h2 id="consecinte" style="text-align: center" class="texttabel">Modifica evenimentele din poveste</h2>
<table  class="modifPersonaje">
<tr>
        <th>ID Consecinta</th>
        <th>Consecinta</th>
        <th>ID Eveniment</th>
        <th>Eveniment</th>
        <th>Modifică</th>
    </tr>
    <?php while($resultEveniment = $sqlEveniment->fetch_assoc()) {?>
    <tr>
        <form action="./databaseUpdate.php" method='POST'>
            <td><?php echo $resultEveniment['id_consecinta'] ?></td>
            <td><?php echo $resultEveniment['nume_consecinta'] ?></td>
            <td><?php echo $resultEveniment['id_eveniment'] ?></td>
            <td><input type="text" name="nume_eveniment" value="<?php echo $resultEveniment['nume_eveniment']?>" /></td>
            <td><input  type='hidden' name='id_eveniment' value="<?php echo $resultEveniment['id_eveniment']?>"/>
                <input type='submit' name='id_evenimentee' value='🛠️'> </td>
        </form><?php } ?>
    </tr>
</table>
<hr>
<h2 style="text-align: center" class="texttabel">Modifica locatii din poveste</h2>
<table id="locatia" class="modifPersonaje">
    <tr>
        <th>ID Locatie</th>
        <th>Nume Locatie</th>
				<th>Modifica</th>
    </tr>
    <?php while($resultConsecinta = $sqlLocatia->fetch_assoc()) {?>
    <tr>
        <form action="./databaseUpdate.php" method='POST'>
            <td><?php echo $resultConsecinta['id_locatie'] ?></td>
            <td><input type="text" name="nume_locatie" value="<?php echo $resultConsecinta['nume_locatie']?>" /></td>
            <td><input  type='hidden' name='id_locatie' value="<?php echo $resultConsecinta['id_locatie']?>"/>
                <input type='submit' name='id_locatiee' value='🛠️'> </td>
        </form><?php } ?>
    </tr>
</table>
<hr>
<h2 style="text-align: center" class="texttabel">Adauga personaje</h2>
<table  class="modifPersonaje">
    <tr>
        <th>ID</th>
        <th>Personajul</th>
        <th>Adauga</th>
    </tr>
    <tr>
        <form action="" method='POST'>
				<td><input  type='text' name='id_personaje_nou' placeholder="ID-Nou" value=""/></td>
				<td><input  type='text' name='nume_personaje_nou' placeholder="Nume Personaj" value=""/></td>
				<td><input type='submit' name='submit' value='🛠️'> </td>
        </form>
    </tr>
</table>
<hr>
<h2 style="text-align: center" class="texttabel">Sterge unul din personaje</h2>
<table  class="modifPersonaje">
    <tr>
        <th>ID</th>
        <th>Sterge</th>
    </tr>
    <tr>
        <form action="" method='POST'>
				<td><input  type='text' name='get_id' placeholder="ID-personaj" value=""/></td>
				<td><input type='submit' name='delete_submit' value='🛠️'> </td>
        </form>
    </tr>
</table>
<hr>
	</div>

</body>
</html>