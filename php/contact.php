
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$nameErr = $mailErr = $helpErr = $succes = $error ="";
$nume = $posta = $help = "";
$saved = false;
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nume=$_POST['nume'];
        $posta=$_POST['posta'];
        $help=$_POST['help'];
        $fp = fopen('/Applications/XAMPP/xamppfiles/htdocs/informatie.txt', 'a');
        if(empty($nume)){
            $nameErr = "* Introduceti numele,prenumele";
        }  
        if(!preg_match($pattern,$posta)){
            $mailErr = "*Email-ul nu este valid!";
        }
        if(empty($help)){
            $helpErr = "*Introduceti problema cu care v-ati confruntat";
        }
        if(empty($nameErr) && empty($mailErr) && empty($helpErr)){
            fprintf($fp,"----------------------------------\n");
            fprintf($fp,"Numele client : %s\n", $nume);
            fprintf($fp,"Email client : %s\n", $posta);
            fprintf($fp,"Problema clientului : %s\n", $help);
            $nume = $posta = $help = "";
            $saved = true;
        }
            fclose($fp);

            $succes = "* Datele introduse sau transmis cu succes !";


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

    }  
?>

