
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
            <a class="navbar-brand" href="index.php">FJERDINGEN</a>
        
        </div>
        
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php"><?php echo $lang['MENU_HOME']; ?></a></li>
                <li><a href="kart.php"><?php echo $lang['MENU_MAP']; ?></a></li>
                <li><a href="events.php"><?php echo $lang['MENU_EVENTS']; ?></a></li>
                <li><a href="campus-main.php"><?php echo $lang['MENU_CAMPUS']; ?></a></li>
            </ul>
            
             <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $lang['MENU_LANGUAGE']; ?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="?lang=no" onclick="window.location.reload(true);" >Norsk</a></li>
                    <li><a href="?lang=en" onclick="window.location.reload(true);" >English</a></li>
                </ul>
              </li>
            </ul>    
            
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="<?php echo $lang['MENU_SEARCH']; ?>">
                </div>
                <button type="submit" class="btn btn-default"><?php echo $lang['MENU_SUBMIT']; ?></button> 
            </form>
        </div>
        
    </div>
</nav>
</div>