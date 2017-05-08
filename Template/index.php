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
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
      
    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet" type="text/css">
  </head>
  <body id="home">
      
      <div class="container-fluid">
          <div class="row">
          </div>
      </div>
      
      <div class="nav-wrapper">
      <nav class="navbar navbar-default" data-spy="affix" data-offset-top="280">
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
              <li><a href="kartToPointO.php"><?php echo $lang['MENU_MAP']; ?></a></li>
              <li><a href="events.php"><?php echo $lang['MENU_EVENTS']; ?></a></li>
              <li><a href="campus-main.php"><?php echo $lang['MENU_CAMPUS']; ?></a></li>
              <li><a href="contact.php"><?php echo $lang['MENU_CONTACT']; ?></a></li>
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
          <div class="row row-margin">
              <div class="col-md-5 kartTekst">
                  <h1>Kart</h1>
                  <p>Lorem ipsum dolor sit amet, id exerci labitur usu, tamquam disputationi ea eam. Eu iriure qualisque mei, qui ne quod audiam, eu delenit reprimique scribentur vis. Per clita inermis deterruisset id. Nec quem libris eu, no consul corpora eam. Laboramus voluptatibus ius an, minim noster voluptaria sed no, ne paulo audire definitionem est. Duis ubique accumsan pro ex, aeque consulatu laboramus vix eu, cum te tantas percipitur. Pro eu omnis numquam, ad quis melius nostrum eam. Vim natum rebum temporibus cu, eum liber reformidans ea. Nemore sententiae at cum, cum ea aliquid insolens intellegat, illud recusabo disputationi ex vis.</p>
                  
                  <a href="#" class="btn btn-primary" role="button">Gå til kart</a>
              </div>
              <div class="col-md-7 kartBilde">
                  <img src="kart.jpg" class="img-responsive img-rounded" alt="Kart over nærområdet">
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
                  <h1>Campus</h1>
                  <p>Lorem ipsum dolor sit amet, id exerci labitur usu, tamquam disputationi ea eam. Eu iriure qualisque mei, qui ne quod audiam, eu delenit reprimique scribentur vis. Per clita inermis deterruisset id. Nec quem libris eu, no consul corpora eam. Laboramus voluptatibus ius an, minim noster voluptaria sed no, ne paulo audire definitionem est. Duis ubique accumsan pro ex, aeque consulatu laboramus vix eu, cum te tantas percipitur. Pro eu omnis numquam, ad quis melius nostrum eam. Vim natum rebum temporibus cu, eum liber reformidans ea. Nemore sententiae at cum, cum ea aliquid insolens intellegat, illud recusabo disputationi ex vis.</p>
                  
                  
                  <a href="#" class="btn btn-primary" role="button">Få mer informasjon om campus</a>
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