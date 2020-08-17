<?php 
include('inc/procedure.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LOG CALCULATION</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background: url('asset/img/wood-background.jpg');">
    <div class="container" style="border: 1px solid #000;">
      <div class="col-md-12">
        <div class="col-md-4">
          <div class="col-md-6">
          <img class="img-responsive pull-right" src="asset/img/axe-holder.png">
          </div>
          &nbsp;
          <div class="col-md-6">
          <fieldset>
            <legend>WOOD LOG CALCULATOR</legend>
            <form>
              <div class="col-md-12"><a class="btn btn-primary" href="cut-piece.php" name="btn1">Cut Piece</a> &nbsp;</div>
              <br><br>
              <div class="col-md-12"><a class="btn btn-primary" href="circle-wood.php" name="btn2">Circle Wood</a> &nbsp;</div>
              <br><br>
            </form>
          </fieldset>
          </div>
        </div>
        <div class="col-md-8">
          &nbsp;
        </div>
      </div>
    </div>
  </body>
</html>