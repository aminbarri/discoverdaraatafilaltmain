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
if(@$_SESSION['login']!= 'oui') {
  header('location: login.php');
}
$id = $_SESSION['id_client'];
$sql1 = 'SELECT * 
         FROM `reserver-hotel` 
         JOIN `hotel` ON (`hotel`.`id-hotel` = `reserver-hotel`.`id-hotel`)
         WHERE `reserver-hotel`.`id-client` = :id';

$stmt = $pdo->prepare($sql1);
$stmt->bindParam(':id', $id);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


 $sql2 = 'SELECT * 
          FROM `reserver-voyage` 
          JOIN `voyage` ON (`voyage`.`id-cer` = `reserver-voyage`.`id-cer`)
          WHERE `id-cleint` = :id ';

 $stmt2 = $pdo->prepare($sql2);
  $stmt2->bindParam(':id', $id);
 $stmt2->execute();
 $resultsRes = $stmt2->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font/bootstrap-icons.min.css"> 
    <link rel="stylesheet" href="contact.css">
 
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
      
    <link rel="stylesheet" href="">
    <script src='js/jsformodul.js' defer></script>
    <link rel="stylesheet" href="steylforhotelpagr.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <style>
 

    .containerr {
      max-width: 80vw;
      margin: 0 auto;
      margin-top: 25px;
      margin-bottom: 25px;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    .info {
      margin-bottom: 20px;
    }

    .info label {
      font-weight: bold;
    }

    .info span {
      display: inline-block;
      margin-left: 10px;
    }

    .info span:last-child {
      margin-left: 0;
    }

    .edit-button {
      margin-left: 10px;
      padding: 5px 10px;
      border: none;
      background-color: #007bff;
      color: #fff;
      border-radius: 3px;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
    }

    .edit-input {
      width: 200px;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .save-button {
      margin-left: 10px;
      padding: 5px 10px;
      border: none;
      background-color: #28a745;
      color: #fff;
      border-radius: 3px;
      cursor: pointer;
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
                         <a href="deconection.php">DECONNECTER</a>
                       </div>
                     </div>
      </div> 
<?php
  // Initialize client information
  $clientName = $_SESSION['nom'];
  $clientEmail = $_SESSION['email'];
  $clientPrenom = $_SESSION['prenom'];


  // Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Update client information if values are present
    if (!empty($_POST["name"])) {
      $clientName = $_POST["name"];
    }
    if (!empty($_POST["email"])) {
      $clientEmail = $_POST["email"];
    }
    if (!empty($_POST["phone"])) {
      $clientPhone = $_POST["phone"];
    }
    if (!empty($_POST["address"])) {
      $clientAddress = $_POST["address"];
    }
  }
  ?>

              <?php 
                  if(isset($_GET['success'])){ ?>
                  <div class="containerr">
                    <div class="alert alert-success" role="alert">
                      <?php echo$_GET['success']; ?>
                    </div>
                  </div>
                <?php } ?>
   <div class="containerr">
    <h1>Bounjour   <?php echo $_SESSION['nom'].' '. $_SESSION['prenom'] ?></h1>
    <div class="info">
        <label>Name:</label>
        <span> <?php echo $_SESSION['nom']; ?></span>
      </div>
      <div class="info">
        <label>Prenom:</label>
        <span> <?php echo $_SESSION['prenom']; ?></span>
      </div>
      <div class="info">
        <label>Email:</label>
        <span> <?php echo $_SESSION['email']; ?></span>
      </div>
    <form action="" method="post">
  <a  class="edit-button" name="edit" href="update_client.php" >Edit</a>
    </form>
 
  </div>
  
   
   <!-- <a href="update_client.php">edit</a> -->
  
  <!--  -->
<div class="reservation containerr">
  
  <h2>Réservation des hôtels</h2>
  <table class="table">
  <thead>
    <tr>
    <th>#</th>
        <th>Nom de Hôtel</th>
        
        <th>Date de réservation</th>
        <th>Date début</th>
        <th>Date fin</th>
        <th>statut</th>
    </tr>
  </thead>
  <tbody>
   <?php  if($results) {
    $i=1;
    foreach ($results as $results )?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $results['nom'];?></td>
      <td><?php echo $results['date-reservartion'];?></td>
      <td><?php echo $results['date-debut'];?></td>
      <td><?php echo $results['date-fin'];?></td>
      <td><?php echo $results['statu'];?></td>
      
    </tr>
    <?php }?>
  </tbody>
</table>

</div>

<div class="reservation containerr">
  
  <h2>Réservation des voyages</h2>
  <table class="table">
  <thead>
    <tr>
    <th>#</th>
         <th>Ville départ</th>
        <th>Ville arrive</th>
        
        
        <th>Prix</th>
        <th>Date départ</th>
        <th>Durée</th>
    </tr>
  </thead>
  <tbody>
  <?php  if($resultsRes) {
    $i=1;
    foreach ($resultsRes as $resultsRes )?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $resultsRes['ville-depart'];?></td>
      <td><?php echo $resultsRes['ville-arrive'];?></td>
      <td><?php echo $resultsRes['prix'];?></td>
      <td><?php echo $resultsRes['date-depart'];?></td>
      <td><?php echo $resultsRes['dure'];?></td>
      
    </tr>
    <?php }
    ob_end_flush();?>
  </tbody>
</table>

</div>

<footer class="">
       
       <div class="bottom_footer">

               <span><i class="bi bi-c-circle"></i> <a href="">discoverdaraatafilalt.com</a> All right reserved</span>
       </div>
       
   </footer>
  
</body>
</html>