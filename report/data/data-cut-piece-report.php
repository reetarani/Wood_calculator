<table border="1">
    <tr>
    	<th>Id</th>
	    <th>Length</th>
	    <th>Width</th>
	    <th>thick</th>
	    <th>piece</th>
	    <th>CFT</th>
	    <th>CMT</th>
		<th>Date</th>
	</tr>
	<?php
	
	require('conn.php');

	$sql="SELECT * FROM cutpiece";
	$result=mysqli_query($con,$sql);

	// Associative array
	
	$no = 1;
	while($row=mysqli_fetch_assoc($result)){
		echo '
		<tr>
			<td>'.$no.'</td>
			<td>'.$row['length'].'</td>
			<td>'.$row['width'].'</td>
			<td>'.$row['thick'].'</td>
			<td>'.$row['piece'].'</td>
			<td>'.$row['cft'].'</td>
			<td>'.$row['cmt'].'</td>
			<td>'.$row['insdate'].'</td>
		</tr>
		';
		$no++;
	}
	mysqli_free_result($result);
	mysqli_close($con);
	?>
</table>