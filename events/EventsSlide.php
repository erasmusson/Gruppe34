<!-- Title of events slide-->
<h1 class=text-center><?php echo $lang['HOMEPAGE_SECOND_TITLE']; ?></h1>

<!-- Row start -->
<div class="row">

    <!-- Loop that gets 4 highlighted future events -->                            
    <?php 
        $i = 0;
        $counter = 0;
        while($i < 4){
            $a = $events[$counter];                    
            if($a['starts_at']->isFuture() && $a['highlighted'] == 1) { ?>
            
                <div class="col-md-3 eventcard">
                    <img src="<?= $a['image_path'] ?>" class="image-responsive"  style="height: 200px;">
                    <h4><?= $a['title'] ?></h4>
                    <p><?= $a['starts_at'] ?></p>
                    <p><?= $a['location'] ?></p>
                </div> 
                                    
                <?php
                   $i++;
                   $counter++;
                } 

                else{
                    $counter++;     
                } 
            }                                 
    ?>

<!-- End of row -->
</div>
                              


                      
                  
             

        


