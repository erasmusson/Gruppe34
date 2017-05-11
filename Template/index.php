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
    <title>Framside</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
      
    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet" type="text/css">
  </head>
  <body id="home">
      
      <header class="masthead">
          <div class="container-fluid">
          <div class="row">
              <img src="pic/forsidebilde.png" class="img-responsive forside">
          </div>
          </div>
      </header>
      
    <div class="nav-wrapper">
      <div class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand navbar-brand-centered hidden-xs" href="index.php"><img src="pic/Logo_BW_1.png" class="img-circle logo"></a>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span> 
              </button>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
              <li><a href="index.php"><?php echo $lang['MENU_HOME']; ?></a></li>
              <li><a href="map.php"><?php echo $lang['MENU_MAP']; ?></a></li>
              <li><a href="events.php"><?php echo $lang['MENU_EVENTS']; ?></a></li>
              <li><a href="campus-main.php"><?php echo $lang['MENU_CAMPUS']; ?></a></li>
          </ul>
              
          <ul class="nav navbar-nav navbar-right">
              
              <li><a href="contact.php"><?php echo $lang['MENU_CONTACT']; ?></a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $lang['MENU_LANGUAGE']; ?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="?lang=no">Norsk</a></li>
                    <li><a href="?lang=en">English</a></li>
                </ul>
              </li>
          </ul>    
        </div>
      </div>
      </div>   
    </div>
      
      <div class="container">
          <div class="row row-margin">
              <div class="col-md-5 kartTekst">
                  <h1><?php echo $lang['HOMEPAGE_FIRST_TITLE']; ?></h1>
                  <p>Kartet har oversikt over forskjellige steder i nærområdet av campus fjerdingen, du kan velge og deaktivere forksjellige kategorier eller søke etter steder på kartet. du kan trykke på de forskjellige stedene for å få opp informasjon om de.</p>
                  
                  <a href="#" class="btn btn-primary" role="button"><?php echo $lang['HOMEPAGE_FIRST_BUTTON']; ?></a>
              </div>
              <div class="col-md-7 kartBilde">
                  <img src="pic/mapindex.jpg" class="img-responsive img-rounded" alt="Kart over nærområdet" style="width: 300px; text-align: right;">
              </div>
          </div>
    
          
          <div class="row row-margin">
              <div class="col-md-12">
                  <?php require 'events/EventsSlide.php' ?>
              </div>
          </div>
          
          <div class="row row-margin">
              <div class="col-md-7 campusBilde">
                  <img src="pic/CampusBilde.jpg" class="img-responsive img-rounded" alt="Campus Fjerdingen">
              </div>
              
              <div class="col-md-5 campusTekst">
                  <h1><?php echo $lang['HOMEPAGE_THIRD_TITLE']; ?></h1>
                  <p>campus fjerdingen ligger i Christian Kroghs gate 32, campusen er utstyrt med ett stort oppholdsområde, mange arbeidsrom, kantine, bibliotek og til og med en bar. campuset ligger sentralt i oslo ca 5-10 minutter gangavstand fra Oslo S</p>
                  
                  
                  <a href="#" class="btn btn-primary" role="button"><?php echo $lang['HOMEPAGE_SECOND_BUTTON']; ?></a>
              </div>
          </div>
          
          <div class="push"></div>
        </div>
      <?php require 'footer.php' ?>
      
      
    <!-- jquery og bootstrap script -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      
            
    <!-- Custom javascript -->
    <script src="js/script.js"></script>
  </body>
</html>