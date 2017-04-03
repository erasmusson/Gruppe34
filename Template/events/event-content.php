<?php

    require '../vendor/autoload.php';
    use Carbon\Carbon;
    Carbon::setLocale('no');
    
    $port = 8889;
    $username = 'root';
    $password = 'root';
    $name = 'event';

    $connection = new PDO("mysql:host=localhost;dbname={$name};port={$port}", $username, $password);

    $statement = $connection->prepare('SELECT * FROM events');
    $statement->execute();

      $events = [];
    
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $row['starts_at'] = new Carbon($row['starts_at']);
        $events[] = $row;
    }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template</title>

  </head>
  <body>
        
        <div class="row">

        <?php foreach ($events as $event) {
            if($event['starts_at']->isFuture()) { ?>

            <div class="col-md-3 eventcard">
                <img src="<?= $event['image_path'] ?>" class="image-responsive"  style="max-height: 150px;">
                <h4><?= $event['title'] ?></h4>
                <p><?= $event['starts_at'] ?></p>
                <p><?= $event['location'] ?></p>
                <p><?= $event['description'] ?></p>
            </div>   

            <?php } }?>

            
        </div>
      
  </body>
</html>