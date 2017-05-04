<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      
    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">
      <script type="text/javascript">
    
        function showHide(id1, id2){
            var showDiv = document.getElementById(id1);
            var showText = document.getElementById(id2);
            

            if(showDiv)
                showDiv.style.display = 'block';
            if(showText){
                                
                showText.style.display = 'block';
                
            }

        }

          function showAllBoxes(id2){
            var showText = document.getElementById(id2);
            var children = [].slice.call(document.getElementById('boxContainer').getElementsByTagName('*'),0);
            var arrayLength = children.length;
            
            for (var i = 0; i < arrayLength; i++) {
            var name = children[i].getAttribute('id');
            var z = document.getElementById(name);
                if(z)
                z.style.display = 'inline-block';
             } 

              if(showText){
                  showText.style.display = 'none';
                  
              }
              
          }
          
          function check(){
             $('#ba').click(function(){
            $('#bcontent').toggle();
          }); 
          }
          
        
    </script>
      
      
  </head>
  <body id="events">
      
        <!-- Fetches all parts of events -->
      <div class="container-fluid">
        <?php require 'navbar.php' ?>
      </div>
      
        <!-- Event content-->
        <div class="container-fluid">
        
            <div class="row">

                <div class="col-md-3" id="infoBar">
                        <form method="get">
                        <label>
                            <input type="text" name="keywords"  class="form-control" autocomplete="off">
                        </label>
                            <input type="submit" value="<?php echo $lang['MENU_SUBMIT']; ?>" class="btn btn-default">
                        </form>
    
                    <div id="contentWrapper">
                    <p class="allcontent" id="acontent"> <br/>
                    this is a <a href="#" onclick="showAllBoxes('acontent')">Show all</a> 
                    </p>

                    <p class="allcontent" id="bcontent">This is b </p>

                    <p class="allcontent" id="ccontent"> this is c</p>
                    </div>
                    <?php require'events/search_function.php' ?>
                </div>
                
                
                <div class="col-md-9" id="mapContent">
                    
                    <div id="boxContainer">

                        <a href="#" onclick="showHide('a', 'acontent')">
                            <div id="a" class="box" >
                            </div>
                        </a>
                        
                        
                        <a href="#" id="ba" onclick="check()">
                            <div id="b"  class="box">
                            </div>
                        </a>
                        
                        
                        <a href="#" onclick="">
                            <div id="c" class="box">              
                            </div>
                        </a>
                        
                    </div>
                </div>
                
                
            </div>
        
        </div>

        <!-- Fetches footer -->
        <?php require 'footer.php' ?>
      
    <!-- jquery og bootstrap script -->  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
  </body>
</html>