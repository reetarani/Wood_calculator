<?php

include('init.php');

function select($selection , $tablename, $where){
	$len = strlen($where);
	if ($len > 0) {
		$sql = 'SELECT '.$selection.' FROM '.$tablename.' where '.$where.'';
	}else{
		$sql = 'SELECT '.$selection.' FROM '.$tablename.'';
	}
	$result = mysqli_query($GLOBALS['conn'], $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    $i = 1;
	    $collector = array();
	    while($row = mysqli_fetch_assoc($result)) {
	    	$collector[$i] = $row;
	    	$i++;
	    }
	    return $collector;
	} else {
	    return NULL;
	}
}

function getnumrow($selection , $tablename, $where){
	$len = strlen($where);
	if ($len > 0) {
		$sql = 'SELECT '.$selection.' FROM '.$tablename.' where '.$where.'';
	}else{
		$sql = 'SELECT '.$selection.' FROM '.$tablename.'';
	}
	$result = mysqli_query($GLOBALS['conn'], $sql);
	
	if (mysqli_num_rows($result) > 0) {
		return mysqli_num_rows($result);
	} else {
	    return 0;
	}
}

function delete($tablename , $where){
	$len = strlen($where);
	if ($len > 0) {
		$sql = 'DELETE FROM '.$tablename.' WHERE '.$where.'';
	}else{
		$sql = 'DELETE FROM '.$tablename.'';
	}
	if (mysqli_query($GLOBALS['conn'], $sql)) {
		return 1;
	} else {
	    echo mysqli_error($GLOBALS['conn']);
	}
}

function update($tablename , $set , $value , $where){
	$sql = 'UPDATE '.$tablename.' SET '.$set.'= "'.$value.'" WHERE '.$where.'';
	if (mysqli_query($GLOBALS['conn'], $sql)) {
	    return 1;
	} else {
	    //return mysqli_error($GLOBALS['conn']);
	    return $sql;
	}
}

function insert($tablename, $column , $value){
	$sql = 'INSERT INTO '.$tablename.' ('.$column.')VALUES ('.$value.')';
	if (mysqli_query($GLOBALS['conn'], $sql)) {
	    return 1;
	} else {
	    return mysqli_error($GLOBALS['conn']);
	}
}

function getdata(){
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		foreach ($_GET as $key => $value) {
			$_GET[$key] = checkdata($value);
		}
	}
	return $_GET;
}

function postdata(){
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		foreach ($_POST as $key => $value) {
			$_POST[$key] = checkdata($value);
		}
	}
	return $_POST;
}

function checkdata($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function validation($type , $value){
	switch ($type) {
		case 'text':
			if (!preg_match("/^[a-zA-Z ]*$/",$value)) {
		  		echo "Only letters and white space allowed";
		  		return false;
			}
			else{
				return true;
			}
			break;

		case 'email':
			if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
			  	echo "Invalid email format";
			  	return false;
			}
			else{
				return true;
			}
			break;

		case 'url':
			if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$value)) {
				echo "Invalid URL";
				return false;
			}
			else{
				return true;
			}
			break;
		
		default:
			echo "Improper validation type";
			break;
	}
}

function getcontent($url){
	echo "<pre>";
	echo readfile($url);
	echo "</pre>";
}

function createfile($filename , $content){
	$myfile = fopen($filename, "w") or die("Unable to create file!");
	fwrite($myfile, $content);
	fclose($myfile);
}

function fileuploader($target_dir){
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
}

function textbox($type, $name, $class, $id, $required, $placeholder, $extra){
	$placeholder = str_replace("+", " ", $placeholder);
    echo '<div class="form-group">
		    <label for="appointdate">'.ucfirst($name).'</label>
		    <input type="'.$type.'" name="'.$name.'" class="'.$class.'" id="'.$id.'" required="'.$required.'" placeholder="'.$placeholder.'" '.$extra.'>
		  </div>';
}

function textarea($name, $class, $id, $required, $placeholder, $extra){
	echo '<textarea name='.$name.' class='.$class.' id='.$id.', required='.$required.' placeholder='.$placeholder.' '.$extra.'></textarea>';
}

function checkbox($class, $name, $value, $option){
	if ($class == "checkbox") {
		echo '<div class="checkbox"><label><input type="checkbox" name="'.$name.'" value="'.$value.'">'.$option.'</label></div>';
	}else if ($class == "checkbox-inline") {
		echo '<div class="checkbox-inline"><label><input type="checkbox" name="'.$name.'" value="'.$value.'">'.$option.'</label></div>';
	}
}

function radio($class, $name, $value, $option){
	if ($class == "radio") {
		echo '<label class="radio"><input type="radio" name="'.$name.'" value="'.$value.'">'.$option.'</label>';
	}else if($class == "radio-inline"){
		echo '<label class="radio-inline"><input type="radio" name="'.$name.'" value="'.$value.'">'.$option.'</label>';
	}
}

function dropdown($class, $name, $option){
	echo '<select class="'.$class.'" name="'.$name.'">';
	foreach ($option as $value) {
		echo '<option value="'.$option.'">'.$option.'</option>';
	}
	echo '</select>';
}

function download_headers($filename) {
    // disable caching
    $now = gmdate("D, d M Y H:i:s");
    header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
    header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
    header("Last-Modified: {$now} GMT");

    // force download  
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");

    // disposition / encoding on response body
    header("Content-Disposition: attachment;filename={$filename}");
    header("Content-Transfer-Encoding: binary");
}

function arraycsv(array &$array)
{
   if (count($array) == 0) {
     return null;
   }
   ob_start();
   $df = fopen("php://output", 'w');
   fputcsv($df, array_keys(reset($array)));
   foreach ($array as $row) {
      fputcsv($df, $row);
   }
   fclose($df);
   return ob_get_clean();
}

function array_flatten($array) {
  if (!is_array($array)) { 
    return FALSE; 
  }
  $result = array(); 
  foreach ($array as $key => $value) { 
    if (is_array($value)) { 
      $result = array_merge($result, array_flatten($value)); 
    } 
    else { 
      $result[$key] = $value; 
    } 
  } 
  return $result; 
}
