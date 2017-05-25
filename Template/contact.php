<?php

    require 'connection.php';
    use Carbon\Carbon;
    Carbon::setLocale('no');

    $statement = $connection->prepare('SELECT * FROM events');
    $statement->execute();

    $events = [];
    
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $row['starts_at'] = new Carbon($row['starts_at']);
        $events[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="no">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontakt - subside | Campus Fjerdingen </title>
        <link rel="icon" href="pic/logo_bw_1_SYy_icon.ico">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
      
    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet" type="text/css">
      
  </head>
  <body id="contact">
      
        <!-- Fetches navigationbar -->
        <?php require 'navbar.php' ?>
      
        <div class="container">
            <div class="row">
                
                <!-- Title -->
                <div class="col-md-12"><h1><?php echo $lang['CONTACT_TITLE']; ?></h1></div>
                
                <!-- First name and surname -->
                <form class="form-horizontal" role="form" method="post" action="mailto:dunnat16@student.westerdals.no">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo $lang['CONTACT_NAME']; ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo $lang['CONTACT_NAME_TXT']; ?>" value="">
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label"><?php echo $lang['CONTACT_EMAIL']; ?></label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo $lang['CONTACT_EMAIL_TXT']; ?>" value="">
                        </div>
                    </div>
                    
                    <!-- Send message -->
                    <div class="form-group">
                        <label for="message" class="col-sm-2 control-label"><?php echo $lang['CONTACT_MSG']; ?></label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="4" name="message"></textarea>
                        </div>
                    </div>
                    
                    <!-- Send button -->
                    <div class="form-group">
		                <div class="col-sm-10 col-sm-offset-2">
			                <input id="submit" name="submit" type="submit" value="<?php echo $lang['CONTACT_SEND']; ?>" class="btn btn-primary">
		                </div>
	                </div>
                </form>
            </div>
        </div>
        
        <!-- Fetches footer -->
        <?php require 'footer.php' ?>
      
    <!-- jquery og bootstrap script -->  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
  </body>
</html>