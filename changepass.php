<?php 
include 'connection.php';
  @$clientId = $_GET['id'];

if (isset($_POST['changer'])) {
  
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if (!empty($pass1) && !empty($pass2)) {
        if ($pass1 === $pass2) {
            $pass1 = md5($pass1); // Use a more secure hashing algorithm instead of MD5

            $sql2 = 'UPDATE client SET `password`=:pass1 WHERE `id_client`=:clientId';
            $statement1 = $pdo->prepare($sql2);
            $statement1->execute([':pass1' => $pass1, ':clientId' => $clientId]);

            if ($statement1->execute()) {
                // Password updated successfully
                header('Location: login.php?success=mot de pass est changer');
                exit;
            } else {
                header("location:changepass.php?error=Erreur lors de la mise à jour du mot de passe!");
                exit;
            }
        } else {
            header("location:changepass.php?error=Les deux mots de passe ne correspondent pas!");
            exit;
        }
    } else {
        header("location:changepass.php?error=Veuillez entrer un mot de passe!");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password forget</title>
    <link rel="stylesheet" href="font/bootstrap-icons.min.css">
    <script type="text/javascript" src="jquery/jquery-3.6.3.min.js"></script>
    <script src="jquery.backstretch.min.js"></script>
    

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>

.first-forget{
    width: 40%;
    background-color: aquamarine;
    float: left;
    height: 635px;
}
.main-forget{
    height: 100%;
      

}


  
.secend-forget{
    width: 60%;
    height: 100%;
    float: right;
    position: relative;
}
.login_class>h4{
    position: absolute;
    top: 255px;
    left: 497px;
    font-size: small;
}
.login_class>form{
    width: 350px;
    margin-left: 250px;
    margin-top: 98px;
    position: relative;
}
#exampleInputname11,#exampleInputUsername11{
    width: 168px;
}
.username-input{
    position: absolute;
    top: 0px;
    left: 183px;
}
.login_class>form>div>label{
    font-weight: bold;
}
.form-control{
    background-color: rgb(216, 216, 216);
}
.first-forget>h3{
    color:rgb(56, 145, 145);
    margin-top: 111px;
    margin-left: 50px;
}
.bi-arrow-left{
    font-size: large;
    color: black;
    margin-top: 3px;
}
.btn-primary{
    margin-top: 5px;
    margin-bottom: 5px;
}
</style>
<body>
    
    <div class="main-forget">
        <div class="first-forget">
            <h3>Discover the world’s <br>
                DARAA TAFILALT
            </h3>
        </div>
        <div class="secend-forget">
            <div class="login_class">
                
                <form method="post">

                   <div id='secenff'>
                   <i class="bi bi-arrow-left"  onclick="goBack()"></i> <label for="exampleInputEmail1" class="form-label">Nouveau password</label>
                <input type="password" class="form-control" name="pass1" id="exampleInputEmail1" aria-describedby="emailHelp">
                <label for="exampleInputEmail1" class="form-label"> Re password</label>
                <input type="password" class="form-control" name="pass2" id="exampleInputEmail1" aria-describedby="emailHelp">
                <button type="submit" class="btn btn-primary" name='changer'>Envoyer</button>
                
  
    <?php 
                  if(isset($_GET['success'])){ ?>
                    <div class="alert alert-success" role="alert">
                      <?php echo$_GET['success']; ?>
                    </div>
                <?php } ?>
                <?php 
                  if(isset($_GET['error'])){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo$_GET['error']; ?>
                    </div>
                <?php } ?>
</div>


<?php

?>
                  

                </form>
                
            </div>
        </div>

    </div>

   
  <script>
    function goBack() {
      window.history.back();
    }
  </script>
</body>
</html>