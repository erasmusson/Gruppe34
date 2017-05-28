<!-- Connects with database and fetches all from table events -->
<?php

    require 'connection.php';
    
    use Carbon\Carbon;
    Carbon::setLocale('no');

    if(isSet($_GET['lang']))
{
$lang = $_GET['lang'];
    
// registrer en session også setter inn en cookie.
$_SESSION['lang'] = $lang;
    
setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'en';
}


    switch ($lang) {
    case 'no':
        $statement = $connection->prepare('SELECT * FROM events');
        $statement->execute();  
    break;
            
    case 'en':
        $statement = $connection->prepare('SELECT * FROM eventseng');
        $statement->execute();
    break;
            
    default:
        $statement = $connection->prepare('SELECT * FROM eventseng');
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
    <html lang="no">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Events | Campus Fjerdingen </title>
        <link rel="icon" href="pic/logo_bw_1_SYy_icon.ico">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/custom.css" rel="stylesheet"> </head>

    <body id="events">
        <!-- Navbar -->
        <div class="container-fluid">
            <?php require 'navbar.php' ?>
        </div>
        <!-- Slideshow -->
        <div class="container-fluid">
            <?php require 'events/slideshow.php' ?>
        </div>

        <!-- Event content-->
        <div class="container event-container">
            <div class="row">
                <div class="col-md-12" id="updateDiv">
                    <a tabindex="11" href="#" id="image2" onclick="window.location.reload(true);"><img alt="Uppdateringssymbol" style="height:35px;" src="pic/refresh.png"> </a>
                    <br/>
                </div>
            </div>
            <?php require 'events/event-content.php' ?>
                <div class="push"></div>
        </div>
        <!-- Fetches footer -->
        <?php require 'footer.php' ?>
            <!-- jquery og bootstrap script -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/script.js"></script>
    </body>

    </html>