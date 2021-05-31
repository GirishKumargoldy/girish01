 <?php
	require_once("connect.php");
	$conn=connect();
	create_website();
	
	function create_website()
	{
		global $conn;
		$sql="CREATE TABLE register(
		id INT(10) AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(255) NOT NULL,
		password VARCHAR(255) NOT NULL,
		date_time DATETIME
		)";

		$result=mysqli_query($conn,$sql);
		if ($result) {
			echo "website content table created successfully";
		}
		else
		{
			$error=mysqli_error($conn);
			echo "error:$error";
		}
	}



?>