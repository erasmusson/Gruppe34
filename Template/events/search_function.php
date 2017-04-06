

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
                <?php echo $r->openinghours; ?> <br/>
                <a target="_blank" href="<?php echo $r->directions; ?>">Veibeskrivelse</a><br/>
                <button onclick="myFunction()" id="clockButton">Show clock</button>
                <script type="text/javascript">
    
                function myFunction() {
                var x = document.getElementById('a');
                var z = document.getElementById('lol');
                if (x.style.display === 'block') {
                        z.style.display = 'none';
                        x.style.display = 'block';
                } 
                else{ 
                    z.style.display = 'none';
                    x.style.display = 'block';
                }
                            }
                    
                </script>
                
            </div>
    <?php            
            
            }
        
        }
    }
