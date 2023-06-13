<?php

include 'connection.php';

//@$province = $_GET['province'];


@$province = $_GET['province1'];
$sql = 'SELECT * 
		FROM hotel
        WHERE `ville` LIKE :province or `carte` LIKE :province';
$statement = $pdo->prepare($sql);
$statement->bindValue(':province',  '%' . $province . '%');
$statement->execute();
$selecthotel = $statement->fetchAll(PDO::FETCH_ASSOC);
$i = 0;
 if ($selecthotel) {
	// show the publishers
    
	foreach ($selecthotel as $selecthotel) {
	
	


?>
 
 <?php echo' ' ?>
 <div class="swiper-slide box-hotel">
              <img src="<?php echo '../admin-ver/img/hotels/'.$selecthotel['img1']; ?>" alt="" width="270px" height="150px"><span>MAD350</span>
                <div class="text">
                  <div class="hotel-name"><?php echo $selecthotel['nom']; ?></div><div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>

                <div class="adress"><?php echo $selecthotel['ville']; ?></div>
                <div class="description"><?php echo $selecthotel['classe']; ?>-star hotel</div>
                  </div>
                  <div class="dure"> <a href="reserverhotel.php?id=<?php echo $selecthotel['id-hotel']; ?>">RESERVER</a></div>
                </div>
               
               
            </div>
   
<?php $i++;

 if($i==8){
    break;
 } } }?>