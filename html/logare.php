
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
$loginErr = $parolaErr = $emailErr = $numarErr = $succes = $error ="";
$login = $email = $parola = $numar = "";
$saved = false;
$logincor = "daniel";
$parolacor = "12345";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $login=$_POST['login'];
        $parola=$_POST['password'];

        if(empty($login)){
            $loginErr = "* Introduceti login-ul";
        }  
        if(empty($parola)){
            $parolaErr = "* Introduceti parola pentru contul vostru! *";
        }
 
        if($login == $logincor && $parola == $parolacor)
        {
            $saved = true;
        }

        if($saved){
            $succes = "* Vati logat cu succes !";
        }else{
            $error = "* Parola nu este corecta!";
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
          <a class="house active" href="logare.php"><img class="house" src="../imagini-icon/login.png" alt=""></a>
          <a class="house " href="login.php"><img class="house" src="../imagini-icon/add-user.png" alt=""></a>
        </div>
      </div>
  </header>

  <div class="container-total">
    <div class="container-signup">
      <form class="formlogin" id="basicform" method="post">
        <h2>Log In</h1>
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
          <button id="mail-submit" type="submit" name="submit">Register</button>
      </form>
    </div>

  <footer class="footer-login">
    <p>Site al elevului <b>Cebotaru Daniel </b> &copy; 2022</p>
  </footer>

</body>

</html>