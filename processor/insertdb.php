<?php
if(isset($_POST))
{
	if (isset($_POST['length']) && isset($_POST['gln']) && isset($_POST['gin']) && isset($_POST['gr']) && isset($_POST['cft']) && isset($_POST['cmt']) && isset($_POST['client']) ) {	}
	else{ echo "Error : Invalid Parameter"; }
}else{
	echo "Error : No Parameter Found";
}

include('../inc/procedure.php');

// check data and validate
postdata();

// Get current date and Time
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');

$insert = insert('circle','length, gln, gin, gr, cft, cmt, client, insdate',  '"'. $_POST['length'] .'" , "'. $_POST['gln'] .'" , "'. $_POST['gin'] .'" , "'. $_POST['gr'] .'" , "'. $_POST['cft'] .'" , "'. $_POST['cmt'] .'" , "'.$_POST['client'].'" ,"'. $date .'"');

if ($insert == 1) {
	echo '<meta http-equiv="refresh" content=0;URL="http://localhost/calc/circle-wood.php?result=1">';
}else{
	echo '<meta http-equiv="refresh" content=0;URL="http://localhost/calc/circle-wood.php?result=0">';
}

?>

