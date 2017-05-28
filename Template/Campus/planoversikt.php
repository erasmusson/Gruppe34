<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Planoversikt | Campus Fjerdingen </title>
    <link rel="icon" href="pic/logo_bw_1_SYy_icon.ico">

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="../css/custom.css" rel="stylesheet" type="text/css">

</head>

<a name="toplan1"></a>

<body id="plansikt">
    <?php require '../navbar.php' ?>


        <div class="container">

            <div class="row">
                <?php require 'plansidebar.php' ?>

                    <div class="col-md-9" id="mainCol">

                        <br>

                        <h1><?php echo $lang['CAMPUS_TITLE']; ?></h1>
                        <br/>
                        <br/>
                        <!-- Plan 1-->
                        <div class="row">
                            <div class="col-md-7">
                                <div class="plan">
                                    <?php echo $lang['PLAN_TITLE1']; ?>
                                </div>
                                <br>
                                <img src="../pic/Plan1.png" alt="Planoversikt over plan 1" class="img-responsive img-rounded">
                            </div>
                            <a name="toplan2"></a>
                        </div>
                        <br>
                        <br>

                        <hr class="col-sm-12">

                        <br>
                        <br>
                        <!-- Plan 2-->
                        <div class="row">
                            <div class="col-md-7">
                                <div class="plan">
                                    <?php echo $lang['PLAN_TITLE2']; ?>
                                </div>
                                <br>
                                <img src="../pic/Plan2.png" alt="Planoversikt over plan 2" class="img-responsive img rounded">
                            </div>
                            <a name="toplan3"></a>
                        </div>

                        <br>
                        <br>

                        <hr class="col-sm-12">

                        <br>
                        <br>
                        <!-- Plan 3-->
                        <div class="row">
                            <div class="col-md-7">
                                <div class="plan">
                                    <?php echo $lang['PLAN_TITLE3']; ?>
                                </div>
                                <br>
                                <img src="../pic/Plan3.png" alt="Planoversikt over plan 3" class="img-responsive img rounded">
                            </div>
                            <a name="toplan4"></a>
                        </div>

                        <br>
                        <br>

                        <hr class="col-sm-12">

                        <br>
                        <br>
                        <!-- Plan 4-->
                        <div class="row">
                            <div class="col-md-9">
                                <div class="plan">
                                    <br>
                                    <?php echo $lang['PLAN_TITLE4']; ?>
                                </div>
                                <br>
                            </div>
                            <br>
                            <a name="toplan5"></a>
                        </div>

                        <hr class="col-sm-12">
                        <!-- Plan 5-->
                        <div class="row">
                            <div class="col-md-7">
                                <br>
                                <div class="plan">
                                    <?php echo $lang['PLAN_TITLE5']; ?>
                                </div>
                                <br>
                                <img src="../pic/Plan5.png" alt="Planoversikt over plan 5" class="img-responsive img rounded">
                            </div>
                            <a name="toplan6"></a>
                        </div>

                        <br>
                        <br>

                        <hr class="col-sm-12">

                        <br>
                        <br>
                        <!-- Plan 6-->
                        <div class="row">
                            <div class="col-md-7">
                                <div class="plan">
                                    <?php echo $lang['PLAN_TITLE6']; ?>
                                </div>
                                <br>
                                <img src="../pic/Plan6.png" alt="Planoversikt over plan 6" class="img-responsive img rounded">
                            </div>
                            <a name="toplanu1"></a>
                        </div>

                        <br>
                        <br>

                        <hr class="col-sm-12">

                        <br>
                        <br>

                        <!-- Plan U1-->
                        <div class="row">
                            <div class="col-md-7">
                                <div class="plan">
                                    <?php echo $lang['PLAN_TITLEU1']; ?>
                                </div>
                                <br>
                                <img src="../pic/PlanU1.png" alt="Planoversikt over plan U1" class="img-responsive img rounded">
                            </div>
                            <a name="toplanu2"></a>
                        </div>

                        <br>
                        <br>

                        <hr class="col-sm-12">

                        <br>
                        <br>
                        <!-- Plan U2-->
                        <div class="row">
                            <div class="col-md-7">
                                <div class="plan">
                                    <?php echo $lang['PLAN_TITLEU2']; ?>
                                </div>
                                <br>
                                <img src="../pic/PlanU2.png" alt="Planoversikt over plan U2" class="img-responsive img rounded">
                            </div>
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                        <div class="col-md-12">
                            <a href="../campus.php" class="btn btn-primary" role="button" style="">
                                <?php echo $lang['CAMPUS_CONTENT_BACK']; ?>
                            </a>
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