
<?php require 'common.php' ?>
<script>
function reload() {
    window.reload();
}
</script>

<div class="nav-wrapper">
<nav class="navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand navbar-brand-centered" tabindex="-1" href="index.php"><img src="pic/Logo_BW_1.png" class="img-circle logo"></a>
        
        </div>
        
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li><a tabindex="1" href="index.php"><?php echo $lang['MENU_HOME']; ?></a></li>
                <li><a tabindex="2" href="map.php"><?php echo $lang['MENU_MAP']; ?></a></li>
                <li><a tabindex="3" href="events.php"><?php echo $lang['MENU_EVENTS']; ?></a></li>
                <li><a tabindex="4" href="campus-main.php"><?php echo $lang['MENU_CAMPUS']; ?></a></li>
            </ul>
            
             <ul class="nav navbar-nav navbar-right">
                <li><a tabindex="5" href="contact.php"><?php echo $lang['MENU_CONTACT']; ?></a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $lang['MENU_LANGUAGE']; ?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a tabindex="6" href="?lang=no" onclick="window.location.reload(true);" >Norsk</a></li>
                    <li><a tabindex="7" href="?lang=en" onclick="window.location.reload(true);" >English</a></li>
                </ul>
              </li>
            </ul>
        </div>
        
    </div>
</nav>
</div>