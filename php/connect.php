<?php

$connection = mysqli_connect('127.0.0.1','root','','cereale');

if ( $connection == false)
{
echo "Încercarea de a se conecta, a eșuat! <br>";
echo mysqli_connect_error();
exit();
}
?>