<!-- Function that hides other pins when you want to se location of a specifik-->
<script type="text/javascript">
    
    

    function myFunction(id1) {
        var x = document.getElementById(id1);
        var children = [].slice.call(document.getElementById('lol').getElementsByTagName('*'),0);
        var arrayLength = children.length;          

         for (var i = 0; i < arrayLength; i++) {
            var name = children[i].getAttribute('id');
            var z = document.getElementById(name);

             if(z){
                z.style.display = 'none';
             }
            
            if(x){
                 x.style.display = 'block';
             }
         }
    }   
                      
</script>

<!--Search box -->  
    <form method="get">
        <label>
            <input type="text" name="keywords" autocomplete="off">
        </label>
        <input type="submit" value="Sök">
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
        <br/><?php echo $query->num_rows; ?> resultat funna. 
    </div>

    <!-- Echoes the results -->
    <?php 
        if($query->num_rows){
            while($r = $query->fetch_object()){ ?>
                <div class="result">
                    <br/>
                    <?php echo $r->name; ?> <br/>
                    <?php echo $r->category; ?> <br/>
                    <?php echo $r->openinghours; ?>
                    <h1><?php echo $r->category; ?></h1>
                    <br/>
                    <a target="_blank" href="<?php echo $r->directions; ?>">Veibeskrivelse</a><br/>
                    <button onclick="myFunction('a')" id="clockButton">Show pin</button>
                    
                 </div>
    <?php            
            
            }        
        }
        }   
