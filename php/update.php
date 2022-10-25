<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'connect.php';
$connection =new mysqli('localhost','root','','povestea');

if(isset($_POST['id_personaje'])){
    if(!empty($_POST['nume_personaje'])) {
    $sqlPersonaje="UPDATE personaje SET nume_personaje = '".$_POST['nume_personaje']."' WHERE`id_personaje`='".$_POST['id_personaje']."'";
        $resultPersonaje=mysqli_query($connection, $sqlPersonaje);
    if($resultPersonaje){
        echo "<script type='text/javascript'>window.location.replace('modify.php')</script>";
    }}}

		if(isset($_POST['id_calitati'])){
			if(!empty($_POST['nume_calitate'])) {
				$sqlCalitati="UPDATE calitati SET nume_calitate = '".$_POST['nume_calitate']."' WHERE`id_calitati`='".$_POST['id_calitati']."'";
				$resultCalitati=mysqli_query($connection, $sqlCalitati);
			if($resultCalitati){
					echo "<script type='text/javascript'>window.location.replace('modify.php')</script>";
			}}}

			if(isset($_POST['id_consecinta'])){
				if(!empty($_POST['nume_consecinta'])) {
					$sqlConsecinta="UPDATE consecinte SET nume_consecinta = '".$_POST['nume_consecinta']."' WHERE`id_consecinta`='".$_POST['id_consecinta']."'";
					$resultConsecinta=mysqli_query($connection, $sqlConsecinta);
						if($resultConsecinta){
								echo "<script type='text/javascript'>window.location.replace('modify.php')</script>";
						}}}
						
						if(isset($_POST['id_eveniment'])){
							if(!empty($_POST['nume_eveniment'])) {
								$sqlConsecinta="UPDATE evenimente SET nume_eveniment = '".$_POST['nume_eveniment']."' WHERE`id_eveniment`='".$_POST['id_eveniment']."'";
								$resultEveniment=mysqli_query($connection, $sqlConsecinta);
									if($resultEveniment){
											echo "<script type='text/javascript'>window.location.replace('modify.php')</script>";
									}}}

									if(isset($_POST['id_locatie'])){
										if(!empty($_POST['nume_locatie'])) {
											$sqlConsecinta="UPDATE locatia SET nume_locatie = '".$_POST['nume_locatie']."' WHERE`id_locatie`='".$_POST['id_locatie']."'";
											$resultEveniment=mysqli_query($connection, $sqlConsecinta);
												if($resultEveniment){
														echo "<script type='text/javascript'>window.location.replace('modify.php')</script>";
												}}}

