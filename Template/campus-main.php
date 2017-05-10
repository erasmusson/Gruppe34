<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
      
    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    
      <style>
          
.header{
   
}

.nav-siderbar{
    margin-left: 100px;
    position: fixed;
    
}

.nav-sidebar { 
    width: 100%;
    padding: 8px 0;
    padding-left: 135px;
    border-right: 1px solid #ddd;
    
}
/*.nav-sidebar a {
    color: #333;
    -webkit-transition: all 0.08s linear;
    -moz-transition: all 0.08s linear;
    -o-transition: all 0.08s linear;
    transition: all 0.08s linear;
    -webkit-border-radius: 4px 0 0 4px; 
    -moz-border-radius: 4px 0 0 4px; 
    border-radius: 4px 0 0 4px; 
}
*/
.nav-sidebar .active a { 
    cursor: default;
    background-color: #428bca; 
    color: #fff; 
    text-shadow: 1px 1px 1px #666; 
}
.nav-sidebar .active a:hover {
    background-color: #428bca;   
}

/*.nav-sidebar .text-overflow a,
.nav-sidebar .text-overflow .media-body {
    white-space: nowrap;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis; 
}
*/
      </style>
      
  </head>
  <body id="campus">
      
        <?php require 'navbar.php' ?>
      

    <div class="nav-container">
    <br />
    <br />
    <div class="row">
        <h1 class="header text-center">Campus Fjerdingen</h1>
        <div class="col-md-2">
            <nav class="nav-sidebar nav-fixed-top">
                <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Planoversikt</a></li>
                    <li><a href="#">Bilbiotek</a></li>
                    <li><a href="#">Kantine</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

        
        <!---
        <h1 class="campus text-center">Campus Fjerdingen</h1>
        <br />
        
        
            <div class="row">
                <div class="col-md-2">
                    <nav class="nav">
                    <ul id="sidebar" class="nav nav-pills nav-stacked">
                        <li><a href="#">Planoversikt</a></li>
                        <li><a href="#">Kantina</a></li>
                        <li><a href="#">Bibliotek</a></li>
                        <li><a href="#">Sjenkestua</a></li>
                    </ul>  
                    </nav>
                </div>
                    </div>
-->
                        
      <div class="container">
          <br />
          <br />
          <br />
          <br />
          <br />
            <br />
          <br />
          <br />
          <br />
          <br />
          
            <div class="row">        
                <div class="col-md-5 pull-right"><img src="pic/Fjerdingen_1.jpg"  width="350" height="250"class="img-circle img-responsive pull-right"></div>
                <div class="col-md-7">
                <h2>Content</h2>
                    <p>Nam et pellentesque sapien, id bibendum elit. Quisque condimentum quis erat vel sollicitudin. Vivamus eleifend quis lectus in blandit. Quisque cursus pellentesque sapien quis aliquam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque et feugiat est. Donec nec fermentum massa.</p></div>
                
                <hr class="col-md-12">
            </div>
        <div class="row">
                <div class="col-md-4"><img src="pic/Fjerdingen_2.jpg" width="350" height="250" class="img-circle img-responsive pull-left"></div>
                <div class="col-md-8">
                <h2>More Content</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean urna nunc, lacinia vel orci vitae, placerat pulvinar quam. Integer ac consequat erat, a pharetra mauris. Vivamus enim enim, interdum a bibendum efficitur, auctor sit amet velit.</p></div>
        </div>
        
            <hr class="col-md-12">
        
        <div class="row">
                <div class="col-md-5 pull-right"><img src="pic/Fjerdingen_2.jpg" width="350" height="250" class="img-circle img-responsive pull-right"></div>
                <div class="col-md-7">
                <h2>Holy Shit, Even More Content</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean urna nunc, lacinia vel orci vitae, placerat pulvinar quam. Integer ac consequat erat, a pharetra mauris. Vivamus enim enim, interdum a bibendum efficitur, auctor sit amet velit.</p></div>
        </div>
         
        
        <div class="push"></div>
      </div>
     <?php require 'footer.php' ?>
      
    <!-- jquery og bootstrap script -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>