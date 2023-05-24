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
	foreach ($selecthotel as $publisher) {
	
	


?>
 
 <?php echo' <div class="box-hotel"> ' ?>
                <img src="img/<?php echo $publisher["img3"]?>" alt="" width="270px" height="150px"><span>MAD350</span>
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
   
<?php $i++;

 if($i==8){
    break;
 } } }?>