<?php
include 'connect.php';
$connection =new mysqli('localhost','root','','cereale');

if(isset($_POST['id_cereala'])){
    if(!empty($_POST['nume_cereala'])) {
    $sqlPersonaje="UPDATE tip_cereala SET nume_cereala = '".$_POST['nume_cereala']."' WHERE`id_cereala`='".$_POST['id_cereala']."'";
        $resultPersonaje=mysqli_query($connection, $sqlPersonaje);
    if($resultPersonaje){
        echo "<script type='text/javascript'>window.location.replace('modify.php')</script>";
    }}}

		if(isset($_POST['id_furnizor'])){
			if(!empty($_POST['nume_furnizor'])) {
			$sqlFurnizor="UPDATE furnizor SET nume_furnizor = '".$_POST['nume_furnizor']."' WHERE`id_furnizor`='".$_POST['id_furnizor']."'";
					$resultFurnizor=mysqli_query($connection, $sqlFurnizor);
			if($resultFurnizor){
					echo "<script type='text/javascript'>window.location.replace('modify.php')</script>";
			}}}

			if(isset($_POST['id_pret'])){
				if(!empty($_POST['pret'])) {
				$sqlPret="UPDATE pret SET pret = '".$_POST['pret']."' WHERE`id_pret`='".$_POST['id_pret']."'";
						$resultPret=mysqli_query($connection, $sqlPret);
				if($resultPret){
						echo "<script type='text/javascript'>window.location.replace('modify.php')</script>";
				}}}

				if(isset($_POST['id_pret'])){
					if(!empty($_POST['cantitate'])) {
					$sqlPret="UPDATE cantitate SET cantitatea = '".$_POST['cantitate']."' WHERE`id_cantitate`='".$_POST['id_pret']."'";
							$resultPret=mysqli_query($connection, $sqlPret);
					if($resultPret){
							echo "<script type='text/javascript'>window.location.replace('modify.php')</script>";
					}}}


$id_cereala_nou = $_POST['id_cereala_nou'];
$nume_cereala_nou = $_POST['nume_cereala_nou'];
$stergecereala = $_POST['get_id'];

if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `tip_cereala`(`id_cereala`, `nume_cereala`) VALUES(?,?)");
	$query = $connection->prepare($sql);
	$query->execute([$id_cereala_nou,$nume_cereala_nou]);
}

if(isset($_POST['submit'])){
	echo "<script type='text/javascript'>window.location.replace('modify.php')</script>";
}

if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM tip_cereala WHERE id_cereala=?";
	$query = $connection->prepare($sql);
	$query->execute([$stergecereala]);
}

if(isset($_POST['delete_submit'])){
	echo "<script type='text/javascript'>window.location.replace('modify.php')</script>";
}
?>