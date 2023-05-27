
<?php
include 'connection.php';
$meass = '';
foreach ($_POST as $key => $value) {
    ${$key} = $value;
}

if (isset($_POST['submit'])) {
    $sql = 'SELECT * FROM client WHERE email=:email';
    $statement = $pdo->prepare($sql);
    $statement->execute([':email' => $email]);
    $publishers = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    $id =$publishers[0]['id_client'];
    if ($statement->rowCount() > 0) {
        header("Location: changepass.php?id=$id");
        exit;
    } else {
        header("Location: forgetpass.php?error=Invalid email");
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
                   <div id='first'>
                     <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"><i class="bi bi-arrow-left"  onclick="goBack()"></i>  address</label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                      
                    </div>
    
                  
                    <input type="hidden" name="hidd" value='<?php echo $publishers[0]['id_client'] ; ?>'>
                      <button type="submit" class="btn btn-primary" name='submit'>Envoyer</button>
                    
                    
                <?php 
                  if(isset($_GET['error'])){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo$_GET['error']; ?>
                    </div>
                <?php } 
                ob_end_flush();?>
                   </div>
                 
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