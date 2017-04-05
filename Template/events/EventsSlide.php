    <div class="col-md-12">
              <h1>Events</h1>
              
              <div class="well">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                      <div class="carousel-inner">
                          <div class="item active">
                        <div class="row">
                            
                            <?php  
                            
                                $i = 1;
                                $x = 5;
                            
                                while($i < $x) {
                                    $statement = $connection->query("SELECT * FROM events where id = '$i'"); 
                                    $row = $statement->fetch(PDO::FETCH_ASSOC); 
                                    
                                
                                    ?>
                                    
                                       <div class="col-sm-3">
                                        <img src="<?= $row['image_path']?>" alt="Image" class="img-responsive">
                                        <h3><?= $row['title'] ?></h3> 
                                    </div>
                                
                                    <?php
                                        
                                      $i++;
                                    }
                                    ?>
                            
                            
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

