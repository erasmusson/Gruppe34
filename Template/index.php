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
    <html lang="no">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Framside | Campus Fjerdingen </title>
        <link rel="icon" href="pic/logo_bw_1_SYy_icon.ico">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- Custom CSS -->
        <link href="css/custom.css" rel="stylesheet" type="text/css">
    </head>
    <body id="home">

        <!-- HEADER BILDE -->
        <header class="masthead">
            <div class="container-fluid">
                <div class="row">
                    <img src="pic/tester-ting.png" alt="Bilde av Campus Fjerdingen" class="img-responsive forside">
                </div>
            </div>
        </header>
        
        <!-- eksklusiv navigation bar til index.php -->
        <div class="nav-wrapper">
            <div class="navbar navbar-default navbar-static-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <!-- navbaren blir collapsable når skjermen  -->
                        <a class="navbar-brand navbar-brand-centered hidden-xs" href="index.php"><img src="pic/Logo_BW_1.png" alt="Campus Fjerdingen Logotyp" class="img-circle logo"></a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li>
                                <a tabindex="1" href="index.php">
                                    <?php echo $lang['MENU_HOME']; ?>
                                </a>
                            </li>
                            <li>
                                <a tabindex="2" href="map.php">
                                    <?php echo $lang['MENU_MAP']; ?>
                                </a>
                            </li>
                            <li>
                                <a tabindex="3" href="events.php">
                                    <?php echo $lang['MENU_EVENTS']; ?>
                                </a>
                            </li>
                            <li>
                                <a tabindex="4" href="campus-main.php">
                                    <?php echo $lang['MENU_CAMPUS']; ?>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">

                            <li>
                                <a tabindex="5" href="contact.php">
                                    <?php echo $lang['MENU_CONTACT']; ?>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a tabindex="6" class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <?php echo $lang['MENU_LANGUAGE']; ?>
                                        <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="6" href="?lang=no">Norsk</a></li>
                                    <li><a tabindex="7" href="?lang=en">English</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        
        <!-- starten av innholdet i index.php -->
        <div class="container">

            <!-- Campus -->
            <div class="row row-margin">
                <div class="col-md-7 campusBilde">
                    <img src="pic/CampusBilde.jpg" class="img-responsive img-rounded" alt="Bild av Campus Fjerdingen">
                </div>

                <div class="col-md-5 campusTekst">
                    <h1><?php echo $lang['HOMEPAGE_THIRD_TITLE']; ?></h1>
                    <p>
                        <?php echo $lang['HOMEPAGE_THIRD_SECTION']; ?>
                    </p>


                    <a tabindex="8" href="campus-main.php" class="btn btn-primary" role="button">
                        <?php echo $lang['HOMEPAGE_SECOND_BUTTON']; ?>
                    </a>
                </div>
            </div>

            <!-- Events -->
            <div class="row row-margin">
                <div class="col-md-12">
                    <?php require 'events/EventsSlide.php' ?>
                </div>
                
                <a tabindex="9" href="events.php" class="btn btn-primary" role="button" style="">
                        <?php echo $lang['HOMEPAGE_THIRD_BUTTON']; ?>
                </a>
            </div>

            <!-- Map -->
            <div class="row row-margin">
                <div class="col-md-5 kartTekst">
                    <h1><?php echo $lang['HOMEPAGE_FIRST_TITLE']; ?></h1>
                    <p>
                        <?php echo $lang['HOMEPAGE_FIRST_SECTION']; ?>
                    </p>

                    <a tabindex="10" href="map.php" class="btn btn-primary" role="button">
                        <?php echo $lang['HOMEPAGE_FIRST_BUTTON']; ?>
                    </a>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 kartBilde">
                    <img src="pic/mapindex.png" class="img-responsive img-rounded img-shadow" alt="Kart over nærområdet">
                </div>
            </div>
            
            <!-- pusher ned footeren sånn den blir sticky --> 
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