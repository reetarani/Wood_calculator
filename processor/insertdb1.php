<?php
if(isset($_POST))
{
	if (isset($_POST['length']) && isset($_POST['width']) && isset($_POST['thick']) && isset($_POST['piece']) && isset($_POST['cft']) && isset($_POST['cmt']) && isset($_POST['client'])) 
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

$insert = insert('cutpiece','length, width, thick, piece, cft, cmt, client, insdate',  '"'. $_POST['length'] .'" , "'. $_POST['width'] .'" , "'. $_POST['thick'] .'" , "'. $_POST['piece'] .'" , "'. $_POST['cft'] .'" , "'. $_POST['cmt'] .'" , "'.$_POST['client'].'" , "'. $date .'"');

if ($insert == 1) {
	echo '<meta http-equiv="refresh" content=0;URL="http://localhost/calc/cut-piece.php?result=1">';
}else{
	echo '<meta http-equiv="refresh" content=0;URL="http://localhost/calc/cut-piece.php?result=0">';
}

?>

