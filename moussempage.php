<?php
session_start();
include 'connection.php';
$url = basename($_SERVER['PHP_SELF']);
$query = $_SERVER['QUERY_STRING'];
if($query){
$url .= "?".$query;
}
$_SESSION['current_page'] = $url;
$sql3 ='SELECT * FROM `moussem`';
$statement3 = $pdo->prepare($sql3);
$statement3->execute();
$moussem = $statement3->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="hotel.css">
    <link rel="stylesheet" href="page-affiche.css">
    <link rel="stylesheet" href="cardread.css" defer>
    
    <script src='js/jsformodul.js' defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
      
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="steylforhotelpagr.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moussems</title>

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
     .top-header{
      background-image: url('img/moussem.jpeg');
     }
</style>
</head>
<body>
    
    <div class="countainer">
        <div class="top " id="">
           
         
        <div class="top-header">
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
              <div id="modalContainer" class="modal-container">
                        <!-- Modal content -->
                        <div class="modal-content">
                          <span class="close-button" onclick="closeModal()">&times;</span>
                          <a href="client.php" >INFORMATION</a>
                          <a href="deconection.php">DECONNECTER</a>
                        </div>
                      </div>  
            </nav>
            <div class="h">
                <center>
                    <div>
                        <div class="htl">MOUSSEMS</div>
                        <div class="hot">discover les meilleurs moussems de la region DRAA TAFILALET</div>
                  
                    <div class="der">
                     <a href="#second">
                    <i class="bi bi-arrow-down-square"></i>
                
                        </div></a>
                    </div>
                </center>

                        </div>
        </div>
       
        <div id="second">
        <?php if (isset($_GET['id'])) { 
      @$id=$_GET['id'];
      $selectmouss="select * from moussem where `id-mous`=:id";
      $selectmouss = $pdo->prepare($selectmouss);
      
      $selectmouss->bindValue(':id', $id);
      $selectmouss->execute();
      $selectmouss = $selectmouss->fetchAll(PDO::FETCH_ASSOC);
      $i = 0;
      $sql88 = 'SELECT * FROM `moussem` WHERE ville LIKE :ville';
      $statement88 = $pdo->prepare($sql88);
      $ville = '%' . $selectmouss[0]['ville'] . '%'; // Assuming 'ville' is a parameter from the GET request
      $statement88->bindParam(':ville', $ville);
      $statement88->execute();
      $hotel2 = $statement88->fetchAll(PDO::FETCH_ASSOC);


      $sql89 = 'SELECT * FROM `restau` WHERE ville LIKE :ville';
      $statement89 = $pdo->prepare($sql89);
      $ville = '%' . $selectmouss[0]['ville'] . '%'; // Assuming 'ville' is a parameter from the GET request
      $statement89->bindParam(':ville', $ville);
      $statement89->execute();
      $restau = $statement89->fetchAll(PDO::FETCH_ASSOC);

      ?>
      <div class="article_sec">
        <div class="first-seccc">
            <div class="left-section">
                <div class="main-article">
                    <!-- Content for the main article -->
                    <h2><?php echo $selectmouss[0]['nom']; ?></h2>
                    <img src="<?php echo '../admin-ver/img/moussem/'.$selectmouss[0]['img1']; ?>" alt="Slide Image" class="imgarticle">
                    <p>Date de début: <?php echo $selectmouss[0]['date-debut']; ?></p>
                    <p>Date de fin: <?php echo $selectmouss[0]['date-fin']; ?></p>
                    <div> <?php echo $selectmouss[0]['description']; ?></div>
                    <img src="<?php echo '../admin-ver/img/moussem/'.$selectmouss[0]['img2']; ?>" alt="Slide Image" class="imgarticle">
                   
                    <img src="<?php echo '../admin-ver/img/moussem/'.$selectmouss[0]['img3']; ?>" alt="Slide Image" class="imgarticle">
                   
                    

                    <?php echo $selectmouss[0]['location']; ?>
                 </div>
            </div>

            <div class="other-articles">
                <!-- Content for the other articles -->
                <p class="parag1">Distinations dans la même ville</p>
                <?php  $j=0;foreach ($hotel2 as $hote1){ ?>
                <div class="article-card" onclick="location.href=' moussempage.php?id=<?php echo $hote1['id-mous']; ?>#second' ">
                    <!-- Content for the first article card -->
                    <h3><?php echo $hote1['nom']; ?></h3>
                    <img src="<?php echo '../admin-ver/img/moussem/' . $hote1['img1']; ?>" alt="Article 1 Image" width="60px" height="50px">
                    
                </div>
                 <?php $j++;
                if($j>8){
                  break;
                } } ?>
                

                <!-- Add more article cards for other articles -->
            </div>
        </div>
        <p class="parag1">Restarants dans la même ville</p>
        <div class="bottom-section">
        
        <?php  $j=0;foreach ($restau as $hote1){ ?>
                <div class="article-card" onclick="location.href=' pagerestau.php?id=<?php echo $hote1['id-rest']; ?>#second' ">
                    <!-- Content for the first article card -->
                    <h3><?php echo $hote1['nom']; ?></h3>
                    <img src="<?php echo '../admin-ver/img/restau/' . $hote1['img1']; ?>" alt="Article 1 Image" width="60px" height="50px">
                    
                </div>
                 <?php $j++;
                if($j>8){
                  break;
                } } ?>
            

            <!-- Add more article cards for the bottom section -->
        </div>
        <p class="parag1">Hotels dans la même ville</p>
        <div class="bottom-section">
        
        <?php  
        
        $sql88 = 'SELECT * FROM `hotel` WHERE ville LIKE :ville';
      $statement88 = $pdo->prepare($sql88);
      $ville = '%' . $selectmouss[0]['ville'] . '%'; // Assuming 'ville' is a parameter from the GET request
      $statement88->bindParam(':ville', $ville);
      $statement88->execute();
      $hotel2 = $statement88->fetchAll(PDO::FETCH_ASSOC);

        $j=0;foreach ($hotel2 as $hote1){ ?>
                <div class="article-card" onclick="location.href=' hotelpage.php?id=<?php echo $hote1['id-hotel']; ?>#second' ">
                    <!-- Content for the first article card -->
                    <h3><?php echo $hote1['nom']; ?></h3>
                    <img src="<?php echo '../admin-ver/img/hotels/' . $hote1['img1']; ?>" alt="Article 1 Image" width="60px" height="50px">
                    
                </div>
                 <?php $j++;
                if($j>8){
                  break;
                } } ?>
            

            <!-- Add more article cards for the bottom section -->
        </div>
        
    </div>
    <?php } else { ?>
        <div class="center-bar">
        <div>
            
            <input type="text"  placeholder="Taper province..." id='province'>
       
           
        </div>
               
          
        </div> 
        <div  id="second2" >
             
           
        </div>
        <div  id="second3" >
        <?php $i=0;
               foreach($moussem as $dest) {?>
                <div class=" carteread">
                 <img src="<?php echo '../admin-ver/img/moussem/'.$dest['img1'] ?>" alt="" width="270px" height="150px">
                 <h3><?php echo$dest['nom'] ?></h3>
                 <p><?php echo$dest['ville'] ?></p>
                
                
                 
                 <a href="moussempage.php?id=<?php echo$dest['id-mous'] ?>#second">En savoir plus...</a>
                </div>
                <?php if($i>8){
                  break;
                } }?>
 
       </div>
        </div>
        
        </div>
        
    </div>
    <?php } ?>
    <footer class="">
       
        <div class="bottom_footer">

                <span><i class="bi bi-c-circle"></i> <a href="index.php">discoverdaraatafilalt.com</a> All right reserved</span>
        </div>
        
    </footer>

    <script>
        // document.addEventListener("DOMContentLoaded", function() {
        //   var navbarToggle = document.querySelector(".navbar-toggler");
        //   var navbarCollapse = document.querySelector(".bar_top_sec");
      
        //   navbarToggle.addEventListener("click", function() {
        //     navbarCollapse.classList.toggle("show");
        //   });
        // });

      </script>
      <script type="text/javascript">
   $(document).ready(function() {
  $('#province').keyup(function() { // Listen for keyup event on the input field
    $.ajax({
      method: 'GET',
      url: 'select_moussem.php',
      data: {
        province1: $('#province').val()
      },
      beforeSend: function() {
        $("#second3").show();
          $("#second2").hide();
        // Actions to be performed before the AJAX request is sent
      },
      success: function(data) {
        if (data.length === 0) {
          // Display a message when no results are found
          $('#second2').html('<div class="noresfind"><p>No results found.</p><div>');
        } else {
          // Display the results
          $('#second2').html(data);
        }
        $("#second3").hide();
        $("#second2").show();
      }
    });
  });
});

</script>
</body>
</html>