
<?php

include 'connection.php';

session_start();
$previous_page = $_SESSION['current_page'];
$_SESSION['login']= 'non';
$message="";
foreach ($_POST as $key => $value) {
    ${$key} = $value;
  }
  @$password = md5(@$password); // Encrypt the user input password with MD5
  
  $sql = 'SELECT *
          FROM client
          WHERE `email` = :email AND `password` = :password';
  
  $statement = $pdo->prepare($sql);
  $statement->bindValue(':email', @$email);
  $statement->bindValue(':password', @$password);
  $statement->execute();
  
  $loggin = $statement->fetchAll(PDO::FETCH_ASSOC);
  if (isset($valider)) {
    if (empty($email)) {
      $message .= 'Enter email!';
    }
  
    if (empty($password)) {
      $message .= 'Enter password!';
    }
  
 {
      if (@$email === @$loggin[0]['email'] && @$password === @$loggin[0]['password']) {
        $_SESSION['login'] = true;
        if(isset($_SERVER['HTTP_REFERER'])) {
          header("Location: $previous_page");
        } 

        exit; 
      } else {
        $message .= 'Wrong password or email!';
      }
    }
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="font/bootstrap-icons.min.css">
    <script type="text/javascript" src="jquery/jquery-3.6.3.min.js"></script>
    <script src="jquery.backstretch.min.js"></script>
    

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>

.first-signin{
    width: 40%;
    background-color: aquamarine;
    float: left;
    height: 635px;
}
.main-signin{
    height: 100%;
      

}


  
.secend-signin{
    width: 60%;
    height: 100%;
    float: right;
    position: relative;
}
.login_class>h4{
    position: absolute;
    top: 282px;
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
.first-signin>h3{
    color:rgb(56, 145, 145);
    margin-top: 111px;
    margin-left: 50px;
}
</style>
<body>
    
    <div class="main-signin">
        <div class="first-signin">
            <h3>Discover the world’s <br>
                DARAA TAFILALT
            </h3>
        </div>
        <div class="secend-signin">
              <h5>Not a member <a href="SingUp.php">Sing up now!</a></h5>
            <div class="login_class">
           
                
                <form method='post'> 
                    <?php 
                  if(isset($_GET['success'])){ ?>
                    <div class="alert alert-success" role="alert">
                      <?php echo$_GET['success']; ?>
                    </div>
                <?php } ?>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Username Or Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                      
                    </div>
    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"name="password">
                      </div>
    
                      <button type="submit" class="btn btn-primary"name='valider' >Sign In</button>
                    
                </form>
                 <h4><a href="forgetpass.php">forget password?</a></h4>
                 <?php 
                    echo $message;
                ?>

            </div>
        </div>

    </div>
</body>
</html>