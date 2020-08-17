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

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background: url('asset/img/wood-background.jpg'); overflow-x:hidden;">
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
        <form class="form" action="processor/insertdb.php" method="POST">
          <div class="col-md-12 col-md-offset-0" align="center" style="text-align: center;">
            <center>
              <div class="col-md-3">
                <center>Length (Feet)</center>
                <input type="text" id="txt1" name="length" class="form-control" placeholder="In" onkeypress="return isNumberKey(event)" required="true">
              </div>

              <div class="col-md-6">
                  <center>GIRTH (GR)</center>
                  <div class="col-md-6">
                    <input type="text" id="txt2" name="gln" class="form-control" placeholder="gln (Feet)" onkeypress="return isNumberKey(event)" required="true">
                  </div>
                  <div class="col-md-6">
                    <input type="text" id="txt3" name="gin" class="form-control" placeholder="gin (inch)" onkeypress="return isNumberKey(event)" required="true">
                  </div>
              </div>

              <div class="col-md-1"><br><input type="submit" name="btn" class="btn btn-primary" value="Save to Database"></div>
            </center>
          </div>
          <br><br><br>
          <hr>
          <div class="container">
            <div class="col-md-3">
              <div class="row"><div class="col-md-2">GR</div><div class="col-md-10"><input type="text" id="txtans1" name="gr" class="form-control" placeholder="GR" required="true" readonly="true"></div></div>
              <br>
              <div class="row"><div class="col-md-2">CFT</div><div class="col-md-10"><input type="text" id="txtans2" name="cft" class="form-control" placeholder="CFT" required="true" readonly="true"></div></div>
              <br>
              <div class="row"><div class="col-md-2">CMT</div><div class="col-md-10"><input type="text" id="txtans3" name="cmt" class="form-control" placeholder="CMT" required="true" readonly="true"></div></div>
              <br>
              <div class="row"><div class="col-md-2">Client</div><div class="col-md-10"><input type="text" id="client" name="client" class="form-control" placeholder="Client"  required="true"></div></div>
              <br>
            </div>
            <div class="col-md-4">

                <?php

                  $message;
                  if(isset($_GET['result'])){
                    if ($_GET['result'] == 1) {
                      # code to set message...
                      $message = "New record has been sucessfully Added";
                      echo '<div class="alert alert-success alert-dismissable fade in">
                               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Success!</strong><br> '.$message.'.
                            </div>';
                    }elseif ($_GET['result'] == 0) {
                      # code to set message...
                      $message = "Unable to Add Record";
                      echo '<div class="alert alert-warning alert-dismissable fade in">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Warning!</strong> '.$message.'.
                            </div>';
                    }else{
                      $message = "";
                    }
                  }
                  if(isset($_GET['update'])){
                    if ($_GET['update'] == 1) {
                      # code to set message...
                      $message = "Record has been sucessfully Updated";
                      echo '<div class="alert alert-success alert-dismissable fade in">
                               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Success!</strong><br> '.$message.'.
                            </div>';
                    }elseif ($_GET['update'] == 0) {
                      # code to set message...
                      $message = "Unable to Update Record";
                      echo '<div class="alert alert-warning alert-dismissable fade in">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Warning!</strong> '.$message.'.
                            </div>';
                    }else{
                      $message = "";
                    }
                  }
                  if(isset($_GET['delete'])){
                    if ($_GET['delete'] == 1) {
                      # code to set message...
                      $message = "Record has been sucessfully Deleted";
                      echo '<div class="alert alert-success alert-dismissable fade in">
                               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Success!</strong><br> '.$message.'.
                            </div>';
                    }elseif ($_GET['delete'] == 0) {
                      # code to set message...
                      $message = "Unable to Delete Record";
                      echo '<div class="alert alert-warning alert-dismissable fade in">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Warning!</strong> '.$message.'.
                            </div>';
                    }else{
                      $message = "";
                    }
                  }
                ?>

            </div>
          </div>
        </form>
        </div>
      </div>

      <div class="row" style="border-bottom: 1px solid #ccc;"></div>

      <div class="col-md-12">
        &nbsp;

            <fieldset>
            <legend>Previous Calculation</legend>
              <div class="row">
                <table id="result" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SrNo</th>
                                <th>Length</th>
                                <th>Gln</th>
                                <th>Gin</th>
                                <th>Gr</th>
                                <th>CFT</th>
                                <th>CMT</th>
                                <th>Client</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>SrNo</th>
                                <th>Length</th>
                                <th>Gln</th>
                                <th>Gin</th>
                                <th>Gr</th>
                                <th>CFT</th>
                                <th>CMT</th>
                                <th>Client</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                          <?php
                          $getdata = getnumrow('*', 'circle', '');
                          if ($getdata > 0) {
                            $data = select('*', 'circle', 'id > 0 ORDER BY `id` DESC');
                            foreach ($data as $key => $value) {
                              echo '<tr>
                                      <td>'.$value['id'].'</td>
                                      <td>'.$value['length'].'</td>
                                      <td>'.$value['gln'].'</td>
                                      <td>'.$value['gin'].'</td>
                                      <td>'.$value['gr'].'</td>
                                      <td>'.$value['cft'].'</td>
                                      <td>'.$value['cmt'].'</td>
                                      <td>'.$value['client'].'</td>
                                      <td>'.$value['insdate'].'</td>
                                      <td><a data-toggle="modal" data-target="#myModal" data-id="'.$value['id'].'" data-length="'.$value['length'].'" data-gln="'.$value['gln'].'" data-gin="'.$value['gin'].'" data-client="'.$value['client'].'">Edit</a> | <a href="processor/deletedb.php?id='.$value['id'].'">Delete</a></td>
                                    </tr>';
                            }
                          }
                          ?>
                        </tbody>
                </table>
              </div>
            </fieldset>
            <div class="row pull-right"><a href="report/circle-wood.php" class="btn btn-primary">Export</a></div>
            <br><br>
      </div>
    </div>

    <!-- Modal Popup -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Update</h4>
          </div>
          <div class="modal-body">
            <form action="processor/updatedb.php" method="POST">
              <input type="hidden" name="id" class="id">
              <input type="number" id="popuplength" name="length" class="length form-control" placeholder="Length (Feet)" required="true"><br>
              <input type="number" id="popupgln" name="gln" class="gln form-control" placeholder="GIRTH (Gln)" required="true"><br>
              <input type="number" id="popupgin" name="gin" class="gin form-control" placeholder="GIRTH (Gin)" required="true"><br>
              <input type="text" id="popupclient" name="client" class="client form-control" placeholder="Client" required="true"><br>
              <input type="number" id="popupanswer1" name="gr" class="form-control" placeholder="GR" readonly="true" required="true"><br>
              <input type="number" id="popupanswer2" name="cft" class="form-control" placeholder="CFT" readonly="true" required="true"><br>
              <input type="number" id="popupanswer3" name="cmt" class="form-control" placeholder="CMT" readonly="true" required="true"><br>
              <input type="submit" name="update" value="Update" class="btn btn-primary">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript">
      function isNumberKey(evt){
          var charCode = (evt.which) ? evt.which : event.keyCode
          if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
              return false;
          return true;
      }
    </script>

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" src="asset/js/circle-wood.js"></script>
  <script type="text/javascript">$(document).ready(function() { $('#result').DataTable({ "order": [[ 0, "desc" ]] }); } );</script>
  </body>
</html>