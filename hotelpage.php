<?php
ob_start();
session_start();
include 'connection.php';

$url = basename($_SERVER['PHP_SELF']);
$query = $_SERVER['QUERY_STRING'];
if($query){
$url .= "?".$query;
}
$_SESSION['current_page'] = $url;

@$id=$_GET['id'];
$slectHotle="select * from hotel ";
$slectHotle = $pdo->prepare($slectHotle);


$slectHotle->execute();
$hotel  = $slectHotle->fetchAll(PDO::FETCH_ASSOC);


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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
      
    <link rel="stylesheet" href="style.css">
  
    
    <script src='js/jsformodul.js' defer></script>
    <link rel="stylesheet" href="steylforhotelpagr.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  <style>
   html, body {
  height: 100%;
  margin: 0;
}
.top-header {
  background-image: url('img/merzouga.jpg');
}

.container {
  display: flex;
  flex-direction: column;
  min-height: 100%;
}

main {
  flex: 1;
}



  </style>
</head>
<body>
    
<div class="countainer">
  <div class="top" id="">
    <div class="top-header">
      <nav class="navbar  navbar-expand-lg  container-fluid">
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
      </nav>
      <div id="modalContainer" class="modal-container">
        <!-- Modal content -->
        <div class="modal-content">
          <span class="close-button" onclick="closeModal()">&times;</span>
          <a href="client.php">INFORMATION</a>
          <a href="deconection.php">DECONNECTER</a>
        </div>
      </div>
      <center>
        <div class='h'>
          <div class="htl">HOTELS</div>
          <div class="hot">discover les meilleurs hotels de la region DRAA TAFILALET</div>
          <div class="der">
            <a href="#second">
              <i class="bi bi-arrow-down-square"></i>
            </a>
          </div>
        </div>
      </center>
    </div>
  </div>
  <div id="second" class='test'>
    <?php if (isset($_GET['id'])) { 
      @$id=$_GET['id'];
      $slectHotle="select * from hotel where `id-hotel`=:id";
      $slectHotle = $pdo->prepare($slectHotle);
      
      $slectHotle->bindValue(':id', $id);
      $slectHotle->execute();
      $slectHotle = $slectHotle->fetchAll(PDO::FETCH_ASSOC);
      $i = 0;
      $sql88 = 'SELECT * FROM `hotel` WHERE ville LIKE :ville';
      $statement88 = $pdo->prepare($sql88);
      $ville = '%' . $slectHotle[0]['ville'] . '%'; // Assuming 'ville' is a parameter from the GET request
      $statement88->bindParam(':ville', $ville);
      $statement88->execute();
      $hotel2 = $statement88->fetchAll(PDO::FETCH_ASSOC);


      $sql89 = 'SELECT * FROM `restau` WHERE ville LIKE :ville';
      $statement89 = $pdo->prepare($sql89);
      $ville = '%' . $slectHotle[0]['ville'] . '%'; // Assuming 'ville' is a parameter from the GET request
      $statement89->bindParam(':ville', $ville);
      $statement89->execute();
      $restau = $statement89->fetchAll(PDO::FETCH_ASSOC);

      ?>
      <div class="article_sec">
        <div class="first-seccc">
            <div class="left-section">
                <div class="main-article">
                    <!-- Content for the main article -->
                    <h2><?php echo $slectHotle[0]['nom']; ?></h2>
                    <img src="<?php echo '../admin-ver/img/hotels/'.$slectHotle[0]['img1']; ?>" alt="Slide Image" class="imgarticle">
                    

                    <img src="<?php echo '../admin-ver/img/hotels/'.$slectHotle[0]['img2']; ?>" alt="Slide Image" class="imgarticle">
                   
                    <img src="<?php echo '../admin-ver/img/hotels/'.$slectHotle[0]['img3']; ?>" alt="Slide Image" class="imgarticle">
                   

                    <!-- <p><?php echo $slectHotle[0]['ville']; ?></p> -->

                    <?php echo $slectHotle[0]['carte']; ?>
                    <div class='reserver_btn'><a href="reserverhotel.php?id=<?php echo $slectHotle[0]['id-hotel']; ?>">RESERVER</a></div>
                 </div>
            </div>

            <div class="other-articles">
                <!-- Content for the other articles -->
                <p class="parag1">Hotels dans la même ville</p>
                <?php  $j=0;foreach ($hotel2 as $hote1){ ?>
                <div class="article-card" onclick="location.href=' hotelpage.php?id=<?php echo $hote1['id-hotel']; ?>#second' ">
                    <!-- Content for the first article card -->
                    <h5><?php echo $hote1['nom']; ?></h5>
                    <img src="<?php echo '../admin-ver/img/hotels/' . $hote1['img1']; ?>" alt="Article 1 Image" width="60px" height="50px">
                    
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
                    <h5><?php echo $hote1['nom']; ?></h5>
                    <img src="<?php echo '../admin-ver/img/restau/' . $hote1['img1']; ?>" alt="Article 1 Image" width="100%" height="50%">
                    
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
          <input type="text" placeholder="Taper province..." id='province'>
        </div>
      </div>
      <div id="second2">
      </div>
      <div id="second3">
        <?php
       $i=0;
        foreach ($hotel as $hote1) {
        ?>
          <div class="swiper-slide box-hotel">
            <img src="<?php echo '../admin-ver/img/hotels/' . $hote1['img1']; ?>" alt="" width="270px" height="150px">
            <span>MAD<?php echo $hote1['prix']; ?></span>
            <div class="text">
              <div class="hotel-name"><?php echo $hote1['nom']; ?></div>
              <div class="rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <div class="adress"><?php echo $hote1['ville']; ?></div>
              <div class="description"><?php echo $hote1['classe']; ?>-star hotel</div>
            </div>
            <div class="dure">
            <a href="hotelpage.php?id=<?php echo $hote1['id-hotel']; ?>#second">RESERVER</a>
            </div>
          </div>
          <?php
          $i++;
          if ($i > 15) {
            break;
          }
        }
        ?>
      </div>
    <?php } ?>
  </div>
  <footer class="">
    <div class="bottom_footer">
      <span><i class="bi bi-c-circle"></i> <a href="">discoverdaraatafilalt.com</a> All right reserved</span>
    </div>
  </footer>
</div>
</div>

    

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
    var provinceValue = $('#province').val(); // Get the value of the input field
    if (provinceValue.trim() === '') {
      $("#second3").show();
      $("#second2").hide();
      $('.test').css({
            "height":"100vh"
          });
      return; // Exit the function if the value is empty
    }
    
    $.ajax({
      method: 'GET',
      url: 'selecthotel.php',
      data: {
        province1: provinceValue
      },
      beforeSend: function() {
        $('.test').css({
            "height":"100vh"
            
          });
          $('#second').css({
           
               
          });
        $("#second3").hide();
        $("#second2").hide();
        // Actions to be performed before the AJAX request is sent
      },
      success: function(data) {
        if (data.trim() === '') {
          $("#second3").show().text("No results found.");
          $('.test').css({
            "height":"100vh"
            
          });
          $("#second2").hide();
        } else {
          $('#second2').html(data);
          $('.test').css({
            "height":"max-content",
            "padding-bottom":"200px"
          });
          $("#second3").hide();
          $("#second2").show();
        }
      }
    });
  });
});

</script>
</body>
</html>