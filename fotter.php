<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font/bootstrap-icons.min.css">
</head>
<style>
    footer{
        width: 100%;
        height: 100%;
        background-color: #1F5C3F;
    }
    .social_media_footer{
        width: 50px;
        height: 50px;
        text-align: center;
        background-color:white ;
        border-radius: 50%;
    }
    .social_media_footer>a{
        text-decoration: none;
        color:#1F5C3F;padding-top:5px ;

    }
    .social_media_footer>a>i{
        position: relative;
    font-size: 1.7em;
    top: 5px;
       
    }
    .top_footer{
        display: flex;
        flex-wrap: wrap;
        padding-left: 54px;
        padding-top: 30px;

    }
    .top_footer>ul>li,.medium_footer>ul>li{
          list-style: none;
          margin: 5px;
          
    }
    .top_footer>ul{
        display: flex;justify-content: flex-end;
    }
    .medium_footer>ul>li>a{
        text-decoration: none;
        color: white;
    } .medium_footer>ul>li:first-child{
        text-decoration: none;
        color: white;
        font-size: larger;
        font-weight: bold;
        
    }
    .medium_footer{
        display: flex;
    width: 100%;
    margin-top: 26px;
    flex-wrap: wrap;
    justify-content: space-between;
    }
    .medium_footer>ul{margin-right: 7px;
    margin-left: 64px;
    }
    .info{
        color: white;
        /* padding-left: 200px; */
    }
    .info>li>span{
        margin-left: 35px;
    }
    .bottom_footer{
        position: relative;
        bottom: -27px;
        background-color: #1e4633;
        height: 30px;
        text-align: center;

    }
    #first_adress,#email_address{
        
        margin-left: 15px;
    }
    .stay_connected_form{
        display: flex;
    }
    .stay_connected_form>input{
        height: 49px;
        color: white;
         border: none;
        background-color:#589277 ;
        
    } .stay_connected_form>input[type="submit"]{
        font-weight: bold;
        margin-left: 20px;
        padding-left: 15px;
        padding-right: 15px;

        background-color: #004297;
       
    }
    
    .stay_connected_form>input:first-child::placeholder{
        padding-left: 15px;
        color: white;
    }
    .bi-c-circle{
        color: white;
    }
    .bottom_footer>span>a{
        text-decoration: none;
        color: white;
        border-right: 1px solid white;
        padding-right: 7px;
    }
    .bottom_footer>span{
        color: white;
        position: relative;
        top: 3px;
    }
</style>
<body>

    <footer>
        <div class="top_footer">
            <a href=""><img src="img/logo.png" alt="" width="150px" height="70px"></a> 
            <ul>
                <li class="social_media_footer"><a href=""><i class="bi bi-facebook"></i></a></li>
                <li class="social_media_footer"><a href=""><i class="bi bi-instagram"></i></a></li>
                <li class="social_media_footer"><a href=""><i class="bi bi-youtube"></i></a></li>
                
        </div>
        <div class="medium_footer">
            <ul>
            
                <li><a href="#">Menu</a></li>
                <li><a href="#">Main</a></li>
                <li><a href="#">Hotel</a></li>
                <li><a href="#">Rest</a></li>
                <li><a href="#">Blog</a></li>
    
        
              </ul>

              <ul class="info">
            
                <li>ADDRESS & INFO</li>
                <li><i class="bi bi-geo-alt-fill"></i> <span id="first_adress"> Faculté des Sciences et Technique Errachidia 
                    52003</span></li>
                   <li> <span>Errachidia</span> </li>
                 <li><span>Morocco</span> </li>
                <li><i class="bi bi-envelope"></i> <span id="email_address"> support@discoverdaraatafilalt.com</span></li>
                <li></li>
                <li></li>
    
        
              </ul>
              <ul class="stay_connected">
                <li>STAY CONNECTED</li>
                <li>
                <form action="" class="stay_connected_form" method="">
                    <input type="email" class="input-group" placeholder="email">
                    <input type="submit" value="SIGN UP" >
                </form></li>
              </ul>


        </div>
        <div class="bottom_footer">

                <span><i class="bi bi-c-circle"></i> <a href="">discoverdaraatafilalt.com</a> All right reserved</span>
        </div>
        
    </footer>
    
</body>
</html>