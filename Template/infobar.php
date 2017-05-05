<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events</title>
      <?php require'connection.php'?>
      
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      
    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- JavaScript / Jquery -->
      <script type="text/javascript">
        
        // Shows or hides div when click on link where implemented.  
          function switchToggle(divId) {     
              $("#"+divId).toggle();
          }
              
      </script>  
      
  </head>
    
  <body>
      
    <!-- Fetches navigation -->
      <div class="container-fluid">
        <?php require 'navbar.php' ?>
      </div>
   
        <!-- Map content-->
        <div class="container-fluid">
            
            <!-- Start row -->
            <div class="row">

                <!-- Start of content in infobar -->
                <div class="col-md-3" id="infoBar">
                    
                    <!-- Search box HTML -->
                    <form method="get">
                        <label>
                            <input type="text" name="keywords"  class="form-control" autocomplete="off">
                        </label>
                        <input type="submit" value="<?php echo $lang['MENU_SUBMIT']; ?>" class="btn btn-default">
                    </form>
                    <br/>
                    
                    <!-- Content Wrapper / Div with information about boxes. -->
                    <div id="contentWrapper">

                        <span class="allcontent" id="acontent"> 
                       
                            <?php $statement = $connection->query("SELECT * FROM location where name = '4Sound Schous Plass'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?php echo $r->directions; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span>

                        <span class="allcontent" id="bcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'SIO Vulkan'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?php echo $r->directions; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            
                            <hr>
                         </span>

                        <span class="allcontent" id="ccontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Verkstedet'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?php echo $r->directions; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span>

                    </div>
                    
                    <!-- End of Content Wrapper -->
                    
                    <!-- Search function -->                  
                        <?php require'events/search_function.php' ?>

                    <!-- End of infobar -->
                    </div>
                
                <!-- Start of content on map -->
                <div class="col-md-9" id="mapContent">  

                    <!--Container for boxes on map -->
                    <div id="boxContainer">

                        <a href="javascript:switchToggle('acontent');">
                            <div id="a" class="box" >
                            </div>
                        </a>
                         
                        <a href="javascript:switchToggle('bcontent');" id="ba">
                            <div id="b"  class="box">
                            </div>
                        </a>
                    
                        <a href="javascript:switchToggle('ccontent');" >
                            <div id="c" class="box">              
                            </div>
                        </a>
                     
                    <!-- End of box container -->
                    </div>

                <!-- End of map content -->
                </div>
                
            <!-- End row -->    
            </div>
        
        <!-- End container -->
        </div>

        <!-- Fetches footer -->
        <?php require 'footer.php' ?>
      
        <!-- jquery og bootstrap script -->  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
  </body>
</html>