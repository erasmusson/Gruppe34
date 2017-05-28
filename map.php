<!DOCTYPE html>
<html lang="no">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kart | Campus Fjerdingen </title>
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


            // Scrolls right when click on button.
            function scrollRight() {
                $('#mapContent').scrollLeft('600');
            }
            
        </script>
</head>

<body id="kart">
    <!-- Fetches navigation -->
    <div class="container-fluid">
        <?php require 'navbar.php' ?>
    </div>

    <!-- Map content-->
    <div class="container-fluid">

        <!-- Start row -->
        <div class="row" style="padding-top: 5px;">

            <!-- Menubar on top of map -->
            <!-- Hamburger Menu -->

            <div class="col-md-2">
                <a tabindex="8" href="javascript:toggleInfoBar();">
                    <div id="whiteButton"> <span class="glyphicon glyphicon-menu-hamburger"></span> </div>
                </a>
            </div>
            <div class="col-md-8 hidden-xs"></div>
            <!-- End hamburger Menu -->

            <!-- dropdown menu wrapper -->
            <div class="col-md-2 hidden-xs hidden-sm" id="dropdown-right">
                
                <!-- Zoom in button -->
                <a id="zoomIn" tabindex="9" href="#" onclick="zoomIn()">
                    <button type="button" class="btn"> <span class="glyphicon glyphicon-plus"></span> </button>
                </a>
            <!-- End of Zoom in button -->

                <!-- Reset zoom button -->
                <a id="zoomNormal" tabindex="10" href="#" onclick="zoomReset()">
                    <button  type="button" class="btn"> <span class="glyphicon glyphicon-minus"></span></button>
                </a>
                
            <!-- End of Reset zoom button -->
                
                <!-- Category button -->
                <button tabindex="11" class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $lang['CATEGORY']; ?> <span class="caret"></span></button>
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
            </div>
            <!-- End of Category button -->   
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
                        <input tabindex="12" type="text" name="keywords" class="form-control" autocomplete="off" placeholder="<?php echo $lang['SEARCH_SEARCHHERE']; ?>"> </label>
                    <br>
                    <input tabindex="13" type="submit" value="<?php echo $lang['MENU_SUBMIT']; ?>" class="btn btn-default"> </form>
                <form class="searchBox" method="get">
                    <input tabindex="14" type="submit" name="reset" value="<?php echo $lang['MENU_RESET']; ?>" class="btn btn-default"> </form>
                <button tabindex="15" id="scrollRight" onclick="scrollRight()" class="btn btn-default">
                    <?php echo $lang['MENU_CENTER_MAP']; ?>
                </button>
                <br/>
                <br/>

                <!-- Content Wrapper / Div with information about boxes. -->
                <div id="contentWrapper"> 
                    
                        <span class="allcontent" id="acontent"> 
                       
                            <?php $statement = $connection->query("SELECT * FROM location where name = '4Sound Schous Plass'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/>  
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="aacontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Nedre Lokka'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                         </span> 
                    
                        <span class="allcontent" id="abcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Oslo Bonanza'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="accontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'SYNG'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="adcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Oslo City'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="aecontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'SIO Vulkan'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="afcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Verkstedet'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="agcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Territoriet'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="ahcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Oslo Spektrum'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="aicontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Sats Spektrum'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="ajcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Sentrum Scene'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span>
                    
                        <span class="allcontent" id="akcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Sats Schouss Plass'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="alcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Oslo Kettlebell Gym'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="amcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Skuret Bar og Scene'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="ancontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Stamnia Key Bjorvika'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="aocontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Oslo Performance Center'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="apcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Torggata Bad Treningssenter'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span>
                    
                        <span class="allcontent" id="aqcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Vitus Apoteket Jernbanetorget'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="bcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Campus Brenneriveien'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="ccontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Campus Fjerdingen'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span>
                    
                        <span class="allcontent" id="dcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Campus Vulkan'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span>
                    
                        <span class="allcontent" id="econtent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Actic Storgata'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="fcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Apotektet Gunerius'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span>
                    
                        <span class="allcontent" id="gcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Byporten'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span>
                    
                        <span class="allcontent" id="hcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Ditt apotek Grunerlokka'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span>
                    
                        <span class="allcontent" id="icontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'EVO Grunerlokka'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span>
                    
                        <span class="allcontent" id="jcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Filter Musikk Sentralbord'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="kcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Fitness24Seven'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="mcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Gitarhuset'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span>
                    
                        <span class="allcontent" id="ncontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'GlasMagasinet StorTorvet'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span>
                    
                        <span class="allcontent" id="ocontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Gunerius Shoppingsenter'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="pcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Haralds Gym'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="qcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Hoornas musikk'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="rcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'John Dee'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="scontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'KJ10'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="tcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Klatresenter'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span>
                    
                    <span class="allcontent" id="ucontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Legevakt Oslo'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="vcontent">
                            
                            <?php $statement = $connection->query("SELECT * FROM location where name = 'Mathallen'"); 
                            $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            ?>

                            <b><?php echo $row['name'];?></b> <br/>
                            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $row['openinghours']; ?> <br/>
                            <?php echo $lang['CATEGORY'];  echo ": "; echo $row['category']; ?><br/> 
                            <a target="_blank" href="<?= $row['directions']; ?>"><?php echo $lang['ROAD']; ?></a><br/> 
                            
                            <hr>
                        </span> 
                    
                        <span class="allcontent" id="wcontent">
                            
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
                        <a href="javascript:switchToggle('acontent');" >
                            <div id="a" class="box category2" onmouseover="javascript:hoverstart('atxt');" onmouseout="javascript:hoverend();">
                                <div id="atxt" class="karttxt">4Sound: Schous Plass</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('aacontent');" >
                            <div id="aa" class="box category4" onmouseover="javascript:hoverstart('aatxt');" onmouseout="javascript:hoverend();">
                                <div id="aatxt" class="karttxt">Nedre Lokka</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('abcontent');">
                            <div id="ab" class="box category4" onmouseover="javascript:hoverstart('abtxt');" onmouseout="javascript:hoverend();">
                                <div id="abtxt" class="karttxt">Oslo Bonanza</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('accontent');">
                            <div id="ac" class="box category4" onmouseover="javascript:hoverstart('actxt');" onmouseout="javascript:hoverend();">
                                <div id="actxt" class="karttxt">Syng</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('adcontent');">
                            <div id="ad" class="box category3" onmouseover="javascript:hoverstart('adtxt');" onmouseout="javascript:hoverend();">
                                <div id="adtxt" class="karttxt">Oslo City</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('aecontent');">
                            <div id="ae" class="box category5" onmouseover="javascript:hoverstart('aetxt');" onmouseout="javascript:hoverend();">
                                <div id="aetxt" class="karttxt">SIO Vulkan</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('afcontent');">
                            <div id="af" class="box category4" onmouseover="javascript:hoverstart('aftxt');" onmouseout="javascript:hoverend();">
                                <div id="aftxt" class="karttxt">Verkstedet</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('agcontent');">
                            <div id="ag" class="box category4" onmouseover="javascript:hoverstart('agtxt');" onmouseout="javascript:hoverend();">
                                <div id="agtxt" class="karttxt">Territoriet</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('ahcontent');">
                            <div id="ah" class="box category2" onmouseover="javascript:hoverstart('ahtxt');" onmouseout="javascript:hoverend();">
                                <div id="ahtxt" class="karttxt">Oslo Spektrum</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('aicontent');">
                            <div id="ai" class="box category5" onmouseover="javascript:hoverstart('aitxt');" onmouseout="javascript:hoverend();">
                                <div id="aitxt" class="karttxt">Sats: Spektrum</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('ajcontent');">
                            <div id="aj" class="box category2" onmouseover="javascript:hoverstart('ajtxt');" onmouseout="javascript:hoverend();">
                                <div id="ajtxt" class="karttxt">Sentrum Scene</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('akcontent');">
                            <div id="ak" class="box category5" onmouseover="javascript:hoverstart('aktxt');" onmouseout="javascript:hoverend();">
                                <div id="aktxt" class="karttxt">Sats: Schouss Plass</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('alcontent');">
                            <div id="al" class="box category5" onmouseover="javascript:hoverstart('altxt');" onmouseout="javascript:hoverend();">
                                <div id="altxt" class="karttxt">Oslo Kettlebell Gym</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('amcontent');">
                            <div id="am" class="box category4" onmouseover="javascript:hoverstart('amtxt');" onmouseout="javascript:hoverend();">
                                <div id="amtxt" class="karttxt">Skuret Bar og Scene</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('ancontent');">
                            <div id="an" class="box category5" onmouseover="javascript:hoverstart('antxt');" onmouseout="javascript:hoverend();">
                                <div id="antxt" class="karttxt">Stamina Key Bjørkvika</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('aocontent');">
                            <div id="ao" class="box category5" onmouseover="javascript:hoverstart('aotxt');" onmouseout="javascript:hoverend();">
                                <div id="aotxt" class="karttxt">Oslo Performance Center</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('apcontent');">
                            <div id="ap" class="box category5" onmouseover="javascript:hoverstart('aptxt');" onmouseout="javascript:hoverend();">
                                <div id="aptxt" class="karttxt">Torggata Bad Treningssenter</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('aqcontent');">
                            <div id="aq" class="box category1" onmouseover="javascript:hoverstart('aqtxt');" onmouseout="javascript:hoverend();">
                                <div id="aqtxt" class="karttxt">Vitus Apoteket Jernbanetorget</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('bcontent');">
                            <div id="b" class="box category7" onmouseover="javascript:hoverstart('btxt');" onmouseout="javascript:hoverend();">
                                <div id="btxt" class="karttxt">Campus Brenneriveien</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('ccontent');">
                            <div id="c" class="box category7" onmouseover="javascript:hoverstart('ctxt');" onmouseout="javascript:hoverend();">
                                <div id="ctxt" class="karttxt">Campus Fjerdingen</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('dcontent');">
                            <div id="d" class="box category7" onmouseover="javascript:hoverstart('dtxt');" onmouseout="javascript:hoverend();">
                                <div id="dtxt" class="karttxt">Campus Vulkan</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('econtent');">
                            <div id="e" class="box category5" onmouseover="javascript:hoverstart('etxt');" onmouseout="javascript:hoverend();">
                                <div id="etxt" class="karttxt">Actic: Storgata</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('fcontent');">
                            <div id="f" class="box category1" onmouseover="javascript:hoverstart('ftxt');" onmouseout="javascript:hoverend();">
                                <div id="ftxt" class="karttxt">Apoteket: Gunerius</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('gcontent');">
                            <div id="g" class="box category3" onmouseover="javascript:hoverstart('gtxt');" onmouseout="javascript:hoverend();">
                                <div id="gtxt" class="karttxt">Byporten</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('hcontent');">
                            <div id="h" class="box category1" onmouseover="javascript:hoverstart('htxt');" onmouseout="javascript:hoverend();">
                                <div id="htxt" class="karttxt">Ditt apotek: Grunerløkka</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('icontent');">
                            <div id="i" class="box category5" onmouseover="javascript:hoverstart('itxt');" onmouseout="javascript:hoverend();">
                                <div id="itxt" class="karttxt">EVO: Grunerløkka</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('jcontent');">
                            <div id="j" class="box category2" onmouseover="javascript:hoverstart('jtxt');" onmouseout="javascript:hoverend();">
                                <div id="jtxt" class="karttxt">Filter Musikk Sentralbord</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('kcontent');">
                            <div id="k" class="box category5" onmouseover="javascript:hoverstart('ktxt');" onmouseout="javascript:hoverend();">
                                <div id="ktxt" class="karttxt">Fitness24Seven</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('mcontent');">
                            <div id="m" class="box category2" onmouseover="javascript:hoverstart('mtxt');" onmouseout="javascript:hoverend();">
                                <div id="mtxt" class="karttxt">GitarHuset</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('ncontent');">
                            <div id="n" class="box category3" onmouseover="javascript:hoverstart('ntxt');" onmouseout="javascript:hoverend();">
                                <div id="ntxt" class="karttxt">GlassMagasinet: StorTorvet</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('ocontent');">
                            <div id="o" class="box category3" onmouseover="javascript:hoverstart('otxt');" onmouseout="javascript:hoverend();">
                                <div id="otxt" class="karttxt">Gunerius Shoppingsenter</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('pcontent');">
                            <div id="p" class="box category5" onmouseover="javascript:hoverstart('ptxt');" onmouseout="javascript:hoverend();">
                                <div id="ptxt" class="karttxt">Haralds Gym</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('qcontent');">
                            <div id="q" class="box category2" onmouseover="javascript:hoverstart('qtxt');" onmouseout="javascript:hoverend();">
                                <div id="qtxt" class="karttxt">Hoornas Musikk</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('rcontent');">
                            <div id="r" class="box category2" onmouseover="javascript:hoverstart('rtxt');" onmouseout="javascript:hoverend();">
                                <div id="rtxt" class="karttxt">John Dee</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('scontent');">
                            <div id="s" class="box category4" onmouseover="javascript:hoverstart('stxt');" onmouseout="javascript:hoverend();">
                                <div id="stxt" class="karttxt">KJ10</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('tcontent');">
                            <div id="t" class="box category5" onmouseover="javascript:hoverstart('ttxt');" onmouseout="javascript:hoverend();">
                                <div id="ttxt" class="karttxt">Klatresenter</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('ucontent');">
                            <div id="u" class="box category1" onmouseover="javascript:hoverstart('utxt');" onmouseout="javascript:hoverend();">
                                <div id="utxt" class="karttxt">Legevakt Oslo</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('vcontent');">
                            <div id="v" class="box category3" onmouseover="javascript:hoverstart('vtxt');" onmouseout="javascript:hoverend();">
                                <div id="vtxt" class="karttxt">Mathallen</div>
                            </div>
                        </a>
                        <a href="javascript:switchToggle('wcontent');">
                            <div id="w" class="box category5" onmouseover="javascript:hoverstart('wtxt');" onmouseout="javascript:hoverend();">
                                <div id="wtxt" class="karttxt">Mysore Yoga Oslo</div>
                            </div>
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