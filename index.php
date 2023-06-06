
<?php
session_start();
$url = basename($_SERVER['PHP_SELF']);
$query = $_SERVER['QUERY_STRING'];
if($query){
$url .= "?".$query;
}
$_SESSION['current_page'] = $url;
@$serch= $_GET["search_btn"];
if(isset($_GET['submit_ser'])){
  header('Location: search.php?value='.$serch.'');
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
    <link rel="stylesheet" href="style.css" defer>
    <link rel="stylesheet" href="cssjs.css" defer>
    <link rel="stylesheet" href="css/swiper-bundle.min.css" defer>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="hotel.css" defer>
    <link rel="stylesheet" href="resrvastion.css" defer>

    <link rel="stylesheet" href="footer.css" defer>
    
    <script type="text/javascript" src="Supersized/theme/supersized.shutter.min.js"></script>
    <script type="text/javascript" src="Supersized/js/jquery.easing.min.js"></script>

<style>
  .swiper-wrapper{
    
  }
</style>
</head>
<body>



    <div class="top_containner">


      <div class="top " id="backstretch" >
        <div class="bar_top_first ">

            <ul class=" ">
              <li class="social_media "><a href=""><i class="bi bi-facebook"></i></a></li>
              <li class="social_media "><a href=""><i class="bi bi-instagram"></i></a></li>
              <li class="social_media "><a href=""><i class="bi bi-youtube"></i></a></li>
              <li><div class="search-container">
                <form action="" method="get">
                 <input type="text" name='search_btn' placeholder="Search...">
                <button type="submit" name="submit_ser" class='search_btn'><i class="bi bi-search"></i></button></div>
             </form> 
             </li>
            </ul>
        </div>
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
                    <li class="nav-item"><a href="#">CONTACT</a></li>
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
          
        <div class="pre_paragraf">
          <div class="welcome">Bienvenue À <span>Daraa-Tafilalet</span></div>
          <div class="region">La Région Que Le Temps A Oubliée</div>
          <div>
          <i class="bi bi-caret-left-fill" id="nextBtn" role="buttonn"></i><i class="bi bi-caret-right-fill" id="prevBtn" role="buttonn"></i>
          </div>

        </div>
      </div>
      <header>
       <?php include 'htmljs.html'; ?>

       <div class='hotel-see'>
       
       <div class="hotel_sec">
         <div class='toptext'>
         <div class="frsttoptext">Le Plus Populaire <span>HOTLES</span></div>
          <div class="sectoptext" >Familles,Couples, Accros Du Travail, Aventuriers, Trouvez Votre Propre Coin</div>
          </div>
          <div class='swiper '>
          
           <i class="bi bi-arrow-left-circle-fill swiper-button-nextt1 swiper-button-nextt swapp"></i>
           <div class='second-hotel hotel-swipper1'>
          
            <div class='swiper-wrapper'>
            
                <div class="swiper-slide box-hotel">
              <img src="img/3.jpg" alt="" width="270px" height="150px"><span>MAD350</span>
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
                <div class="dure"><span>Duration</span> :6 hours <a href="#">...</a></div>
                </div>
                <div class="swiper-slide box-hotel">
                  <img src="img/3.jpg" alt="" width="270px" height="150px"><span>MAD350</span>
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
                  <div class="dure"><span>Duration</span> :6 hours <a href="#">...</a></div>
                    </div>

                <div class="swiper-slide box-hotel">
                          <img src="img/3.jpg" alt="" width="270px" height="150px"><span>MAD350</span>
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
                          <div class="dure"><span>Duration</span> :6 hours <a href="#">...</a></div>
                            </div>
                <div class="swiper-slide box-hotel">
                  <img src="img/3.jpg" alt="" width="270px" height="150px"><span>MAD350</span>
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
                  <div class="dure"><span>Duration</span> :6 hours <a href="#">...</a></div>
                    </div>

            </div>
            
          
            <!-- <div class="swiper-pagination"></div> -->
           </div>
           <i class="bi bi-arrow-right-circle-fill swiper-button-prevv1 swiper-button-prevv swapp"></i>
          </div>
       </div>


       </div>
       <div class='hotel-see'>
       
       <div class="hotel_sec">
         <div class='toptext'>
          <div class="frsttoptext">Le Plus Populaire <span>DESTINATION</span></div>
          <div class="sectoptext" >Familles,Couples, Accros Du Travail, Aventuriers, Trouvez Votre Propre Coin</div>
          </div>
          <div class='swiper '>
          
           <i class="bi bi-arrow-left-circle-fill swiper-button-nextt swiper-button-nextt2 swapp"></i>
           <div class='second-hotel hotel-swipper2'>
          
            <div class='swiper-wrapper'>
            
                <div class="swiper-slide box-hotel">
              <img src="img/3.jpg" alt="" width="270px" height="150px"><span>MAD350</span>
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
                <div class="dure"><span>Duration</span> :6 hours <a href="#">...</a></div>
                </div>
                <div class="swiper-slide box-hotel">
                  <img src="img/3.jpg" alt="" width="270px" height="150px"><span>MAD350</span>
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
                  <div class="dure"><span>Duration</span> :6 hours <a href="#">...</a></div>
                    </div>

                <div class="swiper-slide box-hotel">
                          <img src="img/3.jpg" alt="" width="270px" height="150px"><span>MAD350</span>
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
                          <div class="dure"><span>Duration</span> :6 hours <a href="#">...</a></div>
                            </div>
                <div class="swiper-slide box-hotel">
                  <img src="img/3.jpg" alt="" width="270px" height="150px"><span>MAD350</span>
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
                  <div class="dure"><span>Duration</span> :6 hours <a href="#">...</a></div>
                    </div>

            </div>
            
          
            <!-- <div class="swiper-pagination"></div> -->
           </div>
           <i class="bi bi-arrow-right-circle-fill swiper-button-prevv swiper-button-prevv2 swapp"></i>
          </div>
       </div>


       </div>

       


      </header>

 
    
   <footer>
   <div class="top_footer">
            <a href=""><img src="img/logo.png" alt="" width="150px" height="70px"></a> 
            <ul>
                <li class="social_media_footer"><a href=""><i class="bi bi-facebook"></i></a></li>
                <li class="social_media_footer"><a href=""><i class="bi bi-instagram"></i></a></li>
                <li class="social_media_footer"><a href=""><i class="bi bi-youtube"></i></a></li>
                
        </div>
        <div class="medium_footer">
            <ul>
            
                <li><a href="#">Menu</a></li>
                <li><a href="#">Main</a></li>
                <li><a href="#">Hotel</a></li>
                <li><a href="#">Rest</a></li>
                <li><a href="#">Blog</a></li>
    
        
              </ul>

              <ul class="info">
            
                <li>ADDRESS & INFO</li>
                <li><i class="bi bi-geo-alt-fill"></i> <span id="first_adress"> Faculté des Sciences et Technique Errachidia 
                    52003</span></li>
                   <li> <span>Errachidia</span> </li>
                 <li><span>Morocco</span> </li>
                <li><i class="bi bi-envelope"></i> <span id="email_address"> support@discoverdaraatafilalt.com</span></li>
                <li></li>
                <li></li>
    
        
              </ul>
              <ul class="stay_connected">
                <li>STAY CONNECTED</li>
                <li>
                <form action="" class="stay_connected_form" method="">
                    <input type="email" class="input-group" placeholder="email">
                    <input type="submit" value="SIGN UP" >
                </form></li>
              </ul>


        </div>
        <div class="bottom_footer">

                <span><i class="bi bi-c-circle"></i> <a href="">discoverdaraatafilalt.com</a> All right reserved</span>
        </div>
        
   </footer> 
</div></div>

</body>
<script src="js/swiper-bundle.min.js"></script>
    <script>
    //   $(document).ready(function() {
    //   $('#backstretch').backstretch([
    //     "img/2.jpg",
    //     "img/4.jpg",
    //     "img/3.jpg"
    //   ], {duration: 7000, fade: 750});
    // });
    $(document).ready(function() {
  var images = [
         "img/2.jpg",
         "img/4.jpg",
         "img/3.jpg"
  ];

  // Initialize Backstretch with the first image
  $('#backstretch').backstretch(images[0]);

  var currentIndex = 0;
  var totalImages = images.length;
  


  // Function to change the background image
  function changeBackground() {
    $('#backstretch').backstretch(images[currentIndex]);

    currentIndex = (currentIndex + 1) % totalImages;
  }

  // Initial background image
  changeBackground();

  // Change background image every 5 seconds (5000 milliseconds)
  setInterval(changeBackground, 5000);

  // Bind click event handlers to the previous and next buttons
  $('#prevBtn').click(function() {
    currentIndex = (currentIndex - 1 + totalImages) % totalImages;
    $('#backstretch').backstretch(images[currentIndex]);
  });

  $('#nextBtn').click(function() {
    currentIndex = (currentIndex + 1) % totalImages;
    $('#backstretch').backstretch(images[currentIndex]);
  });
});

    var swiper = new Swiper(".hotel-swipper1", {
    slidesPerView: 3,
    spaceBetween:20,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-nextt1",
      prevEl: ".swiper-button-prevv1",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        600: {
            slidesPerView: 1,
        },
        950: {
            slidesPerView: 4,
        },
    },
  });

    
  var swiper = new Swiper(".hotel-swipper2", {
    slidesPerView: 3,
    spaceBetween:20,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-nextt2",
      prevEl: ".swiper-button-prevv2",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        600: {
            slidesPerView: 1,
        },
        950: {
            slidesPerView: 4,
        },
    },
  });
  </script>

    <script src="js/bootstrap.min.js"></script>

</html>

