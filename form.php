<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=site', 'root','',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}

catch (Exception $e){
    die("Error " . $e->getMessage());
}



if(isset($_POST['nom']) && isset($_POST['passe']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['age'])){


    $email = htmlspecialchars($_POST["email"]);
    $passe = htmlspecialchars($_POST["passe"]);
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $age = htmlspecialchars($_POST["age"]);


    $check = $bdd->prepare('SELECT email, passe FROM connecte WHERE email= ?');
    $check ->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 0){
            if(strlen($nom) <= 100 ) {
                
                if(strlen($email) <= 20) {

                    if(filter_var($email, 'FILTER_VALIDATE_EMAIL')) {
                        // $passe = hash('sha296', $passe);
                        if($passe == $passe) {
                            
                            // $ip = $_SERVER['REMOTE_ADDR'];
                            $insert = $bdd ->prepare('INSERT INTO connecte(nom, email, prenom, age, passe) VALUES (:nom, :prenom, :age, :email, :passe)');

                            $insert ->execute(array(
                                'nom' => $nom,
                                'email' => $email,
                                'prenom' => $prenom,
                                'age' => $age,
                                'passe' => $passe,
                                

                            ));
                            header ('Location: traitement.php?reg_err=success');

                        }else header ('Location: contact.php?reg_err=passe');
                        

                    }else header ('Location: contact.php?reg_err=email');
                }else header ('Location: contact.php?reg_err=email_length');
            }else header ('Location: contact.php?reg_err=nom_length');

    }
    else header('Location: contact.php?reg_err=already')







// $nom =$_POST["nom"];
// $prenom =$_POST["prenom"];
// $passe =$_POST["passe"];
// $age =$_POST["age"];
// $email =$_POST["email"];




// echo "nom: $nom <br>";
// echo "prenom: $prenom <br>";
// echo "passe: $passe <br>";
// echo "age: $age <br>";

// echo "passeword hash: $passeword";
// echo "email: $email <br>";

// $req = $bdd->prepare("INSERT INTO connecte (email, nom, age, passe, prenom) 
//                     VALUES(:email, :nom, :age, :passe, :prenom)");
//  pour  enregistrer--------------


// $req->execute([

//     "email" => $email,
//     "nom" => $nom,
//     "age" => $age,
//     "passe" =>$passe,
//     "prenom" =>$prenom,
    
    
//     ]);



    // header('Location: traitement.php'); 
}
?>