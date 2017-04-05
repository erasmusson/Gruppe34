<?php

    require 'vendor/autoload.php';
    $port = 8889;
    $username = 'root';
    $password = 'root';
    $name = 'campusfjerdingen';

    $connection = new PDO("mysql:host=localhost;dbname={$name};port={$port}", $username, $password);


    use Carbon\Carbon;
    Carbon::setLocale('no');

    $statement = $connection->prepare('SELECT * FROM events');
    $statement->execute();

    $events = [];
    
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $row['starts_at'] = new Carbon($row['starts_at']);
        $events[] = $row;
    }

    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      
    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">
  </head>
  <body>
      
      <div class="container-fluid" style="background-color:#F44336; height:500px;">
      </div>
      
      <div class="nav-wrapper" style="height:80px;">
      <nav class="navbar navbar-default " data-spy="affix" data-offset-top="497">
          <div class="navbar-header">
              <div class="navbar-brand" href="#">FJERDINGEN</div>
          </div>
          <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="kart.php">Kart</a></li>
              <li><a href="#">Events</a></li>
          </ul>
      </nav>
    </div>
      
      <div class="container">
          <h1>Latest news & updates</h1>
          <div class="row">
              <div class="col-md-4">
                  <div class="thumbnail">
                      <a href="#">
                          <img id="picNews" src="http://placehold.it/300x300">
                          <div class="caption newsTekst">
                              <h3>Konsert</h3>
                              <p>Lorem ipsum...</p>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="col-md-4">
                   <div class="thumbnail">
                      <a href="#">
                          <img id="picNews" src="http://placehold.it/300x300">
                          <div class="caption newsTekst">
                              <h3>Konsert</h3>
                              <p>Lorem ipsum...</p>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="col-md-4">
                   <div class="thumbnail">
                      <a href="#">
                          <img id="picNews" src="http://placehold.it/300x300">
                          <div class="caption newsTekst">
                              <h3>Konsert</h3>
                              <p>Lorem ipsum...</p>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
          
          <?php require'events/EventsSlide.php' ?>
        
      </div>
      
      <footer class="footer">
          <div class="container-fluid">
              <p class="text-muted">Webprosjekt.</p>
          </div>
      </footer>
      
      
      
    <!-- jquery og bootstrap script -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>