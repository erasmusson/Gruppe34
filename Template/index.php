<?php

    require 'connection.php';
    use Carbon\Carbon;
    Carbon::setLocale('no');

    $statement = $connection->prepare('SELECT * FROM events');
    $statement->execute();

    $events = [];
    
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $row['starts_at'] = new Carbon($row['starts_at']);
        $events[] = $row;
    }

    require 'common.php';
    ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $lang['PAGE_TITLE']; ?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      
    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">
      
  </head>
  <body>
      
      <div class="container-fluid">
          <div class="row">
            <img class="img-responsive" src="events/concert.jpg">
          </div>
      </div>
      
      <div class="nav-wrapper">
      <nav class="navbar navbar-default " data-spy="affix" data-offset-top="280">
          <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span> 
              </button>
              <div class="navbar-brand" href="index.php">FJERDINGEN</div>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">   
              <li><a href="index.php"><?php echo $lang['MENU_HOME']; ?></a></li>
              <li><a href="kart.php"><?php echo $lang['MENU_MAP']; ?></a></li>
              <li><a href="events.php"><?php echo $lang['MENU_EVENTS']; ?></a></li>
              <li><a href="campus-main.php"><?php echo $lang['MENU_CAMPUS']; ?></a></li>
          </ul>
              
          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $lang['MENU_LANGUAGE']; ?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="?lang=no">Norsk</a></li>
                    <li><a href="?lang=en">English</a></li>
                </ul>
              </li>
          </ul>    
              
          <form class="navbar-form navbar-right">
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="<?php echo $lang['MENU_SEARCH']; ?>">
              </div>
              <button type="submit" class="btn btn-default"><?php echo $lang['MENU_SUBMIT']; ?></button> 
          </form>
        </div>
      </div>
      </nav>   
    </div>
      
      <div class="container">
          <h1><?php echo $lang['HOMEPAGE_FIRST_TITLE']; ?></h1>
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
          
          <div class="row">
              <div class="col-md-12">
                  <?php require 'events/EventsSlide.php' ?>
              </div>
          </div>
      </div>
      
      <?php require 'footer.php' ?>
      
      
    <!-- jquery og bootstrap script -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>