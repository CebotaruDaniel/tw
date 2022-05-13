
<!DOCTYPE HTML>  
<html>
<head>
    <link rel="stylesheet" href="/css/stylegeneral.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/css/stylecontact.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/css/animation.css?v=<?php echo time(); ?>">
      <!--Script JQUERY -->
  <!--Script JQUERY -->
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <!--Plugin JQUERY -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  <!--Fisier Javascript Local -->
  <script src="../javascript/form-validation.js"></script>
  <title>Document</title>
</head>
<body>  

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

        if($saved){
            $succes = "* Datele introduse sau transmis cu succes !";
        }else{
            $error = "* Datele nu au fost transmise,mai incearca!";
        }

    }  
?>

<header>
    <nav>
        <div class="navbar">
            <h1 class="logo"> <img class ="logoimage" src="../imagini-icon/ethsvg.png" alt="logopng">ENCRYPTED</h1>
            <a  class="navbar-items" href="../index.html" ><img class="house" src="../imagini-icon/house.png" alt=""></a>
            <a class="navbar-items" href="curiozitati.html">Curiozitati</a>
            <a  class="navbar-items" href="faqs.html" >FAQ'S</a>
            <a  class="navbar-items" href="price.html" >CoinPrice</a>
            <a  class="navbar-items" href="market.html" >Market</a>
            <a  class="active" href="contact.php" >Contact</a>
            <div class="login">
              <a  class="house" href="logare.php" ><img class="house" src="../imagini-icon/login.png" alt=""></a>
              <a  class="house" href="login.php" ><img class="house" src="../imagini-icon/add-user.png" alt=""></a>
          </div>
        </div>
</header>

<div class="container-contact">
    <h2>Contacteaza-ne</h2>
    <span class="error"><?php echo $nameErr;?></span>
    <span class="error"><?php echo $mailErr;?></span>
    <span class="error"><?php echo $helpErr;?></span>
    <span class="error"><?php echo $error;?></span>
    <span class="success"><?php echo $succes;?></span>
    <form id="form-support" method="post" action="contact.php">  
      <input type="text" placeholder="Cum va numiti?" id="nume" name="nume" value="<?= $nume?>">
      <input type="text" placeholder="Introduceti adresa de email" id="posta" name="posta" value="<?= $posta?>">
      <textarea name="help" placeholder="Explicati problema dumneavoastra !" rows="5" cols="40" value="<?= $help?>"></textarea>
      <input class="buton-submit" type="submit" name="submit" value="Trimite">  
</form>



</body>
</html>