<table border="1">
    <tr>
        <th>SrNo</th>
        <th>Length</th>
        <th>Gln</th>
        <th>Gin</th>
        <th>Gr</th>
        <th>CFT</th>
        <th>CMT</th>
        <th>Date</th>
	</tr>
	<?php
	
	require('conn.php');

	$sql="SELECT * FROM circle";
	$result=mysqli_query($con,$sql);

	// Associative array
	
	$no = 1;
	while($row=mysqli_fetch_assoc($result)){
		echo '
		<tr>
			<td>'.$no.'</td>
			<td>'.$row['length'].'</td>
			<td>'.$row['gln'].'</td>
			<td>'.$row['gin'].'</td>
			<td>'.$row['gr'].'</td>
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