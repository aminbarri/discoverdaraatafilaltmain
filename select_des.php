<?php

include 'connection.php';

//@$province = $_GET['province'];


@$province = $_GET['province1'];
$sql = 'SELECT * 
		FROM destination
        WHERE `ville` LIKE :province or `province` LIKE :province or `description` LIKE :province  ';
$statement = $pdo->prepare($sql);
$statement->bindValue(':province',  '%' . $province . '%');
$statement->execute();
$destination = $statement->fetchAll(PDO::FETCH_ASSOC);
$i = 0;
 if ($destination) {
	// show the publishers
    
    foreach($destination as $dest) {{
	
	


?>
 
 <?php echo' ' ?>
 <?php $i=0;?>
              
                <div class=" carteread">
                 <img src="<?php echo '../admin-ver/img/destinations/'.$dest['img1'] ?>" alt="" width="270px" height="150px">
                 <h3><?php echo$dest['nom'] ?></h3>
                 <p><?php echo$dest['ville'] ?>,<?php echo$dest['province'] ?></p>
                
                
                 
                 <a href="destinationpage.php?<?php echo$dest['id-des'] ?>">En savoir plus...</a>
                </div>
                <?php if($i>8){
                  break;
                } }?>
 
   
<?php $i++;

 if($i==12){
    break;
 } } }?>