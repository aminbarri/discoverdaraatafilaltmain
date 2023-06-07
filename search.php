<?php

session_start();
include 'connection.php';

$serach =$_GET['value'];
$sql = 'SELECT *
        FROM hotel
        where ville LIKE :serach';
$statement = $pdo->prepare($sql);
$statement->bindValue(':serach', $serach);
$statement->execute();

$resu = $statement->fetchAll(PDO::FETCH_ASSOC);
$sql1 = 'SELECT *
        FROM `destination`
        where ville LIKE :serach';
$statement1 = $pdo->prepare($sql1);
$statement1->bindValue(':serach', $serach);
$statement1->execute();

$resu1 = $statement1->fetchAll(PDO::FETCH_ASSOC);

$sql2 = 'SELECT *
        FROM `moussem`
        where ville LIKE :serach';
$statement2 = $pdo->prepare($sql2);
$statement2->bindValue(':serach', $serach);
$statement2->execute();

$resu3 = $statement2->fetchAll(PDO::FETCH_ASSOC);

$sql4 = 'SELECT *
        FROM `restau`
        where ville LIKE :serach';
$statement4 = $pdo->prepare($sql4);
$statement4->bindValue(':serach', $serach);
$statement4->execute();

$resu4 = $statement4->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>
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
  <title>Search Results</title>
  <style>
    /* CSS styling for search results */
    body{
     
    }
    .countainer{
       /* min-height: 100vh; */
        background-color:white ;
    }
    .countainer-search{
      
      min-height: 100%;

    }.result {
      margin-bottom: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      display: flex;
     
      align-items: center;
    }
    .result img {
      width: 100px;
      height: 100px;
      margin-right: 10px;
    }
    .result h3 {
      margin: 0;
      font-size: 18px;
    }
    .result p {
      margin: 5px 0;
      font-size: 14px;
    }
    .countainer-search{
        width: 80%;
        height: 100%;
        margin-left: 10%;

    }
    .result a {
      color: blue;
      text-decoration: none;
    }
  </style>
</head>
<body>
    <div class="countainer">
        <div class="top " id="">
           
         
        <div class="">
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
                        echo "<a href='deconection.php' name=''>DECONNECTER</a>";
                      }
                      ?>
                     
                  
                  </li>
            
                  </ul>
           
              </div>  
            </nav>
        </div>
        </div>
   
           <div class="countainer-search">
            
            <?php 
           $i=0;
            if(!$resu && !$resu1 && !$resu3){
              echo '<h3>Aucun résultat trouvé</h3>' ;
            }
            if($resu){
              
              echo '<h4>Résultats de recherche - Hôtels</h4>' ;
            foreach ($resu as $res){?>
            <div class="result">
              <img src="<?php echo '../admin-ver/img/hotels/'.$res['img2']?>" alt="Image 1">
              <div>
                <h3><?php echo $res['nom']?></h3>
                <p><?php echo $res['ville']?></p>
                <a href="result1.html">Read More</a>
              </div>
            </div>
            <?php $i++; if($i>4){break;} }}?>
              <?php
            if($resu1){
              echo '<h4>Résultats de recherche - destinations</h4>' ;
            foreach ($resu1 as $res){?>
            <div class="result">
              <img src="<?php echo '../admin-ver/img/destinations/'.$res['img2']?>" alt="Image 1">
              <div>
                <h3><?php echo $res['nom']?></h3>
                <p><?php echo $res['ville']?></p>
                <a href="result1.html">Read More</a>
              </div>
            </div>
            <?php  $i++; if($i>4){break;}  }}?>
              <?php
            if($resu3){
              echo '<h4>Résultats de recherche - Moussems</h4>' ;
            foreach ($resu3 as $res){?>
            <div class="result">
              <img src="<?php echo '../admin-ver/img/moussem/'.$res['img1']?>" alt="Image 1">
              <div>
                <h3><?php echo $res['nom']?></h3>
                <p><?php echo $res['ville']?></p>
                <a href="result1.html">Read More</a>
              </div>
            </div>
            <?php  $i++; if($i>4){break;}  }}?>
            <?php
            if($resu4){
              echo '<h4>Résultats de recherche - Restaurants</h4>' ;
            foreach ($resu4 as $res){?>
            <div class="result">
              <img src="<?php echo '../admin-ver/img/restau/'.$res['img1']?>" alt="Image 1">
              <div>
                <h3><?php echo $res['nom']?></h3>
                <p><?php echo $res['ville']?></p>
                <a href="result1.html">Read More</a>
              </div>
            </div>
            <?php  $i++; if($i>4){break;}  }}?>
            
           </div>

  </div>
 <footer class="">
       
    <div class="bottom_footer">

            <span><i class="bi bi-c-circle"></i> <a href="">discoverdaraatafilalt.com</a> All right reserved</span>
    </div>
    
</footer>



</body>
</html>
