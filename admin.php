<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administration</title>
    <link rel="stylesheet" href="font/bootstrap-icons.min.css">
    <script type="text/javascript" src="jquery/jquery-3.6.3.min.js"></script>
    <script src="jquery.backstretch.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="addarticle.css">
    <script type="text/javascript" src="jquery/jquery-3.6.3.min.js"></script>

    <style>
        html body{
            margin: 0;
            padding: 0;
        }
        .side-bar{
            width: 20%;
            height: 100%;
            background-color: bisque;
            float: left;
            
        }
        .bar-content{
            width: 80%;
            float: right;
            background-color: azure;
        }
        .bi{
            margin-right: 15px;
        }

        li{
            list-style: none;
            padding-top: 5px;
            padding-bottom: 5px;
            color: sienna;
        }
        a{
            text-decoration: none;
            color: sienna;
        }

        ul li ul.menu-drow li { display: block;
}
 ul li ul.menu-drow{  
     
     z-index: 999; 
     display: none; 
    }

ul li:hover ul.menu-drow {
    display: block;
    
}
.bi-list{
    font-size: 34px;
}
.top-logo{
    position: relative;
    top: -11px;
}
.top-bar-logo{
    margin-bottom: 15px;
    
}
.title-bar{
    margin-left: 15px;
}
.first-link{  
      margin-left: 27px;

}

.state-conte{
    width: 172px;
    position: relative;
    height: 62px;
    background-color: white;
    border-radius: 5px;
    margin-left: 5px;
    margin-right: 5px;    
   }.icone-cente{
    background-color: blue;
    padding: 5px 12px 5px 12px;
   
    border-radius: 5px;
    top: 12px;
    left: 26px;
    position: absolute;
   }
   .text-number{
    position: absolute;
    top: 9px;
    left: 88px;
    font-size: larger;
    font-weight:bold ;
   }
   .text-content{
    position: absolute;
    top: 30px;
    left: 88px;
   }
   
   .dashbord{
    margin-top: 100px;
    display: flex;
   }
   .ajjouter-article{
    margin-top: 30px;
    margin-left: 50px;
    margin-right:50px;
   }
  
   
    </style>
</head>
<body>
    <div class="main">
        <div class="side-bar">
           
            <div >
                <div class="top-bar-logo"><a href="" class="first-link"><i class="bi bi-list"></i> <img src="img/logo.png" class="top-logo" width="150px" height="50"></a></div>
                <ul>
                    <li id="dashbord-bar"> <a href=""><i class="bi bi-easel"></i> Dashboard</a></li>
                </ul>
                <span class="title-bar">Utilisateur</span>
                <ul>
                    <li><a href=""><i class="bi bi-bootstrap"></i>test</a></li>
                    <li><i class="bi bi-bootstrap"></i>test   >
                    <ul class="menu-drow">
                       <li> <a href=""><i class="bi bi-bootstrap"></i>test</a></li>
                       <li id="heeel"><a ><i class="bi bi-bootstrap" ></i>test4447</a></li>
                    </ul></li>
                    
                    <li>
                        <i class="bi bi-bootstrap"></i>test  > 
                            <ul class="menu-drow">
                                <li>    <a href=""><i class="bi bi-bootstrap"></i>test</a></li>
                                <li><a href=""><i class="bi bi-bootstrap"></i>test</a></li>
                            </ul>
                        
                    </li>
                </ul>
                 <span class="title-bar">Article</span>
                <ul>
                    <li><a href=""><i class="bi bi-bootstrap"></i>test</a></li>
                    <li><a href=""><i class="bi bi-bootstrap"></i>test</a></li>
                    <li><a href=""><i class="bi bi-bootstrap"></i>test</a></li>
                    <li><a href=""><i class="bi bi-bootstrap"></i>test</a></li>
                    <li><a href=""><i class="bi bi-bootstrap"></i>test</a></li>
                    <li><a href=""><i class="bi bi-bootstrap"></i>test</a></li>
                    <li><a href=""><i class="bi bi-bootstrap"></i>test</a></li>
                    <li><a href=""><i class="bi bi-bootstrap"></i>test</a></li>

                </ul>
                 <span class="title-bar">Resrvastion</span>
                <ul>
                    <li><a href=""><i class="bi bi-bootstrap"></i>test</a></li>
                </ul>
                 <span class="title-bar">Messages</span>
                <ul>
                    <li><a href=""><i class="bi bi-bootstrap"></i>test</a></li>
                </ul>
            </div>
        </div>
        <div class="bar-content">

       <!-- <?php  include  'ajouter.html'?> -->
<!-- 
    <div class="dashbord" id="dashbord">
                <div class="state-conte">
                    <span class="icone-cente"><i class="bi bi-bootstrap icone-test"></i></span> <span class="text-number">1</span><br><span class="text-content">Client</span>
                </div>
        
                <div class="state-conte">
                    <span class="icone-cente"><i class="bi bi-bootstrap icone-test"></i></span> <span class="text-number">1</span><br><span class="text-content">Client</span>
                </div>
        
                <div class="state-conte">
                    <span class="icone-cente"><i class="bi bi-bootstrap icone-test"></i></span> <span class="text-number">1</span><br><span class="text-content">Client</span>
                </div>
        
                <div class="state-conte">
                    <span class="icone-cente"><i class="bi bi-bootstrap icone-test"></i></span> <span class="text-number">1</span><br><span class="text-content">Client</span>
                </div>
                <div class="state-conte">
                    <span class="icone-cente"><i class="bi bi-bootstrap icone-test"></i></span> <span class="text-number">1</span><br><span class="text-content">Client</span>
                </div>
                <div class="state-conte">
                    <span class="icone-cente"><i class="bi bi-bootstrap icone-test"></i></span> <span class="text-number">1</span><br><span class="text-content">Client</span>
                </div>
            </div>

        
  <div class="ajjouter-article" id="ajjouter-article1">
    <div class="">
        <div class="col-md-12">
          <h1>Add Article</h1>
          <hr>
         
            <form class="">
                <div class="">
                  <div class="col-md-6 " style="float:left">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter title">
                  </div>
                  <div class="col-md-6 form-inline "  style="float:right">
                    <label for="ville">Ville:</label>
                    <input type="text" class="form-control" id="ville" placeholder="Enter ville">
                  </div>
                </div>
              
                <div class="form-row">
                  <div class="col-md-6 form-inline">
                    <label for="province">Province:</label>
                    <input type="text" class="form-control" id="province" placeholder="Enter province">
                  </div>
                  <div class="col-md-6 form-inline">
                    <label for="image1">Image 1:</label>
                    <input type="file" class="form-control-file" id="image1">
                  </div>
                </div>
              
                <div class="form-row">
                  <div class="col-md-6 form-inline">
                    <label for="image2">Image 2:</label>
                    <input type="file" class="form-control-file" id="image2">
                  </div>
                  <div class="col-md-6 form-inline">
                    <label for="image3">Image 3:</label>
                    <input type="file" class="form-control-file" id="image3">
                  </div>
                </div>
             
                        
            <div class="form-group">
              <label for="location">Location:</label>
              <textarea class="form-control" id="location" rows="3" placeholder="Enter location"></textarea>
            </div>
            <div class="form-group">
              <label for="content">Content:</label>
              <textarea class="form-control" id="content" rows="10" placeholder="Enter content"></textarea>
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary">Cancel</button>
            </div>
          </form>
        </div>
    </div>

        </div>
      </div>
    -->  
    </div>

</div>
    
</body>
<script>
   
  /* if( $("#heeel").click){
$(ajjouter-article1).fadeOut();
   }
   else{
      $(ajjouter-article1).hide();
   }
   $("#heeel").click(function(){
      
     
    });
    $("##heeel").click(function(){
        
    });
    $("#heeel").click(function(){
        $('#ajjouter-article1').fadeOut();
    })
     $("#heeel").click(function(){
        $('#ajjouter-article1').css('display','none');
    }
    )
    
    $("#ajjouter-article1").css('display', 'none');
$("#heeel").click(function() {
    $("#ajjouter-article1").css('display', 'block');
    $("#dashbord").css('display', 'none');
});

$("#dashbord-bar").click(function() {
    $("#dashbord").css('display', 'block');
});
*/

</script>
</html>