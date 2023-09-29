

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="traite.css">
</head>
<body>
   
    <section>
        <!-- <div><img src="images/flani.jpg" alt=""></div> -->
        <div>

        <?php
        if(isset($_GET['login_err'])){
            $err = htmlspecialchars($_GET['login_err']);
            switch($err){
                case 'passe';
                ?>
                <div class="alert">
                    <strong>Erreur</strong>mot de passe incorect
                </div>
                <?php
                break;
                case 'email';
                ?>
                <div class="alert">
                    <strong>Erreur</strong>email incorect
                </div>
                <?php
                break;
                
            }
        }
        ?>
            <form action="log.php" method="post"><br><br>
                <input class="input" type="text" placeholder="email" name="email"><br>
                <?php if(!empty($erreur)){ ?>
        <div id="i"><?php echo $erreur ?></div>
        <?php  } ?><br><br><br>
                <input class="input" type="text" placeholder="mot de passe" name="passe"><br><br><br><br>
                <input class="ip" type="submit" value="se connecter" name="valider">
            
            </form>

        </div>
    </section>

    
</body>
</html>