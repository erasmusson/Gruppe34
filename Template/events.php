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

    // Sorts events array in ascending order by date.
    function cmp($a, $b) {
        if ($a['starts_at'] == $b['starts_at']) {
            return 0;
        }
            return ($a['starts_at'] < $b['starts_at']) ? -1 : 1;
        }

    uasort($events,'cmp');
?>

<!-- End of connection -->
      

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
      
  </head>
  <body id="events">
      
        <!-- Fetches all parts of events -->
        <?php require 'navbar.php' ?>
        <?php require 'events/slideshow.php' ?>
        
        <!-- Event content-->
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="updateDiv">
                    <a href="#" id="image2" onclick="window.location.reload(true);" ><img style="height:35px;" src="pic/refresh.png">                                                                 </a> <br/>
                </div>
            </div>
            <?php require 'events/event-content.php' ?>
        </div>

        <!-- Fetches footer -->
        <?php require 'footer.php' ?>
      
    <!-- jquery og bootstrap script -->  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
  </body>
</html>