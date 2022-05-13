
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/stylelogin.css""/>
  <link rel=" stylesheet" href="../css/stylegeneral.css""/>
  <link rel=" stylesheet" href="../css/animation.css">

  <!--Script JQUERY -->
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <!--Plugin JQUERY -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  <!--Fisier Javascript Local -->
  <script src="../javascript/validate.js"></script>
  <title>Document</title>
  
</head>

<body>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$loginErr = $parolaErr = $emailErr = $numarErr = $succes = $error ="";
$login = $email = $parola = $numar = "";
$saved = false;
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $login=$_POST['login'];
        $parola=$_POST['password'];
        $email=$_POST['email'];
        $numar=$_POST['numar'];
        $fp = fopen('/Applications/XAMPP/xamppfiles/htdocs/informatie.txt', 'a');
        if(empty($login)){
            $loginErr = "* Introduceti login-ul";
        }  
        if(empty($parola)){
            $parolaErr = "* Introduceti parola pentru contul vostru! *";
        }
        if(empty($email)){
            $emailErr = "* Introduceti email-ul! *";
        }
        if(!preg_match($pattern,$email)){
            $emailErr = "* Email-ul nu este valid! *";
        }
        if(empty($numar)){
            $parolaErr = "* Introduceti numarul de telefon *";
        }
        if(empty($loginErr) && empty($parolaErr) && empty($emailErr)&& empty($numarErr)){
            fprintf($fp,"----------------------------------\n");
            fprintf($fp,"Login client : %s\n", $login);
            fprintf($fp,"Parola : %s\n", $parola);
            fprintf($fp,"Email : %s\n", $email);
            fprintf($fp,"Numar : %s\n", $numar);
            $login = $parola = $email = $numar = "";
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
        <h1 class="logo"> <img class="logoimage" src="../imagini-icon/ethsvg.png" alt="logopng">ENCRYPTED</h1>
        <a class="navbar-items" href="../index.html"><img class="house" src="../imagini-icon/house.png" alt=""></a>
        <a class="navbar-items" href="curiozitati.html">Curiozitati</a>
        <a class="navbar-items" href="faqs.html">FAQ'S</a>
        <a class="navbar-items" href="price.html">CoinPrice</a>
        <a class="navbar-items" href="market.html">Market</a>
        <a class="navbar-items" href="contact.php">Contact</a>
        <div class="login">
          <a class="house " href="logare.php"><img class="house" src="../imagini-icon/login.png" alt=""></a>
          <a class="house active" href="login.php"><img class="house" src="../imagini-icon/add-user.png" alt=""></a>
        </div>
      </div>
  </header>

  <div class="container-total">
    <div class="container-signup">
      <form class="formlogin" id="basic-form" action="login.php" method="post">
        <h2>Register</h1>
        <p>
            <span class="error"><?php echo $error;?></span>
            <span class="success"><?php echo $succes;?></span>
        </p>    
          <input placeholder="Login" name="login">
          <p>
          <span class="error"><?php echo $loginErr;?></span>
          </p>
          <input placeholder="Parola" type="password" id="mail-password" name="password">
          <p>
          <span class="error"><?php echo $parolaErr;?></span>
          </p>
          <input placeholder="Posta de email" type="email" id="mail-email" name="email">
          <p>
          <span class="error"><?php echo $emailErr;?></span>
          </p>
          <input placeholder="Telefon" id="mail-numar" name="numar">
          <p>
          <span class="error"><?php echo $numarErr;?></span>
          </p>
          <button id="mail-submit" type="submit" name="submit">Register</button>
      </form>
    </div>

  <footer class="footer-login">
    <p>Site al elevului <b>Cebotaru Daniel </b> &copy; 2022</p>
  </footer>

</body>

</html>