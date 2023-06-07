<?php
session_start();
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
      
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="steylforhotelpagr.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  
</head>
<body>
    
    <div class="countainer">
        <div class="top " id="">
           
         
        <div class="top-header">
            <nav class="navbar  navbar-expand-lg  container-fluid">
                <div class="logo"><a href=""><img src="img/logo.png" alt="" width="200px" height="70px"></a></div>
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
                        echo "<a href='deconection.php' name=''>DECONNECTER</a>";
                      }
                      ?>
                    
                    </li>
            
                  </ul>
           
              </div>  
            </nav>
            
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
        <div id="second" class='test'>
        <div class="center-bar">
        <div>
            
            <input type="text"  placeholder="Taper province..." id='province'>
       
           
        </div>
               
          
        </div> 
        <div  id="second2" >
             
           
        </div>
        <div  id="second3" >
        <div class="box-hotel"> 
                <img src="img/444.jpg" alt="" width="270px" height="150px"><span>MAD350</span>
                <div class="text">
                <div class="hotel-name">Gite Luna Del Fuego</div><div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            
                <div class="adress">kasr ifri, Achbaro</div>
                <div class="description">1-star hotel</div>
                </div>
                 <div class="dure"> <a href="#">RESERVER</a></div>
    
               </div>
        <div class="box-hotel"> 
                <img src="img/444.jpg" alt="" width="270px" height="150px"><span>MAD350</span>
                <div class="text">
                <div class="hotel-name">Gite Luna Del Fuego</div><div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            
                <div class="adress">kasr ifri, Achbaro</div>
                <div class="description">1-star hotel</div>
                </div>
                 <div class="dure"> <a href="#">RESERVER</a></div>
    
               </div>
        <div class="box-hotel"> 
                <img src="img/444.jpg" alt="" width="270px" height="150px"><span>MAD350</span>
                <div class="text">
                <div class="hotel-name">Gite Luna Del Fuego</div><div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            
                <div class="adress">kasr ifri, Achbaro</div>
                <div class="description">1-star hotel</div>
                </div>
                 <div class="dure"> <a href="#">RESERVER</a></div>
    
               </div>
        <div class="box-hotel"> 
                <img src="img/444.jpg" alt="" width="270px" height="150px"><span>MAD350</span>
                <div class="text">
                <div class="hotel-name">Gite Luna Del Fuego</div><div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            
                <div class="adress">kasr ifri, Achbaro</div>
                <div class="description">1-star hotel</div>
                </div>
                <div class="dure"> <a href="#">RESERVER</a></div>
    
               </div>
           
        </div>
        
   
            
        </div>
    <footer class="">
       
        <div class="bottom_footer">

                <span><i class="bi bi-c-circle"></i> <a href="">discoverdaraatafilalt.com</a> All right reserved</span>
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