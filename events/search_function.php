<!-- Search function -->
<?php 
        $db = new mysqli('localhost', 'root', 'root', 'campusfjerdingen', 8889);

        if(isset($_GET['reset'])){
        }

        if(isset($_GET['keywords'])){
    
            $keywords = $db->escape_string($_GET['keywords']);
            $query = $db->query("
            SELECT *
            FROM location
            WHERE name LIKE '%{$keywords}%' OR category LIKE '%{$keywords}%'");  

?>

<!-- Echoes number of results -->
<?php echo $query->num_rows; ?> 
<?php echo $lang['SEARCH_NUMBERRESULTS']; ?> 
<h4 id="clickReturn"><?php echo $lang['SEARCH_SHOWONMAPCLICK']; ?></h4>
<hr>

<!-- Echoes the results -->
<?php 
    if($query->num_rows){
        while($r = $query->fetch_object()){ ?> 
            <b><?php echo $r->name; ?></b>
            <br/>
            <a href="javascript:hideClassShowId('<?php echo $r->cssid; ?>');">
                <?php echo $lang['SHOW_ON_MAP']; ?>
            </a>
            <br/>
            <?php echo $lang['OPENINGHOURS']; echo ": "; echo $r->openinghours; ?>
            <br/>
            <?php echo $lang['CATEGORY'];  echo ": "; echo $r->category; ?>
            <br/>
            <a target="_blank" href="<?= $r->directions; ?>">
                <?php echo $lang['ROAD']; ?>
            </a>
            <hr>
            <?php            
            
            }        
        }
    }   