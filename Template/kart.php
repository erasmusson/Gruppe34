<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Kart</title>
<link href="css/bootstrap.min.css" rel = "stylesheet" type="text/css">
<link href="css/custom.css" rel="stylesheet" type="text/css">
<link href="css/kart.css" rel="stylesheet" type="text/css">
    
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
    
    <!--mats er best og fikk det til :D-->
    
    <script type="text/javascript">                
        function valueChanged()
        {
            for(var i = 0; i < 7 ; i++){
                    if($('#chk' + (i+1)).is(":checked"))   
                        $('.category' +(i+1)).show();
                    else
                        $('.category' +(i+1)).hide();
            }
        }
        
    </script> 
    
    <!--mats klarte fortsatt å fucke det opp med å skrive i feil språk da-->
    
    
    
  <!-- <script type="text/javascript">                
        function valueChanged()
{
    if($('#chk7').is(":checked"))   
            $(".campus").show();
        else
            $(".campus").hide();
        
}
        
    </script> 
-->
    
</head>
    <body>
        <?php require'navbar.php' ?>
                
                <div id="containerkartside">
                 
              
                    <!--Kart boxen og menyen -->
                <div id="kartcontainer">
                    
                    <div id="kartmeny">
                        <div id="flyttdrittentilhoyre">
                        <button class="btn btn-primary pull-right btn-sm RbtnMargin" data-toggle="collapse" data-target="#demo">Kategorier!</button>

                            <div id="demo" class="collapse">
                                <div id="collapsebakgrund">
                                
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

                                    <input type="checkbox" name="Kategori6" id="chk6" onclick="showHide()" checked="checked" value="1" onchange="valueChanged()"/>
                                    <label for="chk6">Personlig Utvikling</label>
                                    <br />
                                    <br />

                                    <input type="checkbox" name="Kategori7"  id="chk7" onclick="showHide()" checked="checked" value="1" onchange="valueChanged()"/>
                                    <label for="chk7">Campus</label>
                                    
                                    
                                    <br />
                                    <br />


                                </form>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="category7" id="ting1"></div>
                    <div class="category6" id="ting2"></div>
                        
                        
                          
                            <div id="infobox">
                                <div id="klikketing">

                                </div>
                            </div>
                            
                      
                </div>
                
                    
            </div>
        <?php require'footer.php'?>
         <!-- jquery og bootstrap script -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>