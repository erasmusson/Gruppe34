<?php 
    require 'connection.php';
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
                function toggle_visibility(id, id2, id3, id4) {
                var e = document.getElementById(id);
                var a = document.getElementById(id2);
                var b = document.getElementById(id3);
                var c = document.getElementById(id4);
                   if(e.style.display == 'block')
                        e.style.display = 'none';
                   else
                        e.style.display = 'block';
                        a.style.display = 'none';
                        b.style.display = 'none';
                        c.style.display = 'none';
                }
            
                function toggle_visibility1(id) {
                var e = document.getElementById(id);
                   if(e.style.display == 'block')
                        e.style.display = 'none';
                   else
                        e.style.display = 'block';
                } 
    </script>
    
    <style>
    
    
        #kart{
            position:absolute;
            top:0;
        }
        .box{
            
            width: 50px;
            height: 50px;
            background-color: red;
            position: absolute;
        }
        
        #a{
            top: 0;
            left: 0;
            display: block;
        }
        
         #b{
            top: 0;
            left: 50px;
             display: block;
        }
        
         #c{
            top: 0;
            left: 100px;
             display: block;
        }
        
        #d{
            top: 0;
            left: 150px;
             display: block;
        }
        
        #e{
            top: 0;
            left: 200px;
             display: block;
        }
        
        #result{
            
            background-color: blue;
            height: auto;
            padding: 20px;
            width: 320px;
            position: absolute;
            bottom: 0;
            left: 0;
        }
        
        #acontent{
            display: none;
        }
        

        #bcontent{
            
            display: none;
        }
        
        #ccontent{
            
            display: none;
        }
        
        #lol>* {
            
            display: block;
        }

        

    </style>


    
<title>New HMTL document by NewJect</title>

</head>
<body>
<div id="container">
    <img src="kart.jpg" id="kart">
    <div id="lol">
        <a href="#meny" onclick="toggle_visibility('acontent', 'bcontent', 'ccontent', 'sok')"><div id="a" class="box"></div></a>
        <a href="#meny" onclick="toggle_visibility('bcontent', 'acontent', 'ccontent', 'sok')"><div id="b" class="box"></div></a>
        <a href="#meny" onclick="toggle_visibility('ccontent', 'bcontent', 'acontent', 'sok')"><div id="c" class="box"></div></a>
        <a href="#meny" onclick="toggle_visibility('ccontent', 'bcontent', 'acontent', 'sok')"><div id="d" class="box"></div></a>
         <a href="#meny" onclick="toggle_visibility('acontent', 'bcontent', 'ccontent', 'sok')"><div id="e" class="box"></div></a>
    </div>
    
    <div id="result">
        <a href="#sok" onclick="toggle_visibility('sok', 'bcontent', 'acontent', 'ccontent')">Sök!</a>
        <div id="sok"><?php require 'events/search_function.php' ?></div>
        <p id="acontent">
           <?php $statement = $connection->query("SELECT * FROM location where name = '4Sound Schous Plass'"); 
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            echo $row['name'];?> <br/>
            <?= $row['openinghours']; ?> <br/>
            <?= $row['category']; ?><br/>   
        </p>
        <p id="bcontent">This is b </p>
        <p id="ccontent"> this is c</p>
        
    </div>
</div>

</body>
</html>