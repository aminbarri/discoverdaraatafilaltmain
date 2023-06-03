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

                <input type="text" placeholder="Search...">
                <button type="submit"><i class="bi bi-search"></i></button></div>
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
          <div class="welcome">Welcome to <span>Daraa-Tafilalt</span></div>
          <div class="region">the region that time forgot</div>
          <div><i class="bi bi-caret-left-fill"></i><i class="bi bi-caret-right-fill"></i></div>

        </div>
      </div>
      <header>
       <?php include 'htmljs.html'; ?>

       <div class='hotel-see'>
       
       <div class="hotel_sec">
         <div class='toptext'>
          <div class="frsttoptext">Most Populare <span>HOTELS</span></div>
          <div class="sectoptext" >Families, couples, workaholics, adventurers, find your own piece of paradise</div>
          </div>
          <div class='swiper '>
          
           <i class="bi bi-arrow-left-circle-fill swiper-button-nextt swapp"></i>
           <div class='second-hotel '>
          
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
           <i class="bi bi-arrow-right-circle-fill swiper-button-prevv swapp"></i>
          </div>
       </div>


       </div>
       <div class='hotel-see'>
       
       <div class="hotel_sec">
         <div class='toptext'>
          <div class="frsttoptext">Most Populare <span>HOTELS</span></div>
          <div class="sectoptext" >Families, couples, workaholics, adventurers, find your own piece of paradise</div>
          </div>
          <div class='swiper '>
          
           <i class="bi bi-arrow-left-circle-fill swiper-button-nextt swapp"></i>
           <div class='second-hotel '>
          
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
           <i class="bi bi-arrow-right-circle-fill swiper-button-prevv swapp"></i>
          </div>
       </div>


       </div>

       
</div>

      </header>

  <?php include 'fotter.html';?>
    </div>

</body>
<script src="js/swiper-bundle.min.js"></script>
    <script>
      $(document).ready(function() {
      $('#backstretch').backstretch([
        "img/2.jpg",
        "img/4.jpg",
        "img/3.jpg"
      ], {duration: 7000, fade: 750});
    });
     
    var swiper = new Swiper(".second-hotel", {
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
      nextEl: ".swiper-button-nextt",
      prevEl: ".swiper-button-prevv",
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

