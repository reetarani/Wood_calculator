<?php

if(isset($_POST))
{
	if (isset($_POST['length']) && isset($_POST['gln']) && isset($_POST['gin']) && isset($_POST['gr']) && isset($_POST['cft']) && isset($_POST['cmt']) && isset($_POST['client'])) {	}
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

$update1 = update('circle','length', $_POST['length'], 'id = "'.$_POST['id'].'"');
$update2 = update('circle','gln', $_POST['gln'], 'id = "'.$_POST['id'].'"');
$update3 = update('circle','gin', $_POST['gin'], 'id = "'.$_POST['id'].'"');
$update4 = update('circle','gr',  $_POST['gr'] , 'id = "'.$_POST['id'].'"');
$update5 = update('circle','cft', $_POST['cft'] , 'id = "'.$_POST['id'].'"');
$update6 = update('circle','cmt', $_POST['cmt'], 'id = "'.$_POST['id'].'"');
$update7 = update('circle','client',  $_POST['client'] , 'id = "'.$_POST['id'].'"');


if ($update1 == 1 && $update2 == 1 && $update3 == 1 && $update4 == 1 && $update5 == 1 && $update6 == 1 && $update7 == 1) {
	echo '<meta http-equiv="refresh" content=0;URL="http://localhost/calc/circle-wood.php?update=1">';
}else{
	echo '<meta http-equiv="refresh" content=0;URL="http://localhost/calc/circle-wood.php?update=0">';
}

?>

