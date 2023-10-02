<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION[""])){
    // header("Location: l.php");
    // exit(); 
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nav.css">
</head>
<body>
<header class="o">
    <nav>
        <div>
            <li><a href="index.php"><span>SITE</span> <spann class="sp">TOURISTIQUE</span> <span class="pp">BF</span></a></li>
        </div>
        <ul>

        <li><a href="ouaga.php">OUAGADOUGOU</a></li>
        <li><a href="bobo.php">BOBO</a></li>
        <!-- <a href="add.php">add</a> -->
        <a href="contact.php"><button> <a href="layout.php">Déconnexion</a></button></a>
        </ul>
    </nav><br><br><br><br>

    <div class="visit">
        <h1 class="m">Visitez le pays des HOMMES INTEGRES en toute quietude</h1><br><br>
        <marquee behavior="" direction="">
            <h1>Decouvrez BURKINA FASO une destination a ne pas manquee</h1>
        </marquee>
      <marquee behavior="" direction="" class="marq">
        <img src="images/rouge.png" alt="">
        <img src="images/etoile.png" alt="">
        <img src="images/vert.png" alt="">
      </marquee>
    </div>
</header>
</body>
</html>