<?php
if(isset($_GET))
{
	if (isset($_GET['id'])) {	}
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

$delete = delete('cutpiece', 'id = "'. $_GET['id'] .'"');

if ($delete == 1) {
	echo '<meta http-equiv="refresh" content=0;URL="http://localhost/calc/cut-piece.php?delete=1">';
}else{
	echo '<meta http-equiv="refresh" content=0;URL="http://localhost/calc/cut-piece.php?delete=0">';
}

?>

