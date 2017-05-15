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
          <br/>
          <br/>
          
          <div class="row">
              <div class="col-md-8">
                  <h3><?php echo $lang['CAMPUS_UNDER_TITLE']; ?></h3>
                  <br/>
                  <p><?php echo $lang['CAMPUS_CONTENT']; ?></p>
                  <br/>
                  <br/>
              </div>
              <div class="col-md-4">
                  <img src="pic/Fjerdingen_2.jpg" class="img-responsive img-rounded">
              </div>
          </div>
          
         <div class="row">
             <div class="col-md-4">
             <img src="pic/Fjerdingen_Kantina1.jpg" class="img-responsive img-rounded">
             </div>
             <div class="col-md-8">
          <h2><?php echo $lang['CAMPUS_UNDER_TITLE2']; ?></h2>
      		<p><?php echo $lang['CAMPUS_KANTINA']; ?></p>
          <br/>
          <br/>
            </div>
        </div>
          
          <div class="row">
              <div class="col-md-8">
                  <h3><?php echo $lang['CAMPUS_UNDER_TITLE3']; ?></h3>
                  <p><?php echo $lang['CAMPUS_BIBLIO']; ?></p>
              </div>
                <div class="col-md-4">
                  <img src="pic/Fjerdingen_1.jpg" class="img-responsive img-rounded">
              </div>
          </div>
          
          <div class="row">
          <div class="col-md-4">
            <img src="pic/Sjenkestua_1.jpg" class="img-responsive img-rounded">    
          </div>
              <div class="col-md-8">
              <h2></h2>
              <p></p>
              </div>
          
          </div>
        </div>
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