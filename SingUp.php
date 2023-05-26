<?php 
include 'connection.php';







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

    if (!$existingUser) {
        $sql = 'INSERT INTO client (nom, prenom, email, password, `date-adding`) VALUES (?, ?, ?, ?, CURRENT_TIMESTAMP)';
        $statement = $pdo->prepare($sql);
        $hashedPassword = md5($password);
        $statement->execute([$name, $username, $email, $hashedPassword]);

        if ($statement) {
            header('location: login.html');
            exit;
        }
    } else {
        $message2 = 'Email already exists!';
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
            <h3>Discover the world’s <br>
                DARAA TAFILALT
            </h3>
        </div>
        <div class="secend-singup">
            <h4>Aready a member? <a href="loggin2.html">Sing in now!</a></h4>

            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="exampleInputname11" class="form-label">Name</label>
                  <input type="text" class="form-control" id="exampleInputname11" name="name">
                </div>
                <div class="mb-3 username-input">
                    <label for="exampleInputname11" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputUsername11" name="username">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email'>
                    
                  </div>
  
                   <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name='password'>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="flexCheckChecked" >
                        <span class="form-check-label" for="flexCheckChecked">
                            Creating an account means you’re okay with our Terms of Service, Privacy Policy.
                        </span>
                      </div>

                      <button type="submit" name="submit" class="btn btn-primary">Create account</button>
                    
            </form>  
            <?php echo $message2 ; ?>

            
        </div>

    </div>
</body>
</html>