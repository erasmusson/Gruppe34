<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
      
    <!-- Custom CSS -->
    <link href="../css/custom.css" rel="stylesheet">
  </head>
  <body>
      
        <?php require '../header.php' ?>
      
      
        <?php require '../EventsSlide.php' ?>
        
        
            
  
      <div class="container">
        <?php require 'event-content.php' ?>
      </div>

        <?php require '../footer.php' ?>
      
    <!-- jquery og bootstrap script -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>