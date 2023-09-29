
<?php
// phpinfo();
//    @$nom=$_POST["nom"];
//    @$prenom=$_POST["prenom"];
//    @$passe=$_POST["passe"];
//    @$email=$_POST["email"];
//    @$age=$_POST["age"];
//    @$valider=$_POST["valider"];
//    $erreur="";
//    $error="";
//    $er="";
//    $e="";
//    $em="";
//    if(isset($valider))
//    if(empty($nom)) $erreur =" <li> veuillez renseigner votre nom </li>";
//    if(isset($valider))
//    if(empty($prenom)) $error.=" <li> veuillez renseigner votre prenom </li>";
//    if(isset($valider))
//    if(!is_numeric($age)) $g="<li> veuillez renseigner votre age </li> ";
//    if(isset($valider))
//     if(empty($passe)) $e.=" <li>veuillez renseigner votre mot de passe  </li>";
//    if(isset($valider))
//   if(empty($email)) $em.=" <li>veuillez renseigner votre email </li>";

// else if((isset($valider))){
//     echo "nom: $nom <br>";
//     echo "prenom: $prenom <br>";
//     echo "passe: $passe <br>";
//     echo "email: $email <br>";
//     echo "age: $age <br>";
// }




// $prenom=$_POST["prenom"];
//   $passe=$_POST["passe"];
//   $email=$_POST["email"];

//   $nom=$_POST["nom"];


        
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="nav.css">
</head>
<body>



<div class="container">
  
    <div id="logbox">
    <?php
if(isset($_GET['login_err'])){
    $err = htmlspecialchars($_GET['login_err']);
    switch($err){
        case 'success';
        ?>
        <div class="alert">
            <strong>Erreur</strong>succes 
        </div>
        <?php
        break;
        case 'passe';
        ?>
        <div class="alert">
            <strong>Erreur</strong>mot de passe different
        </div>
        <?php
        break;
        case 'email';
        ?>
        <div class="alert">
            <strong>Erreur</strong>email non valide
        </div>
        <?php
        break;
        case 'email_length';
        ?>
        <div class="alert">
            <strong>Erreur</strong>email long
        </div>
        <?php
        break;
    }
}
?>


        <form method="post" action="form.php" name="fo">
      <h1>Create an account</h1>
         <input class="input" name="nom" type="text" placeholder="nom" value="">
        
         <input class="input" name="prenom" type="text" placeholder="prenom" value="">
         
         <input class="input" name="age" type="number" placeholder="age" value="">
        
        
         <input type="text" class="input" name="passe" placeholder="mot de passe" >
         
         <input class="input" name="email" type="email" placeholder="Email address (optional)" value="">
         
         <input class="input" type="submit" value="Sign me up!" name="valider">
        </form>
        
        </div>
       
    </div>
    <br><br><br>

<?php
// include("footer.php")   
?>
</body>
</html>