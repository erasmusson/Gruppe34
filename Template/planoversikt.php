<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
      
    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet" type="text/css">

    
    
          <style>
          
    .affix-top,.affix{
	position: fixed;
}
          
.nav-sidebar { 
    width: 100%;
    padding: 8px 0; 
    border-right: 1px solid #ddd;
}
.nav-sidebar a {
    color: #333;
    -webkit-transition: all 0.08s linear;
    -moz-transition: all 0.08s linear;
    -o-transition: all 0.08s linear;
    transition: all 0.08s linear;
    -webkit-border-radius: 4px 0 0 4px; 
    -moz-border-radius: 4px 0 0 4px; 
    border-radius: 4px 0 0 4px; 
}
.nav-sidebar .active a { 
    cursor: default;
    background-color: #428bca; 
    color: #fff; 
    text-shadow: 1px 1px 1px #666; 
}
.nav-sidebar .active a:hover {
    background-color: #428bca;   
}
.nav-sidebar .text-overflow a,
.nav-sidebar .text-overflow .media-body {
    white-space: nowrap;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis; 
}

@media (min-width: 979px) {
        
  #sidebar.affix-top {
    position: static;
  	margin-top:30px;
  	width:228px;
  }
  
  #sidebar.affix-bottom {
    position: relative;
  }
}

#mainCol h2 {
	padding-top: 55px;
    margin-top: -55px;
}
    
.plan {
    font-size: 22px;
}

      </style>
    
    
    
    
</head>
    
    <a name="toplan1"></a>
<body id="plansikt">
        <?php require 'navbar.php' ?>
      

      <div class="container">

          <div class="row">
              <?php require 'plansidebar.php' ?>
      
      <div class="col-md-9" id="mainCol">
          
          <br>
          
          <h1><?php echo $lang['CAMPUS_TITLE']; ?></h1>
          <br/>
          <br/>
          
          <div class="row">
              <div class="col-md-7">
                  <div class="plan">
                  <?php echo $lang['PLAN_TITLE1']; ?>
                  </div>
                  </br>
                  <img src="pic/Plan1.png"  class="img-responsive img-rounded">
              </div>
          <a name="toplan2"></a>
          </div>
          </br>
          </br>
          
          <hr class="col-sm-12">
          
          </br>
          </br>
          
          <div class="row">
            <div class="col-md-7">
                <div class="plan">
                <?php echo $lang['PLAN_TITLE2']; ?>
                </div>
                </br>
                <img src="pic/Plan2.png" class="img-responsive img rounded">
              </div>
            <a name="toplan3"></a>
          </div>
          
          </br>
          </br>
          
          <hr class="col-sm-12">
          
          </br>
          </br>
          
        <div class="row">
            <div class="col-md-7">
                <div class="plan">
                <?php echo $lang['PLAN_TITLE3']; ?>
                </div>
                </br>
                <img src="pic/Plan3.png" class="img-responsive img rounded">
              </div>
            <a name="toplan4"></a>
          </div>
          
          </br>
          </br>
          
          <hr class="col-sm-12">
          
          </br>
          </br>

        <div class="row">
            <div class="col-md-9">
                <div class="plan">
                </br>
                <?php echo $lang['PLAN_TITLE4']; ?>
                </div>
                </br>
            </div>
            </br>
            <a name="toplan5"></a>
        </div>

        <hr class="col-sm-12">
          
        <div class="row">
            <div class="col-md-7">
                </br>
                <div class="plan">
                <?php echo $lang['PLAN_TITLE5']; ?>
                </div>
                </br>
                <img src="pic/Plan5.png" class="img-responsive img rounded">
              </div>
            <a name="toplan6"></a>
          </div>
          
          </br>
          </br>
          
          <hr class="col-sm-12">
          
          </br>
          </br>
          
        <div class="row">
            <div class="col-md-7">
                <div class="plan">
                <?php echo $lang['PLAN_TITLE6']; ?>
                </div>
                </br>
                <img src="pic/Plan6.png" class="img-responsive img rounded">
              </div>
            <a name="toplanu1"></a>
          </div>
          
          </br>
          </br>
          
          <hr class="col-sm-12">
          
          </br>
          </br>
          
          <div class="row">
            <div class="col-md-7">
                <div class="plan">
                <?php echo $lang['PLAN_TITLEU1']; ?>
                </div>
                </br>
                <img src="pic/PlanU1.png" class="img-responsive img rounded">
              </div>
            <a name="toplanu2"></a>
          </div>
          
          </br>
          </br>
          
          <hr class="col-sm-12">
          
          </br>
          </br>
          
          <div class="row">
            <div class="col-md-7">
                <div class="plan">
               <?php echo $lang['PLAN_TITLEU2']; ?>
                </div>
                </br>
                <img src="pic/PlanU2.png" class="img-responsive img rounded">
              </div>
          </div>
          
          </br>
          </br>
          </br>
          </br>
          </br>

        </div>
      </div>
          <div class="push"></div>
      </div>

     <?php require 'footer.php' ?>
      
    <!-- jquery og bootstrap script -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>