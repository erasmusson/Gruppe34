<!-- Connects with database and fetches all from table events -->
<?php

    require 'connection.php';
    
    use Carbon\Carbon;
    Carbon::setLocale('no');

    $language = ($_COOKIE['lang']!='' ? $_COOKIE['lang'] : ''); 

    switch ($language) {
    case 'no':
        $statement = $connection->prepare('SELECT * FROM events');
        $statement->execute();
    break;
            
    case 'en':
    $statement = $connection->prepare('SELECT * FROM eventseng');
    $statement->execute();
    break;
            
    default:
        $statement = $connection->prepare('SELECT * FROM events');
        $statement->execute();
    }
    

    $events = [];
    
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $row['starts_at'] = new Carbon($row['starts_at']);
        $events[] = $row;
    }

?>

<!-- End of connection -->
      

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      
    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">
      
  </head>
  <body>
      
        <!-- Fetches all parts of events -->
        <?php require 'navbar.php' ?>
        <?php require 'events/slideshow.php' ?>
        
        <!-- Event content-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="#" onclick="window.location.reload(true);" ><h5>Update</h5></a> <br/>
                </div>
            </div>
            <?php require 'events/event-content.php' ?>
        </div>

        <!-- Fetches footer -->
        <?php require 'footer.php' ?>
      
    <!-- jquery og bootstrap script -->  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
  </body>
</html>