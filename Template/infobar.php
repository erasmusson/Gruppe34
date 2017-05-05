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
              $("#infoBar").show();
          }

          // Shows infobar when press on meny
        function toggleInfoBar() {     
              $("#infoBar").toggle(); 
                
          }
          
              
        function valueChanged()
        {
            for(var i = 0; i < 7 ; i++){
                    if($('#chk' + (i+1)).is(":checked"))   
                        $('.category' +(i+1)).show();
                    else
                        $('.category' +(i+1)).hide();
            }
        }
        
          
      </script>  
      
  </head>
    
  <body id="event">
      
    <!-- Fetches navigation -->
      <div class="container-fluid">
        <?php require 'navbar.php' ?>
      </div>
   
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="z-index:11;">
                <div id="categoryContainer">
                    <button class="btn btn-primary pull-left btn-sm RbtnMargin" data-toggle="collapse" data-target="#demo">Kategorier</button>

                    <div id="demo" class="collapse">
                        <div id="collapsebakgrund">

                            <form action="#">
                                <br><br>
                                <input type="checkbox" name="Kategori" id="chk" onclick="showHide()" checked="checked"/>
                                <label for="chk">Helse</label>
                                <br />

                                <input type="checkbox" name="Kategori2" id="chk2" onclick="showHide()" checked="checked"/>
                                <label for="chk2">Musikk</label>
                                <br />

                                <input type="checkbox" name="Kategori3" id="chk3" onclick="showHide()" checked="checked"/>
                                <label for="chk3">Butikk</label>
                                <br />

                                <input type="checkbox" name="Kategori4" id="chk4" onclick="showHide()" checked="checked"/>
                                <label for="chk4">Uteliv</label>
                                <br />

                                <input type="checkbox" name="Kategori5" id="chk5" onclick="showHide()" checked="checked"/>
                                <label for="chk5">Trening</label>
                                <br />

                                <input type="checkbox" name="Kategori6" id="chk6" onclick="showHide()" checked="checked" value="1" onchange="valueChanged()"/>
                                <label for="chk6">Personlig Utvikling</label>
                                <br />

                                <input type="checkbox" name="Kategori7"  id="chk7" onclick="showHide()" checked="checked" value="1" onchange="valueChanged()"/>
                                <label for="chk7">Campus</label>
                                <br />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
        <!-- Map content-->
        <div class="container-fluid">
            
            <!-- Start row -->
            <div class="row">
                
                 <!-- Start of content on map -->
                <div class="col-md-12" id="mapContent">

                    <!--Container for boxes on map -->
                    <div id="boxContainer">

                        <a href="javascript:switchToggle('acontent');">
                            <div id="a" class="box category7" >
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
                       <a href="javascript:toggleInfoBar();" >
                        <div id="whiteButton" style="left: 0.5%; top: 0.5%; color: gray; background: none; font-size: 2em;"> ☰ </div>
                    </a>
                
                    <!-- End of box container -->
                    </div>
                    
                    <div class="col-md-3" id="infoBar">
                    
                    <!-- Search box HTML -->
                    <br /><br />
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

                     <!-- End of Content Wrapper -->
                    </div>
    
                    <!-- Search function -->                  
                    <?php require'events/search_function.php' ?>

                    <!-- End of infobar -->
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