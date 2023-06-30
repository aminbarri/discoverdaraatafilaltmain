<?php 
session_start();
include 'connection.php';

$previous_page = $_SESSION['current_page'];





$message2 = '';

if (isset($_POST['submit'])) {
    foreach ($_POST as $key => $value) {
        ${$key} = $value;
    }

    $sql = 'SELECT * FROM client WHERE email = :email';
    $statement1 = $pdo->prepare($sql);
    $statement1->bindParam(':email', $email);
    $statement1->execute();
    $existingUser = $statement1->fetch(PDO::FETCH_ASSOC);
if(isset($flexCheckChecked)){
    if (!$existingUser) {

        $sql = 'INSERT INTO client (nom, prenom, email, password, `date-adding`) VALUES (?, ?, ?, ?, CURRENT_TIMESTAMP)';
        $statement = $pdo->prepare($sql);
        $hashedPassword = md5($password);
        $statement->execute([$name, $username, $email, $hashedPassword]);

        if ($statement) {
            if(isset($_SERVER['HTTP_REFERER'])) {
                header("Location: $previous_page");
              } 
      
            exit;
        }
    } else {
        $message2 .= 'Email already exists!';
    }}
    else{
        $message2  .= 'agrer terms';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing Up</title>
    <link rel="stylesheet" href="font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="singup.css">
    <script type="text/javascript" src="jquery/jquery-3.6.3.min.js"></script>
    <script src="jquery.backstretch.min.js"></script>
    

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>

</style>
<body>
    
    <div class="main-signup">
        <div class="first-singup">
            <h3>Découvrez le monde de<br>
                DARAA TAFILALT
            </h3>
        </div>
        <div class="secend-singup">
      
            <h4>Déjà membre ? <a href="login.php">Connectez-vous maintenant !</a></h4>
            
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            
                <div class="mb-3">
                  <label for="exampleInputname11" class="form-label">Nom</label>
                  <input type="text" class="form-control" id="exampleInputname11" name="name">
                </div>
                <div class="mb-3 username-input">
                    <label for="exampleInputname11" class="form-label">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="exampleInputUsername11" name="username">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                    <?php if(isset($_GET['eamil'])){?>
                    <input type="email" value="<?php echo $_GET['eamil'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email'>
                    <?php }else{?>
                         <input type="email" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email'>
                   
                  <?php  }?>
                  </div>
  
                   <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name='password'>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="flexCheckChecked" >
                        <span class="form-check-label" for="flexCheckChecked">
                        Créer un compte signifie que vous acceptez nos Conditions d'utilisation et notre Politique de confidentialité.
                        </span>
                      </div>

                      <button type="submit" name="submit" class="btn btn-primary">Créer un compte</button>
                    
            </form>  
            <?php if(!empty($message2)){?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $message2; ?>
                    </div>
                    <?php }?>
            
        </div>

    </div>
</body>
</html>