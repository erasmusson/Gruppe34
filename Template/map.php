<!DOCTYPE html>
<html lang="no">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kart - subside | Campus Fjerdingen </title>
        <link rel="icon" href="pic/logo_bw_1_SYy_icon.ico">
    <?php require'connection.php'?>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Custom CSS -->
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <!-- JavaScript / Jquery -->
        <script type="text/javascript">
            var currentZoom = 1.0;
            var forrige = '';
            
            // Zooms in on map
            function zoomIn() {
                $('#map').animate({
                    'zoom': currentZoom + .5
                });
            }
            
            // Reset zoom 
            function zoomReset() {
                var currentZoom = 1.0;
                $('#map').animate({
                    'zoom': currentZoom
                });
            }
            
            // Shows or hides div when click on link where implemented.  
            function switchToggle(divId) {
                $("#" + forrige).toggle();
                $("#" + divId).toggle();
                $("#infoBar").show();
                forrige = divId;
            }
            
            // Shows infobar when press on meny
            function toggleInfoBar() {
                $("#infoBar").toggle();
            }
            
            // Shows and hides pins from category       
            function valueChanged() {
                for (var i = 0; i < 7; i++) {
                    if ($('#chk' + (i + 1)).is(":checked")) $('.category' + (i + 1)).show();
                    else $('.category' + (i + 1)).hide();
                }
            }

            // Scrolls right when click on button.
            function scrollRight() {
                $('#mapContent').scrollLeft('600');
            }
        </script>
</head>

<body>
    <!-- Fetches navigation -->
    <div class="container-fluid">
        <?php require 'navbar.php' ?>
    </div>
    
    <!-- Map content-->
    <div class="container-fluid">
        
        <!-- Start row -->
        <div class="row">
            
            <!-- Menubar on top of map -->
            <!-- Hamburger Menu -->

            <div class="col-md-2">
                <a href="javascript:toggleInfoBar();">
                    <div id="whiteButton"> ☰ </div>
                </a>
            </div>
            <div class="col-md-8 hidden-xs"></div>
            
            <!-- Zoom in button -->
            <div class="col-md-2 hidden-xs hidden-sm" id="dropdown-right">
                <button class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $lang['CATEGORY']; ?> <span class="caret"></span></button>

                <a id="zoomIn" href="#" onclick="zoomIn()">
                    <button type="button" class="btn"> + </button>
                </a>
                
                <!-- Reset zoom button -->
                <a id="zoomNormal" href="#" onclick="zoomReset()">
                    <button type="button" class="btn"> - </button>
                </a>
                <ul class="dropdown-menu category-dropdown">
                    <li>
                        <input type="checkbox" name="Kategori1" id="chk1" onclick="showHide()" checked="checked" value="1" onchange="valueChanged()" />
                        <label for="chk">
                            <?php echo $lang['CATEGORY_HEALTH']; ?>
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" name="Kategori2" id="chk2" onclick="showHide()" checked="checked" value="1" onchange="valueChanged()" />
                        <label for="chk2">
                            <?php echo $lang['CATEGORY_MUSIC']; ?>
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" name="Kategori3" id="chk3" onclick="showHide()" checked="checked" value="1" onchange="valueChanged()" />
                        <label for="chk3">
                            <?php echo $lang['CATEGORY_SHOPPING']; ?>
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" name="Kategori4" id="chk4" onclick="showHide()" checked="checked" value="1" onchange="valueChanged()" />
                        <label for="chk4">
                            <?php echo $lang['CATEGORY_PARTY']; ?>
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" name="Kategori5" id="chk5" onclick="showHide()" checked="checked" value="1" onchange="valueChanged()" />
                        <label for="chk5">
                            <?php echo $lang['CATEGORY_WORKOUT']; ?>
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" name="Kategori7" id="chk7" onclick="showHide()" checked="checked" value="1" onchange="valueChanged()" />
                        <label for="chk7">
                            <?php echo $lang['CATEGORY_CAMPUS']; ?>
                        </label>
                    </li>
                </ul>
                <!-- Category button -->

            </div>
            <!-- End of category button -->
        </div>
        <!-- End of menubar on top of map -->
    </div>
    <!-- End of container-->
    
    <!--Start container -->
    <div class="container-fluid">
        <!-- Start row -->
        <div class="row">
            <!-- Start of infobar -->
            <div id="infoBar">
                <!-- Search box HTML -->
                <br />
                <form class="searchBox" method="get">
                    <label>
                        <input type="text" name="keywords" class="form-control" autocomplete="off" placeholder="<?php echo $lang['SEARCH_SEARCHHERE']; ?>"> </label>
                    <br>
                    <input type="submit" value="<?php echo $lang['MENU_SUBMIT']; ?>" class="btn btn-default"> </form>
                <form class="searchBox" method="get">
                    <input type="submit" name="reset" value="<?php echo $lang['MENU_RESET']; ?>" class="btn btn-default"> </form>
                <button id="scrollRight" onclick="scrollRight()" class="btn btn-default">
                    <?php echo $lang['MENU_CENTER_MAP']; ?>
                </button>
                <br/>
                
                <!-- Content Wrapper / Div with information about boxes. -->
                <div id="contentWrapper"> <span class="allcontent" id="acontent"> 
                       
                            <?php $statement = $connection->query("SELECT * FROM location where name = '4Sound Schous Plass'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/>  
                            
                            <hr>
                        </span> <span class="allcontent" id="aacontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Nedre Lokka'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                         </span> <span class="allcontent" id="abcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Oslo Bonanza'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="accontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'SYNG'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="adcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Oslo City'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="aecontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'SIO Vulkan'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="afcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Verkstedet'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="agcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Territoriet'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="ahcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Oslo Spektrum'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="aicontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Sats Spektrum'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="ajcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Sentrum Scene'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="akcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Sats Schouss Plass'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="alcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Oslo Kettlebell Gym'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="amcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Skuret Bar og Scene'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="ancontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Stamnia Key Bjorvika'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="aocontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Oslo Performance Center'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="apcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Torggata Bad Treningssenter'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="aqcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Vitus Apoteket Jernbanetorget'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="bcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Campus Brenneriveien'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="ccontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Campus Fjerdingen'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="dcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Campus Vulkan'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="econtent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Actic Storgata'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="fcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Apotektet Gunerius'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="gcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Byporten'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="hcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Ditt apotek Grunerlokka'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="icontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'EVO Grunerlokka'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="jcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Filter Musikk Sentralbord'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="kcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Fitness24Seven'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="mcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Gitarhuset'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="ncontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'GlasMagasinet StorTorvet'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="ocontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Gunerius Shoppingsenter'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="pcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Haralds Gym'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="qcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Hoornas musikk'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="rcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'John Dee'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="scontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'KJ10'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="tcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Klatresenter'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="ucontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Legevakt Oslo'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="vcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Mathallen'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> <span class="allcontent" id="wcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Mysore Yoga Oslo'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span>
                    <!-- End of Content Wrapper -->
                </div>
                <!-- Search function -->
                <?php require'events/search_function.php' ?>
                    <!-- End of infobar -->
            </div>
            <!-- Start of content on map -->
            <div class="col-md-12" id="mapContent">
                <div id="map" draggable="true">
                    <!--Container for boxes on map -->
                    <div id="boxContainer">
                        <a href="javascript:switchToggle('acontent');">
                            <div id="a" class="box category2"> </div>
                        </a>
                        <a href="javascript:switchToggle('aacontent');">
                            <div id="aa" class="box category4"> </div>
                        </a>
                        <a href="javascript:switchToggle('abcontent');">
                            <div id="ab" class="box category4"> </div>
                        </a>
                        <a href="javascript:switchToggle('accontent');">
                            <div id="ac" class="box category4"> </div>
                        </a>
                        <a href="javascript:switchToggle('adcontent');">
                            <div id="ad" class="box category3"> </div>
                        </a>
                        <a href="javascript:switchToggle('aecontent');">
                            <div id="ae" class="box category5"> </div>
                        </a>
                        <a href="javascript:switchToggle('afcontent');">
                            <div id="af" class="box category4"> </div>
                        </a>
                        <a href="javascript:switchToggle('agcontent');">
                            <div id="ag" class="box category4"> </div>
                        </a>
                        <a href="javascript:switchToggle('ahcontent');">
                            <div id="ah" class="box category2"> </div>
                        </a>
                        <a href="javascript:switchToggle('aicontent');">
                            <div id="ai" class="box category5"> </div>
                        </a>
                        <a href="javascript:switchToggle('ajcontent');">
                            <div id="aj" class="box category2"> </div>
                        </a>
                        <a href="javascript:switchToggle('akcontent');">
                            <div id="ak" class="box category5"> </div>
                        </a>
                        <a href="javascript:switchToggle('alcontent');">
                            <div id="al" class="box category5"> </div>
                        </a>
                        <a href="javascript:switchToggle('amcontent');">
                            <div id="am" class="box category4"> </div>
                        </a>
                        <a href="javascript:switchToggle('ancontent');">
                            <div id="an" class="box category5"> </div>
                        </a>
                        <a href="javascript:switchToggle('aocontent');">
                            <div id="ao" class="box category5"> </div>
                        </a>
                        <a href="javascript:switchToggle('apcontent');">
                            <div id="ap" class="box category5"> </div>
                        </a>
                        <a href="javascript:switchToggle('aqcontent');">
                            <div id="aq" class="box category1"> </div>
                        </a>
                        <a href="javascript:switchToggle('bcontent');">
                            <div id="b" class="box category7"> </div>
                        </a>
                        <a href="javascript:switchToggle('ccontent');">
                            <div id="c" class="box category7"> </div>
                        </a>
                        <a href="javascript:switchToggle('dcontent');">
                            <div id="d" class="box category7"> </div>
                        </a>
                        <a href="javascript:switchToggle('econtent');">
                            <div id="e" class="box category5"> </div>
                        </a>
                        <a href="javascript:switchToggle('fcontent');">
                            <div id="f" class="box category1"> </div>
                        </a>
                        <a href="javascript:switchToggle('gcontent');">
                            <div id="g" class="box category3"> </div>
                        </a>
                        <a href="javascript:switchToggle('hcontent');">
                            <div id="h" class="box category1"> </div>
                        </a>
                        <a href="javascript:switchToggle('icontent');">
                            <div id="i" class="box category5"> </div>
                        </a>
                        <a href="javascript:switchToggle('jcontent');">
                            <div id="j" class="box category2"> </div>
                        </a>
                        <a href="javascript:switchToggle('kcontent');">
                            <div id="k" class="box category5"> </div>
                        </a>
                        <a href="javascript:switchToggle('mcontent');">
                            <div id="m" class="box category2"> </div>
                        </a>
                        <a href="javascript:switchToggle('ncontent');">
                            <div id="n" class="box category3"> </div>
                        </a>
                        <a href="javascript:switchToggle('ocontent');">
                            <div id="o" class="box category3"> </div>
                        </a>
                        <a href="javascript:switchToggle('pcontent');">
                            <div id="p" class="box category5"> </div>
                        </a>
                        <a href="javascript:switchToggle('qcontent');">
                            <div id="q" class="box category2"> </div>
                        </a>
                        <a href="javascript:switchToggle('rcontent');">
                            <div id="r" class="box category2"> </div>
                        </a>
                        <a href="javascript:switchToggle('scontent');">
                            <div id="s" class="box category4"> </div>
                        </a>
                        <a href="javascript:switchToggle('tcontent');">
                            <div id="t" class="box category5"> </div>
                        </a>
                        <a href="javascript:switchToggle('ucontent');">
                            <div id="u" class="box category1"> </div>
                        </a>
                        <a href="javascript:switchToggle('vcontent');">
                            <div id="v" class="box category3"> </div>
                        </a>
                        <a href="javascript:switchToggle('wcontent');">
                            <div id="w" class="box category5"> </div>
                        </a>
                        <!-- End of box container -->
                    </div>
                    <!-- End of map -->
                </div>
                <!-- End of map content -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </div>
    <!-- Fetches footer -->
    <?php require'footer.php' ?>
        <!-- jquery og bootstrap script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
</body>

</html>