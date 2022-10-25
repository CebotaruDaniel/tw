
<?php
include 'connect.php';
$id_personaj_nou = $_POST['id_personaje_nou'];
$nume_personaj_nou = $_POST['nume_personaje_nou'];
$stergepersonaj = $_POST['get_id'];

// Create
if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `personaje`(`id_personaje`, `nume_personaje`) VALUES(?,?)");
	$query = $connection->prepare($sql);
	$query->execute([$id_personaj_nou,$nume_personaj_nou]);
	$success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Данные успешно отправлены!</strong> Вы можете закрыть это сообщение.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
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