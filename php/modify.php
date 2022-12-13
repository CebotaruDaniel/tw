<?php 
include 'connect.php';
include 'update.php';
$connection =new mysqli('localhost','root','','cereale');
$cereale = mysqli_query($connection, "SELECT * FROM tip_cereala");
$Furnizori = mysqli_query($connection, "SELECT * FROM furnizor");
$grau = mysqli_query($connection, "SELECT * FROM pret natural join tip_cereala natural join an natural join cantitate WHERE id_cereala = 1");
$porumb = mysqli_query($connection, "SELECT * FROM pret natural join tip_cereala natural join an natural join cantitate WHERE id_cereala = 4");
$orz = mysqli_query($connection, "SELECT * FROM pret natural join tip_cereala natural join an natural join cantitate WHERE id_cereala = 2");
$secara = mysqli_query($connection, "SELECT * FROM pret natural join tip_cereala natural join an natural join cantitate WHERE id_cereala = 3");
$hrisca = mysqli_query($connection, "SELECT * FROM pret natural join tip_cereala natural join an natural join cantitate WHERE id_cereala = 6");
$ovaz = mysqli_query($connection, "SELECT * FROM pret natural join tip_cereala natural join an natural join cantitate WHERE id_cereala = 5");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificare</title>
		<link rel="stylesheet" href="/css/modify.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<html>
<body>
	<div class="container">
	<h4 class="avertizare">Mai in jos poti modifica povestea dupa cum doresti tu!</h1>
	<div class="butoane">
		<a href="#1">Modifica Cereale</a>
		<a href="#2">Modifica Furnizori</a>
		<a href="#3">Modifica Grau</a>
		<a href="#4">Modifica Porumb</a>
		<a href="#5">Modifica Orz</a>
		<a href="#6">Modifica Hrisca</a>
		<a href="#7">Modifica Secara</a>
		<a href="#8">Modifica Ovaz</a>
		<a href="/index.html">BACK</a>
	</div>
		<hr>
	<h2 id="1" style="text-align: center" class="texttabel">Modifica DENUMIREA CEREALA</h2>
<table  class="modifPersonaje">
    <tr>
        <th>ID</th>
        <th>Personajul</th>
        <th>Modifică</th>
    </tr>
    <?php while($resultPersonaje = $cereale->fetch_assoc()) {?>
    <tr>
        <form action="./update.php" method='POST'>
            <td><?php echo $resultPersonaje['id_cereala'] ?></td>
            <td><input type="text" name="nume_cereala" required value="<?php echo $resultPersonaje['nume_cereala'] ?>"/></td>
            <td><input  type='hidden' name='id_cereala' value="<?php echo$resultPersonaje['id_cereala']?>"/>
                           <input type="submit" name='id_cerealaa' value='🛠️' ></td>
        </form><?php } ?>
    </tr>
</table>
<h2 id="2" style="text-align: center" class="texttabel">Modifica FURNIZORI</h2>
<table  class="modifPersonaje">
    <tr>
        <th>ID</th>
        <th>Personajul</th>
        <th>Modifică</th>
    </tr>
    <?php while($resultPersonaje = $Furnizori->fetch_assoc()) {?>
    <tr>
        <form action="./update.php" method='POST'>
            <td><?php echo $resultPersonaje['id_furnizor'] ?></td>
            <td><input type="text" name="nume_furnizor" required value="<?php echo $resultPersonaje['nume_furnizor'] ?>"/></td>
            <td><input  type='hidden' name='id_furnizor' value="<?php echo$resultPersonaje['id_furnizor']?>"/>
                           <input type="submit" name='id_furnizorr' value='🛠️' ></td>
        </form><?php } ?>
    </tr>
</table>
<hr>
<h2 id="3" style="text-align: center" class="texttabel">Modifica GRAU</h2>
<table  class="modifPersonaje">
    <tr>
        <th>Anul</th>
        <th>Pretul</th>
				<th>Cantitatea</th>
				<th>Modifica</th>
    </tr>
    <?php while($resultCalitati = $grau->fetch_assoc()) {?>
    <tr>
        <form action="./update.php" method='POST'>
            <td><?php echo $resultCalitati['anul'] ?></td>
            <td><input type="text" name="pret" value="<?php echo $resultCalitati['pret']?>" /></td>
						<td><input type="text" name="cantitate" value="<?php echo $resultCalitati['cantitatea']?>" /></td>
            <td><input  type='hidden' name='id_pret' value="<?php echo $resultCalitati['id_pret']?>"/>
														<input type='submit' name='id_prett' value='✅'> </td>
        </form><?php } ?>
    </tr>
</table>
<hr>
<h2 id="4" style="text-align: center" class="texttabel">Modifica PORUMB</h2>
<table  class="modifPersonaje">
    <tr>
        <th>Anul</th>
        <th>Pretul</th>
				<th>Cantitatea</th>
				<th>Modifica</th>
    </tr>
    <?php while($resultCalitati = $porumb->fetch_assoc()) {?>
    <tr>
        <form action="./update.php" method='POST'>
            <td><?php echo $resultCalitati['anul'] ?></td>
            <td><input type="text" name="pret" value="<?php echo $resultCalitati['pret']?>" /></td>
						<td><input type="text" name="cantitate" value="<?php echo $resultCalitati['cantitatea']?>" /></td>
            <td><input  type='hidden' name='id_pret' value="<?php echo $resultCalitati['id_pret']?>"/>
														<input type='submit' name='id_prett' value='✅'> </td>
        </form><?php } ?>
    </tr>
</table>
<hr>
<h2 id="5" style="text-align: center" class="texttabel">Modifica ORZ</h2>
<table  class="modifPersonaje">
    <tr>
        <th>Anul</th>
        <th>Pretul</th>
				<th>Cantitatea</th>
				<th>Modifica</th>
    </tr>
    <?php while($resultCalitati = $orz->fetch_assoc()) {?>
    <tr>
        <form action="./update.php" method='POST'>
            <td><?php echo $resultCalitati['anul'] ?></td>
            <td><input type="text" name="pret" value="<?php echo $resultCalitati['pret']?>" /></td>
						<td><input type="text" name="cantitate" value="<?php echo $resultCalitati['cantitatea']?>" /></td>
            <td><input  type='hidden' name='id_pret' value="<?php echo $resultCalitati['id_pret']?>"/>
														<input type='submit' name='id_prett' value='✅'> </td>
        </form><?php } ?>
    </tr>
</table>
<hr>
<h2 id="6" style="text-align: center" class="texttabel">Modifica HRISCA</h2>
<table  class="modifPersonaje">
    <tr>
        <th>Anul</th>
        <th>Pretul</th>
				<th>Cantitatea</th>
				<th>Modifica</th>
    </tr>
    <?php while($resultCalitati = $hrisca->fetch_assoc()) {?>
    <tr>
        <form action="./update.php" method='POST'>
            <td><?php echo $resultCalitati['anul'] ?></td>
            <td><input type="text" name="pret" value="<?php echo $resultCalitati['pret']?>" /></td>
						<td><input type="text" name="cantitate" value="<?php echo $resultCalitati['cantitatea']?>" /></td>
            <td><input  type='hidden' name='id_pret' value="<?php echo $resultCalitati['id_pret']?>"/>
														<input type='submit' name='id_prett' value='✅'> </td>
        </form><?php } ?>
    </tr>
</table>
<hr>
<h2 id="7" style="text-align: center" class="texttabel">Modifica SECARA</h2>
<table  class="modifPersonaje">
    <tr>
        <th>Anul</th>
        <th>Pretul</th>
				<th>Cantitatea</th>
				<th>Modifica</th>
    </tr>
    <?php while($resultCalitati = $secara->fetch_assoc()) {?>
    <tr>
        <form action="./update.php" method='POST'>
            <td><?php echo $resultCalitati['anul'] ?></td>
            <td><input type="text" name="pret" value="<?php echo $resultCalitati['pret']?>" /></td>
						<td><input type="text" name="cantitate" value="<?php echo $resultCalitati['cantitatea']?>" /></td>
            <td><input  type='hidden' name='id_pret' value="<?php echo $resultCalitati['id_pret']?>"/>
														<input type='submit' name='id_prett' value='✅'> </td>
        </form><?php } ?>
    </tr>
</table>
<hr>
<h2 id="8" style="text-align: center" class="texttabel">Modifica OVAZ</h2>
<table  class="modifPersonaje">
    <tr>
        <th>Anul</th>
        <th>Pretul</th>
				<th>Cantitatea</th>
				<th>Modifica</th>
    </tr>
    <?php while($resultCalitati = $ovaz->fetch_assoc()) {?>
    <tr>
        <form action="./update.php" method='POST'>
            <td><?php echo $resultCalitati['anul'] ?></td>
            <td><input type="text" name="pret" value="<?php echo $resultCalitati['pret']?>" /></td>
						<td><input type="text" name="cantitate" value="<?php echo $resultCalitati['cantitatea']?>" /></td>
            <td><input  type='hidden' name='id_pret' value="<?php echo $resultCalitati['id_pret']?>"/>
														<input type='submit' name='id_prett' value='✅'> </td>
        </form><?php } ?>
    </tr>
</table>
<hr>
<h2 style="text-align: center" class="texttabel">Adauga personaje</h2>
<table  class="modifPersonaje">
    <tr>
        <th>ID</th>
        <th>Cereala</th>
        <th>Adauga</th>
    </tr>
    <tr>
        <form action="" method='POST'>
				<td><input  type='text' name='id_cereala_nou' placeholder="ID-Nou-Cereala" value=""/></td>
				<td><input  type='text' name='nume_cereala_nou' placeholder="Nume Cereala" value=""/></td>
				<td><input type='submit' name='submit' value='➕'> </td>
        </form>
    </tr>
</table>
<hr>
<h2 style="text-align: center" class="texttabel">Sterge Cereale</h2>
<table  class="modifPersonaje">
    <tr>
        <th>ID</th>
        <th>Sterge</th>
    </tr>
    <tr>
        <form action="" method='POST'>
				<td><input  type='text' name='get_id' placeholder="ID-Cereala" value=""/></td>
				<td><input type='submit' name='delete_submit' value='🗑️'> </td>
        </form>
    </tr>
</table>
<hr>
<footer class="bg-light text-center text-lg-start foooter">
			<!-- Copyright -->
			<div class="text-center p-3" style="background-color: #8acff4;">
				With ❤️ by
				<a class="text-dark nounderline" href="#"><b>Cebotaru Daniel</b></a>
			</div>
			<!-- Copyright -->
</footer>
	</div>
	<script src="/main.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
			integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
			crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
			integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
			crossorigin="anonymous"></script>
</body>
</html>