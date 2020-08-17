<?php

if(isset($_POST))
{
	if (isset($_POST['id']) && isset($_POST['length']) && isset($_POST['width']) && isset($_POST['piece']) && isset($_POST['thick']) && isset($_POST['answer2']) && isset($_POST['answer3']) && isset($_POST['client']))
	{	}else{ echo "Error : Invalid Parameter"; }
}else{
	echo "Error : No Parameter Found";
}

include('../inc/procedure.php');

// check data and validate
postdata();

// Get current date and Time
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');

$update1 = update('cutpiece','length', $_POST['length'],' id = "'. $_POST['id'] .'"');
$update2 = update('cutpiece','width', $_POST['width'],' id = "'. $_POST['id'] .'"');
$update3 = update('cutpiece','piece', $_POST['piece'],' id = "'. $_POST['id'] .'"');
$update4 = update('cutpiece','thick', $_POST['thick'],' id = "'. $_POST['id'] .'"');
$update5 = update('cutpiece','cft', $_POST['answer2'],' id = "'. $_POST['id'] .'"');
$update6 = update('cutpiece','cmt', $_POST['answer3'] ,' id = "'. $_POST['id'] .'"');
$update7 = update('cutpiece','client', $_POST['client'] ,' id = "'. $_POST['id'] .'"');

if ($update1 == 1 && $update2 == 1 && $update3 == 1 && $update4 == 1 && $update5 == 1 && $update6 == 1 && $update7 == 1) {
	echo '<meta http-equiv="refresh" content=0;URL="http://localhost/calc/cut-piece.php?update=1">';
}else{
	echo '<meta http-equiv="refresh" content=0;URL="http://localhost/calc/cut-piece.php?update=0">';
}

?>

