
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
</style>
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
            <div class="h">
                <center>
                    <div>
                        <div class="htl">DESTINATIONS</div>
                        <div class="hot">discover les meilleurs distinations de la region DRAA TAFILALET</div>
                    
                    </div>
                
                    <div class="der">
                        <a href="#second">
                        <span></span>
                    <i class="bi bi-arrow-down-square"></i>
                
                        </div></a>
                        </center>
                        </div>
        </div>
        <div id="second">
        <div class="center-bar">
        <div class="tttt">
            
            <input type="text"  id='province'>
           
           
        </div>
               
          
        </div> 
        <div  id="second2" >
             
           
        </div>
        <div  id="second3" >
 
        <div class="box-hotel"> 
              <div class="mainborder">
              <div class="imageclass">
                  <img src="img/2.jpg" alt="">
              </div>
              <div class="divtext">
                  <h3 class="tiltle">Kasbah N’Kob</h3>

                  <h5>N'kob is the only village in Morocco that counts more than forty Kasbahs all built with rammed earth.</h5>
              </div>
              <div class="bottombar">
                  <a href="">READ MORE...</a>
              </div>
                </div>
          </div>   
          <div class="box-hotel"> 
              <div class="mainborder">
              <div class="imageclass">
                  <img src="img/2.jpg" alt="">
              </div>
              <div class="divtext">
                  <h3 class="tiltle">Kasbah N’Kob</h3>

                  <h5>N'kob is the only village in Morocco that counts more than forty Kasbahs all built with rammed earth.</h5>
              </div>
              <div class="bottombar">
                  <a href="">READ MORE...</a>
              </div>
                </div>
          </div>   
          <div class="box-hotel"> 
              <div class="mainborder">
              <div class="imageclass">
                  <img src="img/2.jpg" alt="">
              </div>
              <div class="divtext">
                  <h3 class="tiltle">Kasbah N’Kob</h3>

                  <h5>N'kob is the only village in Morocco that counts more than forty Kasbahs all built with rammed earth.</h5>
              </div>
              <div class="bottombar">
                  <a href="">READ MORE...</a>
              </div>
                </div>
          </div>   
        </div>
        </div>
        
        </div>
        
    </div>
    <footer class="">
       
        <div class="bottom_footer">

                <span><i class="bi bi-c-circle"></i> <a href="">discoverdaraatafilalt.com</a> All right reserved</span>
        </div>
        
    </footer>

   
      <script type="text/javascript">
     $(document).ready(function() {
     $('#province').keyup(function() { // Listen for keyup event on the input field
    $.ajax({
      method: 'GET',
      url: 'selecthotel.php',
      data: {
        province1: $('#province').val()
      },
      beforeSend: function() {
        $("#second3").show();
          $("#second2").hide();
        // Actions to be performed before the AJAX request is sent
      },
      success: function(data) {
        $('#second2').html(data);
        $("#second3").hide();
          $("#second2").show();
      }
    });
  });
});

</script>
</body>
</html>