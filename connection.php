<?php 
// $con = mysqli_connect("localhost", "root","","discoverdraatafilalt");
// if(!$con){
//     die("connection failed");

// }

try{
    $pdo = new PDO("mysql:host=localhost;dbname=discoverdraatafilalt","root","");
}catch(PDOException $e){
    $e->getMessage();
} 

?>
