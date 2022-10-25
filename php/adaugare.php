
<?php
include 'connect.php';
$id_personaj_nou = $_POST['id_personaje_nou'];
$nume_personaj_nou = $_POST['nume_personaje_nou'];
$stergepersonaj = $_POST['get_id'];

if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `personaje`(`id_personaje`, `nume_personaje`) VALUES(?,?)");
	$query = $connection->prepare($sql);
	$query->execute([$id_personaj_nou,$nume_personaj_nou]);
}

if(isset($_POST['submit'])){
	echo "<script type='text/javascript'>window.location.replace('modify.php')</script>";
}

if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM personaje WHERE id_personaje=?";
	$query = $connection->prepare($sql);
	$query->execute([$stergepersonaj]);
}

if(isset($_POST['delete_submit'])){
	echo "<script type='text/javascript'>window.location.replace('modify.php')</script>";
}
?>