
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
        SELECT title, description, category
        FROM events
        WHERE title LIKE '%{$keywords}%' OR description LIKE '%{$keywords}%' OR category LIKE '%{$keywords}%' OR location LIKE '%{$keywords}%'");
    
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
                <?php echo $r->title; ?> <br/>
                <?php echo $r->description; ?> <br/>
                <?php echo $r->category; ?> <br/>
            </div>
    <?php            
            
            }
        
        }
    }
