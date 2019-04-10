<?php

	$conn=mysqli_connect("localhost",'root','');
	if($conn)
	{	echo"Connected!!<br>";
		$sql="CREATE DATABASE User_Database";
		$a=mysqli_query($conn, $sql) or die(mysqli_error($conn));
	}
	mysqli_close($conn);

?>