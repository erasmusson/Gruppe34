<style>

    .sidebar-wrapper {
        font-size: 20px; 
    }

</style>


<div class="sidebar-wrapper hidden-xs hidden-sm">
    <div class="col-md-3" id="leftCol">
        <div id="navi" class="clearfix">  
        <nav class="nav-sidebar sidebar-fixed-left">
                <ul class="sidebar-nav-fixed" id="sidebar" style="list-style-type:none">
                      <li class= "active"><a href="#tohome"><?php echo $lang['CAMPUS_SIDEBAR_HOME']; ?></a></li>
                      <li><a href="#tokantine"><?php echo $lang['CAMPUS_SIDEBAR_KANTINA']; ?></a></li>
                      <li><a href="#tobiblio"><?php echo $lang['CAMPUS_SIDEBAR_BIBLIO']; ?></a></li>
                      <li><a href="#tostua"><?php echo $lang['CAMPUS_SIDEBAR_SJENKESTUA']; ?></a></li>
                      <li><a href="#toplan"><?php echo $lang['CAMPUS_SIDEBAR_PLAN']; ?></a></li>
                </ul>
             </nav>
            </div> 
        </div>
    </div>

<script type="text/javascript">
$(document).ready(function() {
            $('#tohome').localScroll({duration:800});
}); 
$(document).ready(function() {
            $('#tokantine').localScroll({duration:800});
}); 
$(document).ready(function() {
            $('#tobiblio').localScroll({duration:800});
}); 
$(document).ready(function() {
            $('#tostua').localScroll({duration:800});
}); 
$(document).ready(function() {
            $('#toplan').localScroll({duration:800});
}); 
</script>