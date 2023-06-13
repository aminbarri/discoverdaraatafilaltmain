
<?php
session_start();
include 'connection.php';
$url = basename($_SERVER['PHP_SELF']);
$query = $_SERVER['QUERY_STRING'];
if($query){
$url .= "?".$query;
}
$_SESSION['current_page'] = $url;
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
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="hotel.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
      
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="steylforhotelpagr.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='js/jsformodul.js' defer></script>
    <title>Contact</title>

<style>
          .mainborder{
            width: 300px;
             height: max-content;
            background-color: white;
            border-radius: 5px;
            position: relative;
        }
        .imageclass{
            width: 100%;
            height: 50%;
            background-image: url('');
            background-repeat: no-repeat;
            background-size: cover;
           
        }
        .htl{
          left:44%;
        }
        .divtext{
            text-align: center;
        }
        .divtext>h3{
            margin: 33px 10px 5px 10px;
            color: black;
           font-weight:bold;
        }

     .divtext>h5{
        font-weight: normal;
        color: rgba(0, 0, 0, 0.425);
        margin: 23px 10px 16px 10px;


     }
     .imageclass>img{
        width: 100%;
        height: 100%;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
     }
     .bottombar{
        height: 30px;
        background-color:rgb(214, 203, 182);
       
        bottom: 0px;
        width: 100%;
        text-align: center;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        padding-top: 5px;
     }
     .bottombar:hover{
        background-color: rgb(175, 160, 149);
     }
     .bottombar>a{
        text-decoration: none;
       color: black;
       font-weight: bold;
       
     }
     .countainer{
        height: 100vh;
     }
     
.modal-container {
  display: none; /* Hidden by default */
  position: fixed; /* Position it on top of other content */
  z-index: 1; /* Set a high z-index value to make it appear on top */
  border-radius: 8px;
  top:20%;
  right: 62px;
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(21, 117, 21); /* Black background with transparency */
}

/* Style for the modal content */
.modal-content {
  /* background-color: #fefefe; */
  margin: 15% auto; /* 15% from the top and centered horizontally */
  padding: 20px;
  /* border: 1px solid #888; */
 
}
.modal-content a{
  text-decoration: none;
  color: white;
}
.modal-content a:hover{
  text-decoration: none;
  color: rgb(155, 148, 148);
}


/* Style for the close button */
.close-button {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

/* Hover effect on the close button */
.close-button:hover,
.close-button:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
     
</style>
</head>
<body>
    
    <div class="countainer">
        <div class="top " id="">
           
         
       
            <nav class="navbar  navbar-expand-lg  container-fluid">
                <div class="logo"><a href="index.php"><img src="img/logo.png" alt="" width="200px" height="70px"></a></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              <div   class=" bar_top_sec collapse navbar-collapse"  id="navbarScroll">
                  <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" >
                   
                       <li class="nav-item"><a href="index.php">ACCUEIL</a></li>
                        <li class="nav-item"><a href="hotelpage.php">HOTELS</a></li>
                        <li class="nav-item"><a href="destinationpage.php">DESTINATION</a></li>
                        <li class="nav-item"><a href="moussempage.php">MOUSSEM</a></li>
                        <li class="nav-item"><a href="pagerestau.php">RESTAURANT</a></li>
                        <li class="nav-item"><a href="contact.php">CONTACT</a></li>
                    <li class="nav-item">
                      <?php
                      if(@$_SESSION['login']!= 'oui') {
                        echo "<a href='login.php' name=''>SE CONNECTER</a>";
                      }
                      else{
                        echo '<a  onclick="openModal()" style="color: white">MON PROFFILE</a>';
                      }
                      ?>
                    
                  
                  </li>
            
                  </ul>
           
              </div>  
              
            </nav><div id="modalContainer" class="modal-container">
                        <!-- Modal content -->
                        <div class="modal-content">
                          <span class="close-button" onclick="closeModal()">&times;</span>
                          <a href="client.php" >INFORMATION</a>
                          <a href="">DECONNECTER</a>
                        </div>
                      </div>
                    </div> 
        <div  id="second2" >
              
    <div class="sendmsg">
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
        <form action="" method="post">
            <div>
             <input type="text" name="name" placeholder="Votre Nom">
            </div>
            <div>
             <input type="email" name="email" placeholder="Votre Email">
            </div>
            <div>
             <input type="text" name="sujet" placeholder="Sujet">
            </div>
            <div>
             <textarea name="content" id="" placeholder="Votre Message"></textarea>
            </div>

            <div>
                <input type="submit" value="Envoyer" name='submit'>
            </div>
        </form>

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