<!-- Start container -->
<div class="container-fluid">

    <!-- Start row -->
    <div class="row">
        
        <!-- Slideshow start -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <!-- First item -->
                <div class="item active">
                    <img src="events/concert.jpg" alt="Chania">
                    <div class="carousel-caption">
                        <h5><?php echo $lang['EVENTS_PIC_TITLE1']; ?></h5>
                        <a href="http://www.ticketmaster.no/teater-show/konserter/1221/events"> <?php echo $lang['EVENTS_PIC_LINK']; ?></a>
                    </div>
                </div>

                <!-- Second item -->
                <div class="item">
                    <img src="events/movies.jpg" alt="Chania">
                    <div class="carousel-caption">
                        <h5><?php echo $lang['EVENTS_PIC_TITLE2']; ?></h5>
                        <a href="http://www.nfkino.no/oslo/"> <?php echo $lang['EVENTS_PIC_LINK']; ?></a>
                    </div>
                </div>

                <!-- Third item -->
                <div class="item">
                    <img src="events/soccer.jpg">
                    <div class="carousel-caption">
                        <h5><?php echo $lang['EVENTS_PIC_TITLE3']; ?></h5>
                        <a href="http://www.ticketmaster.no/sport/alle-sport/10004/events"><?php echo $lang['EVENTS_PIC_LINK']; ?></a>
                    </div>
                </div>

            <!-- End wrapper slide -->    
            </div>

            <!-- Circles for indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

        <!-- Slideshow end -->
        </div>

    <!-- End row --> 
    </div>

<!-- End container -->
</div>