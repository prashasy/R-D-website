<?php
if($_SERVER['REQUEST_METHOD']=='POST')
	{	$name=$_POST['username'];
		$pass=$_POST['password'];

		$conn=mysqli_connect("localhost",'root','','ieee');
		$sql="SELECT * from registrations where username='$name' and password='$pass'";
		$result=mysqli_query($conn, $sql) or die(mysqli_error($conn));
		$count=mysqli_num_rows($result);
		echo "<p>$count</p>";
		if(mysqli_num_rows($result)==1)
		{	$serial=mysqli_fetch_array($result)['serial'];
			$sql="select * from registrations where serial='$serial' ";
			$result=mysqli_query($conn, $sql);
			session_start();
			
			$_SESSION['login_user']=mysqli_fetch_array($result);
			$_SESSION['login']=true;


			mysqli_close($conn);
			header('location: dashboard.php');
		}
		else
			

	mysqli_close($conn);
}
?>
