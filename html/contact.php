
<!DOCTYPE HTML>  
<html>
<head>
    <link rel="stylesheet" href="/css/stylegeneral.css">
    <link rel="stylesheet" href="/css/stylecontact.css">
    <link rel="stylesheet" href="/css/animation.css">
</head>
<body>  
    <header>
    <nav>
            <div class="navbar">
                <h1 class="logo"> <img class ="logoimage" src="../imagini-icon/ethsvg.png" alt="logopng">ENCRYPTED</h1>
                <a  class="navbar-items" href="../index.html" >ACASA</a>
                <a class="navbar-items" href="curiozitati.html">CURIOZITATI</a>
                <a  class="navbar-items" href="faqs.html" >INFORMATIE&nbsp;UTILA</a>
                <a  class="navbar-items" href="price.html" >COIN PRICE</a>
                <a  class="navbar-items" href="market.html" >MARKET</a>
                <a  class="active" href="contact.php" >CONTACT</a>
            </div>
        </nav>
    </header>

<div class="container-contact">
    <h2>Contacteaza-ne</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      <input type="text" placeholder="Numele si Prenumele" name="name"><br>
      <input type="email" placeholder="Adresa de email" name="email" ><br>
      <textarea name="comment" placeholder="Feedback-ul" rows="5" cols="40"></textarea><br>
      <br>
      <input class="buton-submit" type="submit" name="submit" value="Trimite">  
</form>
</div><br><br>

 <div class="informatie">
     <h1>Telefon</h3>
     <div class="numere">
        <p>060760375 & 070760375</p>
     </div>

     <div class="email">
        <h2>Adresa email support</h1>
        <p>encryptedsupport@gmail.com</p><br>
     </div>
     <p>Support-ul site-ului nostru lucreaza 24/24 , pentru intrebari vizitati pagina <a href="faqs.html">FAQS</a></p>

     

    


 </div>


</body>
</html>