<?php

include 'connection.php';

//@$province = $_GET['province'];


@$province = $_GET['province1'];
$sql = 'SELECT * 
		FROM moussem
        WHERE `ville` LIKE :province';
$statement = $pdo->prepare($sql);
$statement->bindValue(':province',  '%' . $province . '%');
$statement->execute();
$moussem = $statement->fetchAll(PDO::FETCH_ASSOC);
$i = 0;
 if ($moussem) {
	// show the publishers
    
    foreach($moussem as $dest) {{
	
	


?>
 
 <?php echo' ' ?>
 <?php $i=0;
               foreach($moussem as $dest) {?>
                <div class=" carteread">
                 <img src="<?php echo '../admin-ver/img/moussem/'.$dest['img1'] ?>" alt="" width="270px" height="150px">
                 <h3><?php echo$dest['nom'] ?></h3>
                 <p><?php echo$dest['ville'] ?></p>
                
                
                 
                 <a href="moussempage.php?id=<?php echo$dest['id-mous'] ?>">Read More</a>
                </div>
                <?php if($i>8){
                  break;
                } }?>

 
   
<?php $i++;

 if($i==8){
    break;
 } } }}?>