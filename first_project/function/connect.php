<?php
	
	function connect()
	{
		$server="localhost";
		$user="root";
		$password="root";
		$database="root";

		$conn=mysqli_connect($server,$user,$password,$database);
		if ($conn) {
			return $conn;
		}
		else
		{
				$error=mysqli_error($conn);
			echo "$error:Sorry:something went wrong";
		}
	
}

?>
