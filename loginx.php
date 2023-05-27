
<?php



session_start();
$_SESSION['login']= 'non';
foreach ($_POST as $key => $value) {
  ${$key }=$value;
}
if(isset($valider)){

  if($email=='user@test.com' && $password==1234){
    $_SESSION['login']= 'oui';
    header('Location:destinationpage.php');
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font/bootstrap-icons.min.css">
    <script type="text/javascript" src="jquery/jquery-3.6.3.min.js"></script>
    <script src="jquery.backstretch.min.js"></script>
    

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login </title>
    <style>

.pagelogin{
    width: 800px;
    height: 500px;
    position: relative;
    border: 1px solid rgb(0, 174, 255);
    border-radius: 5px;
    left: 311px;
    top: 66px;
  
}
.login_class{
    width: 500px;
    height: 100%;   
     
    padding: 25px;
    position: absolute;
    left: 300px;
    padding: 70px;
}
.first_bar{
    position: absolute;
    width: 300px;
    height: 500px;
    background-image: url('img/midlt.jpg');
    background-repeat: none;
}
.login_class>h4{
    position: absolute;
    top: 11px;
    left: 267px;
    font-size: medium;
}
    </style>
</head>
<body>

    <div class="pagelogin">

        <div class="first_bar">

        </div>
        <div class="login_class">
            <h4>Not a member <a href="">Sing up now!</a></h4>
            <form method='post'>
            <?php 
                if($_GET['success']){?>
                    <div class="alert alert-success" role="alert">
                    <?php echo$_GET['success']; ?>
                  </div>
                <?php }?>
                ?>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Username Or Email address</label>
                  <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                  
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                  </div>

                  <button type="submit" class="btn btn-primary" name='valider'>Sign In</button>

            </form> 
            <div><a href="">forget password?</a></div>  
        </div>
    </div>
    
</body>
</html>