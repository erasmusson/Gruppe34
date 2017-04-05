<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Kart</title>
<link href="css/bootstrap.min.css" rel = "stylesheet">
<link href="css/custom.css" rel="stylesheet">
<link href="css/kart.css" rel="stylesheet">
    
</head>
    <body>
        <?php require'navbar.php' ?>
         
        <div class="container-fluid" id="idkwhatimdoing">
            
            <div class= "row">
                
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-9">
                    <div id="kartmeny">
                        <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Kategorier
                                  
                              <span class="caret"></span></button>
                              <ul class="dropdown-menu">
                                <li><a href="#">kategori 1</a></li>
                                <li><a href="#">kategori 2</a></li>
                                <li><a href="#">kategori 3</a></li>
                              </ul>
                        </div>

                    </div>
                    <div id="rod"></div>
                </div>
            </div>
        </div>
        
         <!-- jquery og bootstrap script -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>