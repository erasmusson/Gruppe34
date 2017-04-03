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
          <div class="col-md-12">
              <h1>Events</h1>
              
              <div class="well">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                      <div class="carousel-inner">
                          <div class="item active">
                        <div class="row">
                            
                            <?php foreach ($events as $event) {?>
                                <div class="col-sm-3"><a href="#x"><img src="<?= $event['image_path'] ?>" alt="Image" class="img-responsive"><h3><?= $event['title'] ?></h3></a>
                                </div>
                             <?php  }?>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                </div>
                      <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                      <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                  </div>
              </div>
              
          </div>

