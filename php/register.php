<?php
$username = $email = $password = $passwordRepeat = $succes = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Username'];
    $email = $_POST['email'];
    $password = $_POST['Password'];
    $passwordRepeat = $_POST['PasswordRepeat'];

    $fp = fopen('/Applications/XAMPP/xamppfiles/htdocs/informatie.txt', 'a');
    fprintf($fp, "----------------------------------\n");
    fprintf($fp, "Username : %s\n", $username);
    fprintf($fp, "email : %s\n", $email);
    fprintf($fp, "Password : %s\n", $password);
    $username = $email = $password = "";

    fclose($fp);

    $succes = "* Vați înregistrat cu succes";

}
if($succes){
    print_r( json_encode([
        "succes"=>"true",
        "data"=> $succes
    ]));
}else{
    print_r( json_encode([
        "succes"=>"false",
    ]));
}
?>