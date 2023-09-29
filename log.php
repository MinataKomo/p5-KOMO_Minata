<?php
 session_start();
try{
    $bdd = new PDO('mysql:host=localhost;dbname=site', 'root','',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}

catch (Exception $e){
    die("Error " . $e->getMessage());
}
if(isset($_POST['email']) && isset($_POST['passe'])){


     $email = htmlspecialchars($_POST["email"]);
     $passe = htmlspecialchars($_POST["passe"]);


     $check = $bdd->prepare('SELECT email, passe FROM connecte WHERE email= ?');
     $check ->execute(array($email));
    //  $data = $check->fetch();
     $row = $check->rowCount();


     if($row == 1){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // $passe = hash('sha296', $passe);
             if($data['passe'] === $passe){

            //  $_SESSION['user'] = $data['pseudo']




            header('Location: index.php?login_err=passe');

            } 
        }
        else header('Location: traitement.php?login_err=email');
     }else header('Location: traitement.php?login_err=already');
}else header('Location: traitement.php');

// $connexion = new mysqli("localhost", "root", "", "site");

// $email = $_POST["email"];
// $passe = $_POST["passe"];







// @$email=$_POST["email"];

// @$valider=$_POST["valider"];

// $erreur="";

// if(isset($valider))
//    if(empty($email)) $erreur=" <li> veuillez renseigner votre prenom </li>";

   







// $query = "SELECT * FROM connecte WHERE email = ? and passe = ?";
// $stmt = $connexion->prepare($query);
// $stmt ->bind_param(" " , $email);
// $stmt ->execute();
// $result = $stmt->get_result();

// if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         $hashedpasse = $row["passe"];


//         if(password_verify($passe, $hashedpasse)){
//             $_SESSION['passe'] = $passe;
//             header("Location: bobo.php");
//             exit();
//         }else{
//             $_SESSION['messageErreur'] = "mot de passe incorrect veillez reessayer";
//             header('Location: traitement.php');
//             exit();
//         }
      
        
// }else{
//         $_SESSION['messageErreur'] = "Aucun utilisateur trouver avec ce mot de passe";
//         header('Location: traitement.php');
//         exit();
// }







?>