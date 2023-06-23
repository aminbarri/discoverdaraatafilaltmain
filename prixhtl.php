<?php
@$prix = $_GET['province1'];
@$prix = intval($prix); // Convert to integer
@$type = $_GET['province2'];
@$nbe = $_GET['province3'];
@$nbe = intval($nbe); // Convert to integer
 
if ($type == 'seul') {
     echo $prix.' MAD';
}
elseif ($type == 'partagé') {
    echo ((70 * $prix) / 100) * $nbe.' MAD';
}
else{
    echo'Please enter type de chamber est number des personnes';
}
?>

