<div class="bar_top_first ">

<ul class=" ">
  <li class="social_media "><a href=""><i class="bi bi-facebook"></i></a></li>
  <li class="social_media "><a href=""><i class="bi bi-instagram"></i></a></li>
  <li class="social_media "><a href=""><i class="bi bi-youtube"></i></a></li>
  <li><div class="search-container">

    <input type="text" placeholder="Search...">
    <button type="submit"><i class="bi bi-search"></i></button></div>
  </li>
</ul>
</div>
<nav class="navbar  navbar-expand-lg  container-fluid">
    <div class="logo"><a href="index.php"><img src="img/logo.png" alt="" width="200px" height="70px"></a></div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  <div   class=" bar_top_sec collapse navbar-collapse"  id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" >
       
        <li class="nav-item"><a href="#">ACCUEIL</a></li>
        <li class="nav-item"><a href="#">HOTELS</a></li>
        <li class="nav-item"><a href="#">DESTINATION</a></li>
        <li class="nav-item"><a href="#">MOUSSEM</a></li>
        <li class="nav-item"><a href="#">RESTURANT</a></li>
        <li class="nav-item"><a href="#">CONTACT</a></li>
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
</nav>

<div class="pre_paragraf">
<div class="welcome">Welcome to <span>Daraa-Tafilalt</span></div>
<div class="region">the region that time forgot</div>
<div><i class="bi bi-caret-left-fill"></i><i class="bi bi-caret-right-fill"></i></div>

</div>