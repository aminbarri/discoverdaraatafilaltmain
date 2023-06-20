<?php

include 'connection.php';

//@$province = $_GET['province'];


@$province = $_GET['province1'];
$sql = 'SELECT * 
		 FROM `restau`
        WHERE `ville` LIKE :province or `province` LIKE :province';
$statement = $pdo->prepare($sql);
$statement->bindValue(':province',  '%' . $province . '%');
$statement->execute();
$restau = $statement->fetchAll(PDO::FETCH_ASSOC);
$i = 0;
 if ($restau) {
	// show the publishers
    

	
	


?>
 
 <?php echo' ' ?>
 <?php $i=0;
               foreach($restau as $dest) {?>
                <div class=" carteread">
                 <img src="<?php echo '../admin-ver/img/restau/'.$dest['img1'] ?>" alt="" width="270px" height="150px">
                 <h3><?php echo$dest['nom'] ?></h3>
                 <p><?php echo$dest['ville'] ?>,<?php echo$dest['province'] ?></p>
                
                
                 
                 <a href="pagerestau.php?id=<?php echo$dest['id-rest'] ?>">En savoir plus...</a>
                </div>
                <?php if($i>8){
                  break;
                } }?>
 
   
<?php $i++;

 if($i==8){
    return;
 } }?>