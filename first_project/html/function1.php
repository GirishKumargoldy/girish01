<?php
require_once("../function/connect.php");
		$conn=connect();
	
	if (isset($_POST['register'])) {
		
		
			$message="";
			$success=false;

				$username=$_POST['username'];
				$password=$_POST['password'];
		$sql1="SELECT * FROM  register WHERE username='$username'";

		$result1=mysqli_query($conn,$sql1);
		if ($result1) {
				$total=mysqli_num_rows($result1);
				if ($total>0) {
					$success=false;
					$message="this user is already exist";

				}
				else{
					// for new user	
							$date_time=date("Y-m-d H:i:s");
	      	    $sql="INSERT INTO register(username,password,date_time)VALUES('$username','$password','$date_time')";
                $result=mysqli_query($conn,$sql);
	         	if ($result) {
	      		$success=true;
	      		$message="successfully registered";
		        }
	         	else
	        	{
				$success=false;
				$message.=mysqli_error($conn);
				}
		}
	}
	else{
		$success=false;
		$message.=mysqli_error($conn);
	}
	$data=array("success"=>$success,"message"=>$message);
			echo json_encode($data); // json ==> java script object notation
}

?>