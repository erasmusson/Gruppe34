<style>

    .sidebar-wrapper {
        font-size: 20px; 
    }

</style>


<div class="sidebar-wrapper hidden-xs hidden-sm">
    <div class="col-md-3" id="leftCol">
        <div id="navi" class="clearfix">  
        <nav class="nav-sidebar sidebar-fixed-left">
                <ul class="sidebar-nav-fixed affix" id="sidebar" style="list-style-type:none">
                    <li class= "active"><a href="#toplan1"><?php echo $lang['FJERDINGEN_PLAN1']; ?></a></li>
                    <li><a href="#toplan2"><?php echo $lang['FJERDINGEN_PLAN2']; ?></a></li>
                    <li><a href="#toplan3"><?php echo $lang['FJERDINGEN_PLAN3']; ?></a></li>
                    <li><a href="#toplan4"><?php echo $lang['FJERDINGEN_PLAN4']; ?></a></li>
                    <li><a href="#toplan5"><?php echo $lang['FJERDINGEN_PLAN5']; ?></a></li>
                    <li><a href="#toplan6"><?php echo $lang['FJERDINGEN_PLAN6']; ?></a></li>
                    <li><a href="#toplanu1"><?php echo $lang['FJERDINGEN_PLANU1']; ?></a></li>
                    <li><a href="#toplanu2"><?php echo $lang['FJERDINGEN_PLANU2']; ?></a></li>
                </ul>
             </nav>
            </div> 
        </div>
    </div>

<script type="text/javascript">
$(document).ready(function() {
            $('#toplan1').localScroll({duration:800});
}); 
$(document).ready(function() {
            $('#toplan2').localScroll({duration:800});
}); 
$(document).ready(function() {
            $('#toplan3').localScroll({duration:800});
});
$(document).ready(function() {
            $('#toplan4').localScroll({duration:800});
});
$(document).ready(function() {
            $('#toplan5').localScroll({duration:800});
});
$(document).ready(function() {
            $('#toplan6').localScroll({duration:800});
});
$(document).ready(function() {
            $('#toplanu1').localScroll({duration:800});
});
$(document).ready(function() {
            $('#toplanu2').localScroll({duration:800});
});
</script>