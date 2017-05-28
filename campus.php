<!DOCTYPE html>
<html lang="no">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Campus | Campus Fjerdingen </title>
    <link rel="icon" href="pic/logo_bw_1_SYy_icon.ico">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet" type="text/css">

</head>

<a name="tohome"></a>

<body id="campus">

    <?php require 'navbar.php' ?>

        <div class="container">

            <div class="row">
                <!-- Fetch sidebar -->

                <?php require 'sidebar.php' ?>

                    <div class="col-md-9" id="mainCol">

                        <br>

                        <!-- Campus information -->
                        <h1><?php echo $lang['CAMPUS_TITLE']; ?></h1>
                        <br/>
                        <br/>

                        <div class="row">
                            <div class="col-md-8">
                                <h2><?php echo $lang['CAMPUS_UNDER_TITLE']; ?></h2>
                                <br/>
                                <p>
                                    <?php echo $lang['CAMPUS_CONTENT']; ?>
                                </p>
                                <br/>
                                <br/>
                            </div>
                            <div class="col-md-4">
                                <img alt="Bild av fjerdingen" src="pic/Fjerdingen_2.jpg" class="img-responsive img-rounded">
                                <a name="tokantine"></a>
                            </div>
                        </div>

                        <hr class="col-sm-12">

                        <!-- Canteen information -->
                        <div class="row">
                            <div class="col-md-4">
                                <img alt="Bild av kantina" src="pic/Fjerdingen_Kantina1.jpg" class="img-responsive img-rounded">
                            </div>
                            <br/>
                            <div class="col-md-8">
                                <h2><?php echo $lang['CAMPUS_UNDER_TITLE2']; ?></h2>

                                <p>
                                    <?php echo $lang['CAMPUS_KANTINA']; ?>
                                </p>
                                <p>
                                    <?php echo $lang['KANTINA_OPEN']; ?>
                                </p>
                                <a name="tobiblio"></a>
                            </div>
                        </div>

                        <hr class="col-sm-12">

                        <!-- Library information -->
                        <div class="row">
                            <div class="col-md-8">
                                <h2><?php echo $lang['CAMPUS_UNDER_TITLE3']; ?></h2>
                                <p>
                                    <?php echo $lang['CAMPUS_BIBLIO']; ?>
                                </p>
                                <p>
                                    <?php echo $lang['BIBLIO_OPEN']; ?>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <img alt="Bild av Bibliotek" src="pic/Fjerdingen_1.jpg" class="img-responsive img-rounded">
                                <a name="tostua"></a>
                            </div>
                        </div>

                        <hr class="col-sm-12">

                        <!-- Bar information -->
                        <div class="row">
                            <div class="col-md-4">
                                <img alt="Bild av bar" src="pic/Sjenkestua_1.jpg" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-8">
                                <h2><?php echo $lang['CAMPUS_UNDER_TITLE4']; ?></h2>
                                <p>
                                    <?php echo $lang['CAMPUS_SJENKESTUA']; ?>
                                </p>
                                <p>
                                    <?php echo $lang['SJENKESTUA_OPEN']; ?>
                                </p>
                            </div>
                        </div>
                        <hr class="col-sm-12">

                        <!-- Campus information -->
                        <div class="row">
                            <div class="col-md-8">
                                <h2><a name="toplan"></a><?php echo $lang['CAMPUS_UNDER_TITLE5']; ?></h2>
                                <p>
                                    <?php echo $lang['CAMPUS_PLAN']; ?>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <img alt="Bild av fjerdingen" src="pic/Fjerdingen_Plan.jpg" class="img-responsive img-rounded">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="push"></div>
        </div>

        <?php require 'footer.php' ?>

            <!-- jquery og bootstrap script -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/script.js"></script>
</body>

</html>