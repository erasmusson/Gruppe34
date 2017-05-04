<!-- Function that hides other pins when you want to se location of a specifik-->
<script type="text/javascript">

    function myFunction(id1) {
        var x = document.getElementById(id1);
        var children = [].slice.call(document.getElementById('boxContainer').getElementsByTagName('*'),0);
        var arrayLength = children.length;          

         for (var i = 0; i < arrayLength; i++) {
            var name = children[i].getAttribute('id');
            var z = document.getElementById(name);

             if(z){
                z.style.display = 'none';
             }
         }
        
        if(x){
                 x.style.display = 'block';
             }
    }   
    

                      
</script>

<!--Search box -->  
    <form method="get">
        <label>
            <input type="text" name="keywords"  class="form-control" autocomplete="off">
        </label>
        <input type="submit" value="<?php echo $lang['MENU_SUBMIT']; ?>" class="btn btn-default">
        <a href="https://vg.no"><button class="btn btn-default"><?php echo $lang['MENU_SUBMIT']; ?></button></a>
    </form>
    

    <!-- Search function -->
    <?php 
        $db = new mysqli('localhost', 'root', 'root', 'campusfjerdingen', 8889);

        if(isset($_GET['keywords'])){
    
        $keywords = $db->escape_string($_GET['keywords']);
        $query = $db->query("
        SELECT *
        FROM location
        WHERE name LIKE '%{$keywords}%' OR category LIKE '%{$keywords}%'");  
    ?>

    <!-- Echoes number of results -->
    <div class="result_count">
        <br><?php echo $query->num_rows; ?> resultat funna. 
        <hr>
    </div>

    <!-- Echoes the results -->
    <?php 
        if($query->num_rows){
            while($r = $query->fetch_object()){ ?>
                <div class="result">

                    <b><?php echo $r->name; ?></b><br/>
                    <?php echo $lang['CATEGORY'];  echo ": "; echo $r->category; ?> <br/>
                    <?php echo $lang['OPENINGHOURS']; echo ": "; echo $r->openinghours; ?><br/>
                    <a target="_blank" href="<?php echo $r->directions; ?>"><?php echo $lang['ROAD']; ?></a><br/>
                    <button onclick="myFunction('a')" id="clockButton"><?php echo $lang['SHOW_ON_MAP']; ?></button>
                    <hr>
                    
                 </div>
    <?php            
            
            }        
        }
        }   
