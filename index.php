<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font/bootstrap-icons.min.css">
    <script type="text/javascript" src="jquery/jquery-3.6.3.min.js"></script>
    <script src="jquery.backstretch.min.js"></script>

    <link rel="stylesheet" href="cssjs.css" defer>

    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="hotel.css" defer>
    <link rel="stylesheet" href="resrvastion.css" defer>

    <link rel="stylesheet" href="footer.css" defer>
    <link rel="stylesheet" href="style.css" defer>
    <script type="text/javascript" src="Supersized/theme/supersized.shutter.min.js"></script>
    <script type="text/javascript" src="Supersized/js/jquery.easing.min.js"></script>


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
        <div class="bar_top_sec">
          <ul>
            <li class="logo"><a href=""><img src="img/logo.png" alt="" width="200px" ></a></li>

            <li><a href="#">HOME</a></li>
            <li><a href="#">home</a></li>
            <li><a href="#">home</a></li>
            <li><a href="#">home</a></li>
            <li><a href="#">home</a></li>


          </ul>
        </div>
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
           

           <div class='second-hotel'>
           <div class="box-hotel">
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
           <div class="box-hotel">
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


            <div class="box-hotel">
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
             <div class="box-hotel">
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
        </div>


       </div>


      </header>

  <?php include 'fotter.html';?>
    </div>

</body>

    <script>
      $(document).ready(function() {
      $('#backstretch').backstretch([
        "img/2.jpg",
        "img/4.jpg",
        "img/3.jpg"
      ], {duration: 7000, fade: 750});
    });
      </script>

    <script src="js/bootstrap.min.js"></script>

</html>

