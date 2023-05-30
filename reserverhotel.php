
<?php
session_start();
include 'connection.php';

foreach ($_POST as $key => $value) {
  ${$key} = $value;
}

if(isset($submit)){
  if(!empty($content)&&!empty($name)&&!empty($email)&&!empty($sujet)){
  $sql='INSERT INTO message ( `name`, `email`, `sujet`, `content`, `date_sending`) 
    VALUES (?,?,?,?,CURRENT_TIMESTAMP)';
    $ins = $pdo->prepare($sql);
    $ins->execute(array($name ,$email, $sujet,$content));
    if($ins){
      
      header('Location: contact.php?success= Message envoyé avec succès!');
    }
    else{
      header("Location: contact.php?error= Échec de l'envoi du message");
    }
  }
  else{
    header('Location: contact.php?error= Il y a un champ vide!');
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
  
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
      
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="steylforhotelpagr.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserver Hotel</title>
    

</head>
<body>
    
    <div class="countainer">
        <div class="top " id="">
           
         
       
            <nav class="navbar  navbar-expand-lg  container-fluid">
                <div class="logo"><a href=""><img src="img/logo.png" alt="" width="200px" height="70px"></a></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              <div   class=" bar_top_sec collapse navbar-collapse"  id="navbarScroll">
                  <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" >
                   
                    <li class="nav-item"><a href="#">ACCUEIL</a></li>
                    <li class="nav-item"><a href="#">HOTELS</a></li>
                    <li class="nav-item"><a href="#">DESTINATION</a></li>
                    <li class="nav-item"><a href="#">MOUSSEM</a></li>
                    <li class="nav-item"><a href="#">RESTURANT</a></li>
                    <li class="nav-item"><a href="contact.php">CONTACT</a></li>
                    <li class="nav-item">
                      <?php
                      if(@$_SESSION['login']!= 'oui') {
                        echo "<a href='login.php' name=''>SE CONNECTER</a>";
                      }
                      else{
                        echo "<a href='deconection.php' name=''>DECONNECTER</a>";
                      }
                      ?>
                    
                  
                  </li>
            
                  </ul>
           
              </div>  
            </nav>
                    </div> 
        <div  id="second2" >

        <?php // include'resehotel.html';?>

        
    <div class="all-page">
        <div class="hotel_des">
       <div class="img_hotel"><img src="img/3.jpg" alt="" width="100%" height="100%"></div> 
       <h4>Hôtel Palais du Désert & Spa</h4>
       <div class="hotel-name">Gite Luna Del Fuego</div><div class="rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
    </div>
    <div class="description"> </div>
   
    </div>
    
    <div class="reservehotel">
        <h4>Personel Information</h4>
        <div >
            <form action="" class="">
                <div class="information">
                     <div class="input-group mb-3 frst_name">
                    <i class="bi bi-person-circle input-group-text"></i>
                    <input type="text" class="form-control " placeholder='Enter votre nom'>
                </div>
                <div class="input-group mb-3 secd_name">
                    <i class="bi bi-person-circle input-group-text"></i>
                    <input type="text" class="form-control " placeholder='Enter votre prenom'>
                </div>
                </div>
               <div class="information">

                    <div class="input-group mb-3 email_rese">
                    <i class="bi bi-envelope-fill input-group-text"></i>
                <input type="email" class="form-control " placeholder='email'>
                </div>
                <div class="input-group mb-3 telephone_num">
                    <i class="bi bi-telephone-fill  input-group-text" ></i>
                    <input type="number" class="form-control " placeholder='Enter votre telephone'>
                </div>

               </div>
                
                

            </form>
        </div>
               <h4>Chamber</h4>
        <div class="chamber">
     
            <div class="type-chamber">
                <label for="">Type de chamber</label>
                <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                </select>
            </div>
            <div class="nomber-per">
                <label for="">Nomber of personne</label>
                <input type="number" class="form-control" placeholder="Nomber of personne">
            </div>
           
        </div>
        
        <h4>dure</h4>
        <div class="dure">
           
           <div>
            <label for="">Date debut</label>
            <input type="date" class="form-control">
           </div> 
           <div class="date-fin">
            <label for="">Date fin</label>
            <input type="date"  class="form-control">
           </div>
            
        </div><h4>Prix Total</h4>
        <div class="prix">
            
            <span class="input-group-text">Prix Total</span>
        </div>
    <h4>Confirmer</h4>
        <div class="confirmation_res">
        
            <button type="button" class="btn ">Confirmer</button>
            <button type="button" class="btn">Cancel</button>
        </div>

    </div>
    </div>
        </div>

        <footer class="">
       
       <div class="bottom_footer">

               <span><i class="bi bi-c-circle"></i> <a href="">discoverdaraatafilalt.com</a> All right reserved</span>
       </div>
       
   </footer>
    </div>        
    

   
</div>
   </div>
</body>
</html>