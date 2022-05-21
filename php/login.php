<?php session_start();

$succes = "";

if(isset($_POST['Submit'])){

    $logins = array('Daniel' => '123456','username1' => 'password1','username2' => 'password2');

    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

    if (isset($logins[$Username]) && $logins[$Username] == $Password){

        $_SESSION['UserData']['Username']=$logins[$Username];
        $succes="* Vați logat cu succes *";
    }
    else{
        $error="* Nu ati introdus datele corect *";
    }
}

if($succes){
    print_r( json_encode([
        "succes"=>"true",
        "data"=> $succes
    ]));
}else{
    print_r( json_encode([
        "succes"=>"false",
        "dataa"=> $error
    ]));
}


?>
