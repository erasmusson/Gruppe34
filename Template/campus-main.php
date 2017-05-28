<!DOCTYPE html>
<html lang="no">
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
          
    /*Navbar design*/      
.nav-sidebar { 
    width: 100%;
    padding: 8px 0; 
    border-right: 1px solid #ddd;
}
.nav-sidebar a {
    color: #333;
    -webkit-transition: all 0.08s linear;
    -moz-transition: all 0.08s linear;
    -o-transition: all 0.08s linear;
    transition: all 0.08s linear;
    -webkit-border-radius: 4px 0 0 4px; 
    -moz-border-radius: 4px 0 0 4px; 
    border-radius: 4px 0 0 4px; 
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
.nav-sidebar .text-overflow a,
.nav-sidebar .text-overflow .media-body {
    white-space: nowrap;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis; 
}

/*Sidebarens posisjon*/
@media (min-width: 979px) {
        
  #sidebar.affix-top {
    position: fixed;
  	margin-top:30px;
  	width:228px;
  }
}
  /*     
    Might actually be useless
          
.affix-top,.affix{
	position: fixed;
}
          

#mainCol h2 {
	padding-top: 55px;
    margin-top: -55px;
}
        */
      </style>
      
      
  </head>
    
<a name="tohome"></a>
    
  <body id="campus">
      
        <?php require 'navbar.php' ?>
      

      <div class="container">

          <div class="row">
              <?php require 'sidebar.php' ?>
      
      <div class="col-md-9" id="mainCol">
          
          <br>
          
          <h1><?php echo $lang['CAMPUS_TITLE']; ?></h1>
          <br/>
          <br/>
          
          <div class="row">
              <div class="col-md-8">
                  <h2><?php echo $lang['CAMPUS_UNDER_TITLE']; ?></h2>
                  <br/>
                  <p><?php echo $lang['CAMPUS_CONTENT']; ?></p>
                  <br/>
                  <br/>
              </div>
              <div class="col-md-4">
                  <img src="pic/Fjerdingen_2.jpg" class="img-responsive img-rounded">
                  <a name="tokantine"></a>
              </div>
          </div>
          
          <hr class="col-sm-12">
          
          
         <div class="row">
             <div class="col-md-4">
             <img src="pic/Fjerdingen_Kantina1.jpg" class="img-responsive img-rounded">
             </div>
             <br/>
             <div class="col-md-8">
          <h2><?php echo $lang['CAMPUS_UNDER_TITLE2']; ?></h2>
                 
      		<p><?php echo $lang['CAMPUS_KANTINA']; ?></p>
            <p><?php echo $lang['KANTINA_OPEN']; ?></p>
                 <a name="tobiblio"></a>
            </div>
        </div>
          
          <hr class="col-sm-12">
          
          <div class="row">
              <div class="col-md-8">
                <h2><?php echo $lang['CAMPUS_UNDER_TITLE3']; ?></h2>
                  <p><?php echo $lang['CAMPUS_BIBLIO']; ?></p>
                  <p><?php echo $lang['BIBLIO_OPEN']; ?></p>
              </div>
                <div class="col-md-4">
                  <img src="pic/Fjerdingen_1.jpg" class="img-responsive img-rounded">
                    <a name="tostua"></a>
              </div>
          </div>
          
          <hr class="col-sm-12">


          <div class="row">
          <div class="col-md-4">
            <img src="pic/Sjenkestua_1.jpg" class="img-responsive img-rounded">    
          </div>
              <div class="col-md-8">
              <h2><?php echo $lang['CAMPUS_UNDER_TITLE4']; ?></h2>
              <p><?php echo $lang['CAMPUS_SJENKESTUA']; ?></p>
              <p><?php echo $lang['SJENKESTUA_OPEN']; ?></p>
              </div>
          </div>
          <hr class="col-sm-12">
          
          <div class="row">
          <div class="col-md-8">
                <h2><a name="toplan"></a><?php echo $lang['CAMPUS_UNDER_TITLE5']; ?></h2>
              <p><?php echo $lang['CAMPUS_PLAN']; ?></p>
          </div>
              <div class="col-md-4">
                    <img src="pic/Fjerdingen_Plan.jpg" class="img-responsive img-rounded">
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