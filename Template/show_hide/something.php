<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

    <title>Show/Hide Categories</title>
    
    
    <style>
    
        .hidden (
            display: none;
        )
        
    </style>
    
    <script type="text/javascript">
    
        function showHide(){
            var checkbox = document.getElementById("chk");
            var hiddeninputs = document.getElementsByClassName("hidden");
            
            
            for(var i = 0; i != hiddeninputs.length; i++){
                if(checkbox.checked){
                    hiddeninputs[i].style.display = "block";
                }
                else{
                    hiddeninputs[i].style.display = "none";
                }
            }
        }
        
    </script>

</head>
<body>

    <form action="#">
        
        <input type="checkbox" name="Kategori" id="chk" onclick="showHide()" checked="checked"/>
        <label for="chk">Helse</label>
        <br />
        <br />
        
        <input type="checkbox" name="Kategori2" id="chk2" onclick="showHide()" checked="checked"/>
        <label for="chk2">Musikk</label>
        <br />
        <br />
        
        <input type="checkbox" name="Kategori3" id="chk3" onclick="showHide()" checked="checked"/>
        <label for="chk3">Butikk</label>
        <br />
        <br />
        
        <input type="checkbox" name="Kategori4" id="chk4" onclick="showHide()" checked="checked"/>
        <label for="chk4">Uteliv</label>
        <br />
        <br />
        
        <input type="checkbox" name="Kategori5" id="chk5" onclick="showHide()" checked="checked"/>
        <label for="chk5">Trening</label>
        <br />
        <br />
        
        <input type="checkbox" name="Kategori4" id="chk4" onclick="showHide()" checked="checked"/>
        <label for="chk4">Personlig Utvikling</label>
        <br />
        <br />
        
        <input type="checkbox" name="Kategori4" id="chk4" onclick="showHide()" checked="checked"/>
        <label for="chk4">Campus</label>
        <br />
        <br />

        
    </form>

</body>
</html>