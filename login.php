<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="s.css" />
</head>
<body>
<?php
require('config.php');
session_start();

if (isset($_POST['email'])){
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  $passe = stripslashes($_REQUEST['passe']);
  $passe = mysqli_real_escape_string($conn, $passe);
    $query = "SELECT * FROM `connecte` WHERE email='$email' and passe='".hash('sha256', $passe)."'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['email'] = $email;
      header("Location: index.php");
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>
<form class="box" action="" method="post" name="login">
<h1 class="box-logo box-title"><a href="">Site touristique</a></h1>
<h1 class="box-title">Connexion</h1>
<input type="email" class="box-input" name="email" placeholder="email">
<input type="password" class="box-input" name="passe" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>