












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    

  <?php
  include("connexion.php")
  ?>


<?php
  include("nav.php")
  ?>



<!-- s1 -->
<section class="oua">
    <section class="ouaga">
    <?php

$reponse = $pdo->query("select * from section where id=1");
while($donnees = $reponse->fetch()){
?>
        <h1><?php echo $donnees["titre1"] ?></h1>
        <h3><?php echo $donnees["ville"] ?></h3>
        <p><?php echo $donnees["description"]?></p>
      <button><?php echo $donnees["contenu2"]?></button>
    </section>
    <?php
}
?>
    <section class="img">
    <?php

$reponse = $pdo->query("select * from img where id=4");
$mi = $reponse->fetch();
?>
<img src="images/<?php echo $mi["nom"]?>" alt="">
      <!-- <img src="images/oua.jpg" alt=""> -->
      
    </section>
    

</section>
<section class="bobo">
    <section class="bob">
    <?php

$reponse = $pdo->query("select * from section where id=2");
while($donnees = $reponse->fetch()){
?>
        <h2><?php echo $donnees["titre1"] ?> <span>*</span></h2>
        <h1><?php echo $donnees["ville"] ?></h1>
        <p><?php echo $donnees["description"]?></p>
        <button><?php echo $donnees["contenu2"]?></button>
    </section>
    <?php
}
?>
    <section class="bo">
    <?php


$req=$pdo->query("select * from img where id=3 ");
$ma=$req-> fetch();
?>  
<img src="images/<?php echo $ma["nom"] ?> " alt="">
 

    <!-- <img src="images/Bobo-Dioulasso.png" alt=""> -->
  </section>
 
</section><br><br>
   <section class="kou">
    <div class="ko">
    <?php

$reponse = $pdo->query("select * from section where id=3");
while($donnees = $reponse->fetch()){
?>
        <h1> <?php echo $donnees["ville"] ?></h1>
    <p><?php echo $donnees["description"]?> </p>
    <button><?php echo $donnees["contenu2"]?> </button>
    </div>
    <?php
}
?>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/kl.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/koo.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/kou.jpg" class="d-block w-100" alt="...">
          </div>
          <p class="lo">les merveilles</p>
        </div>
       
      </div>
      
   </section>
<br><br>

<?php
  include("footer.php")
  ?>

<br>

</body>
</html>