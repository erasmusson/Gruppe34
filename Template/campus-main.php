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
          
    .affix-top,.affix{
	position: static;
}
    
@media (min-width: 979px) {
        
  #sidebar.affix-top {
    position: static;
  	margin-top:30px;
  	width:228px;
  }
  
  #sidebar.affix-bottom {
    position: relative;
  }

  #sidebar.affix {
    position: fixed;
    width:228px;
  }
}

#mainCol h2 {
	padding-top: 55px;
    margin-top: -55px;
}
/*
  margin-left: -250px;
  left: 250px;
  width: 250px;
  position: fixed;
  height: 100%;
  overflow-y: auto;
  z-index: 1000;
}

.nav-sidebar { 
    width: 100%;
    padding: 8px 0;
    padding-left: 135px;
    border-right: 1px solid #ddd;
    
}

.nav-sidebar .active a { 
    cursor: default;
    background-color: #428bca; 
    color: #fff; 
    text-shadow: 1px 1px 1px #666; 
}
.nav-sidebar .active a:hover {
    background-color: #428bca;   
}
*/

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
      

      <div class="container">
          <div class="row">
              <div class="col-md-3" id="leftCol">
                  
                  <ul class="sidebar-nav-fixed affix" id="sidebar">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Planoversikt</a></li>
                      <li><a href="#">Bibliotek</a></li>
                      <li><a href="#">Kantine</a></li>
                  </ul>
              </div>    
      
      <div class="col-md-9" id="mainCol">
          
          <br>
          
          <h1><?php echo $lang['CAMPUS_TITLE']; ?></h1>
          
          <div class="row">
              <div class="col-md-8">
                  <h3>Content</h3>
                  <p><?php echo $lang['CAMPUS_CONTENT']; ?></p>
              </div>
              <div class="col-md-4">
                  <img src="pic/Fjerdingen_2.jpg" class="img-responsive img-circle">
              </div>
          </div>
          
          <h2>Section 3</h2>
      			Images are responsive sed @mdo but sum are more fun peratis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut!!<br><br>
          
          <div class="row">
              
              <div class="col-md-4">
                  <img src="pic/Fjerdingen_2.jpg" class="img-responsive img-circle">
              </div>
              <div class="col-md-8">
                  <h3>Content</h3>
                  <p>Nam et pellentesque sapien, id bibendum elit. Quisque condimentum quis erat vel sollicitudin. Vivamus eleifend quis lectus in blandit. Quisque cursus pellentesque sapien quis aliquam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque et feugiat est. Donec nec fermentum massa.</p>
              </div>
          </div>
          
          </div>
      </div>
          <div class="push"></div>
      </div>
<!--
    <div class="nav-container">
    <br />
    <br />
    <div class="row">
        <div class="header">
            <h1 class="header text-center">Campus Fjerdingen</h1>
        </div>
        <div class="col-md-2">
            <div id="sidebar-wrapper">
            <nav class="nav-sidebar">
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
</div>
-->
      
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
                        
<!--
      <div class="container">
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
         
        
      </div>
-->
     <?php require 'footer.php' ?>
      
    <!-- jquery og bootstrap script -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>