
<?php
session_start();
include 'connection.php';
if(@$_SESSION['login'] != 'oui'){
    $url = basename($_SERVER['PHP_SELF']);
    $query = $_SERVER['QUERY_STRING'];
    if($query){
        $url .= "?".$query;
        }
     $_SESSION['current_page'] = $url;
    header('Location: login.php');
}
foreach ($_POST as $key => $value) {
  ${$key} = $value;
}

$id=$_GET['id'];

@$id_cer = $_GET['id'];

$sql = 'SELECT *
        FROM Voyage
        WHERE `id-cer` = :id_cer';

$statement = $pdo->prepare($sql);
$statement->bindValue(':id_cer', $id_cer);
$statement->execute();

$Voyage = $statement->fetchAll(PDO::FETCH_ASSOC);

if(isset($confirmer)){
  if(!empty($email)&&!empty($phone)){
  $sql='INSERT INTO `reserver-voyage` ( `id-cer`, `id-cleint`, `email`, `phone`,  `date-reservartion`) 
    VALUES (?,?,?,?,CURRENT_TIMESTAMP)';
    $ins = $pdo->prepare($sql);
    $ins->execute([$id,$_SESSION['id_client'],$email, $phone]);
    if($ins){
      
      header('Location: index.php?success= Resevation envoyé avec succès!');
    }
    else{
      header("Location: index.php?error= Échec de poursuivre le processus!");
    }
  }
  else{
    header('Location: index.php?error=Échec de poursuivre le processus!');
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="resrrve.css">
    <script src='js/jsformodul.js' defer></script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
      
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="steylforhotelpagr.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserver Hotel</title>
    

</head>
<body>
    <div class="">
        <div class="top" id="">
            <nav class="navbar navbar-expand-lg container-fluid">
                <div class="logo">
                    <a href="index.php"><img src="img/logo.png" alt="" width="200px" height="70px"></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="bar_top_sec collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item"><a href="index.php">ACCUEIL</a></li>
                        <li class="nav-item"><a href="hotelpage.php">HOTELS</a></li>
                        <li class="nav-item"><a href="destinationpage.php">DESTINATION</a></li>
                        <li class="nav-item"><a href="moussempage.php">MOUSSEM</a></li>
                        <li class="nav-item"><a href="pagerestau.php">RESTAURANT</a></li>
                        <li class="nav-item"><a href="contact.php">CONTACT</a></li>
                        <li class="nav-item">
                            <?php
                            if (@$_SESSION['login'] != 'oui') {
                                echo "<a href='login.php' name=''>SE CONNECTER</a>";
                            } else {
                                echo '<a  onclick="openModal()" style="color: white">MON PROFFILE</a>';
                            }
                            ?>
                        </li>
                    </ul>
                </div>
                <div id="modalContainer" class="modal-container">
                        <!-- Modal content -->
                        <div class="modal-content">
                          <span class="close-button" onclick="closeModal()">&times;</span>
                          <a href="client.php" >INFORMATION</a>
                          <a href="deconection.php">DECONNECTER</a>
                        </div>
                      </div>
            </nav>
        </div>
       
        <div id="second2">
            <?php // include 'resehotel.html';?>
            
            <div class="all-page">
            
                <div class="hotel_des">
                    <div class="img_hotel">
                        <img src="<?php echo '../admin-ver/img/destinations/'.$Voyage[0]['img']; ?>" alt="" width="100%" height="100%">
                    </div>
                    <h4><?php echo $Voyage[0]['ville-depart']; ?> vers <?php echo $Voyage[0]['ville-arrive']; ?></h4>
                    <div class="hotel-name"><?php echo $Voyage[0]['dure']; ?></div>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="description"><?php echo $Voyage[0]['trajet']; ?></div>
                </div>
                <div class="reservehotel">
                <?php 
                  if(isset($_GET['error'])){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo$_GET['error']; ?>
                    </div>
                <?php } ?>
                    <h4>Personel Information</h4>
                    <div>
                        <form action="" class="" method="post">
                            <!-- <div class="information">
                                <div class="input-group mb-3 frst_name">
                                    <i class="bi bi-person-circle input-group-text"></i>
                                    <input type="text" class="form-control" name="name" placeholder='Enter votre nom'>
                                </div>
                                <div class="input-group mb-3 secd_name">
                                    <i class="bi bi-person-circle input-group-text"></i>
                                    <input type="text" class="form-control" name="scname" placeholder='Enter votre prenom'>
                                </div>
                            </div>
                             -->
                            <div class="information">
                                <div class="input-group mb-3 email_rese">
                                    <i class="bi bi-envelope-fill input-group-text"></i>
                                    <input type="email" class="form-control" name="email" placeholder='email'>
                                </div>
                                <div class="input-group mb-3 telephone_num">
                                    <i class="bi bi-telephone-fill input-group-text"></i>
                                    <input type="number" class="form-control" name="phone" placeholder='Enter votre telephone'>
                                </div>
                            </div>
                       

                    </div>
                    
                    
                    <div class="prix">
                        <span class="input-group-text" id='datefun' name='datefun'><?php echo  $Voyage[0]['prix'] ; ?> MAD</span>
                    </div>
                    <h4>Confirmer</h4>
                    <div class="confirmation_res">
                        <input type="submit" name="confirmer" value="Confirmer">
                        <button type="button" class="btn"><a href="">Cancel</a></button>
                    </div>
                </div>
            </div>
            </form>
        </div>
        <footer class="">
            <div class="bottom_footer">
                <span><i class="bi bi-c-circle"></i> <a href="">discoverdaraatafilalt.com</a> All right reserved</span>
            </div>
        </footer>
    </div>
</body>

</html>