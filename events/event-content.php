<!-- Prints out events in the future -->

<div class="row">
    <?php foreach ($events as $event) {
        if($event['starts_at']->isFuture()) { ?>
        <div class="col-md-3 eventcard">
            <img alt="Ikon for evenemang" src="<?= $event['image_path'] ?>" class="image-responsive"  style="height: 150px;">
            <h4><?= $event['title'] ?></h4>
            <p><?= $event['starts_at'] ?></p>
            <p><?= $event['location'] ?></p>
            <p><?= $event['description'] ?></p>
            <a href="<?= $event['link'] ?>" target="_blank"><?php echo $lang['EVENT_LINK']; ?></a>
            <br/>
        </div>   
    <?php } }?>
            
</div>
      