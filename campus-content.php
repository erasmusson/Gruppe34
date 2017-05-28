<!DOCTYPE html>
<html lang="no">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Campus innehåll | Campus Fjerdingen </title>
    <link rel="icon" href="pic/logo_bw_1_SYy_icon.ico">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet" type="text/css">

</head>

<body>

    <?php require 'navbar.php' ?>
        <div class="container">
            <br>

            <!-- Information about Campus Fjerdingen -->
            <div class="row">
                <div class="col-md-8">
                    <h2><?php echo $lang['CAMPUS_TITLE']; ?></h2>
                    <br>
                    <p>
                        <?php echo $lang['FJERDINGEN_CONTENT']; ?>
                    </p>
                    <br>

                </div>
                <div class="col-md-4">
                    <br>
                    <br>
                    <br>
                    <img alt="Bild av Campus Fjerdingen" src="pic/Fjerdingen_2.jpg" class="img-responsive img-rounded">
                </div>
                <div class="col-md-12 open">
                    <?php echo $lang['FJERDINGEN_OPEN']; ?>
                </div>

                <!-- Button back to Campus Main -->
                <div class="col-md-12">
                    <br>
                    <a href="campus.php" class="btn btn-primary" role="button" style="">
                        <?php echo $lang['CAMPUS_CONTENT_BACK']; ?>
                    </a>
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