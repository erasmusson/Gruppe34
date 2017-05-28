<?php 
    require '../connection.php';
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <script type="text/javascript">
            function toggle_visibility(id, id2, id3) {
                var e = document.getElementById(id);
                var a = document.getElementsByClassName(id2);
                var b = document.getElementById(id3);

                if (e.style.display == 'block')
                    e.style.display = 'none';
                else
                    e.style.display = 'block';
                a.style.display = 'none';
                b.style.display = 'none';

            }
        </script>


        <style>
            #kart {
                position: absolute;
                top: 0;
            }
            
            .box {
                width: 50px;
                height: 50px;
                background-color: red;
                position: absolute;
            }
            
            #a {
                top: 0;
                left: 0;
                display: block;
            }
            
            #b {
                top: 0;
                left: 50px;
                display: block;
            }
            
            #c {
                top: 0;
                left: 100px;
                display: block;
            }
            
            #d {
                top: 0;
                left: 150px;
                display: block;
            }
            
            #e {
                top: 0;
                left: 200px;
                display: block;
            }
            
            #result {
                background-color: blue;
                height: auto;
                padding: 20px;
                width: 320px;
                position: absolute;
                bottom: 0;
                left: 0;
            }
            
            #acontent {
                display: none;
            }
            
            #bcontent {
                display: none;
            }
            
            #ccontent {
                display: none;
            }
            
            #lol>* {
                display: block;
            }
            
            .allcontent {
                display: none;
            }
        </style>



        <title></title>

    </head>

    <body>
        <div id="container">
            <img src="../pic/map.jpg" id="kart">

            <div id="lol">

                <a href="#" onclick="toggle_visibility('acontent', 'allcontent', 'sok')">
                    <div id="a" class="box"></div>
                </a>

                <a href="#" onclick="toggle_visibility('bcontent', 'allcontent', 'sok')">
                    <div id="b" class="box"></div>
                </a>

                <a href="#" onclick="toggle_visibility('ccontent', 'allcontent', 'sok')">
                    <div id="c" class="box"></div>
                </a>

            </div>



            <div id="result">
                <!-- sök funktion. -->
                <div id="sok">
                    <?php require '../events/search_function.php' ?>
                </div>

                <br />
                <form class="searchBox" method="get">
                    <label>
                        <input type="text" name="keywords" class="form-control" autocomplete="off" placeholder="<?php echo $lang['SEARCH_SEARCHHERE']; ?>"> </label>
                    <br>
                    <input type="submit" value="Sök"> </form>

                <br/>

                <p class="allcontent" id="acontent">
                    <?php $statement = $connection->query("SELECT * FROM location where name = '4Sound Schous Plass'"); 
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            echo $row['name'];?>
                        <br/>
                        <?= $row['openinghours']; ?>
                            <br/>
                            <?= $row['category']; ?>
                                <br/>
                </p>

                <p class="allcontent" id="bcontent">This is b </p>

                <p class="allcontent" id="ccontent"> this is c</p>

            </div>


        </div>



    </body>

    </html>