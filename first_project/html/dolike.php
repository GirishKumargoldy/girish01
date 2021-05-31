<?php
		require_once("../function/function.php");
		require_once("../function/connect.php");
if(isset($_POST['like'])){
	$message="";
	$success=false;
	$user_id=$_POST['user_id'];
	$object_id=$_POST['object_id'];

	$sql1="SELECT * FROM likes ";
	$result1=mysqli_query($conn,$sql1);
	if ($result1) {
		$total=mysqli_num_rows($result1);
		if ($total>0) {
			$success=false;
			$message="already added";
		 // echo "already added";
		}
		else
		{

	
	$sql="INSERT INTO likes(user_id,object_id)VALUES('$user_id','$object_id')";
	$result=mysqli_query($conn,$sql);
	if($result){
			$success=true;
			$message="like added";
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
	$data=array("message"=>$message,"success"=>$success);
	echo json_encode($data);
}
			// require_once("../function/function.php");




// if(isset($_POST['haha'])){
// 	$message="";
// 	$success=false;
// 	$user_id=$_POST['user_id'];
// 	$object_id=$_POST['object_id'];
// 	$sql="INSERT INTO haha(user_id,object_id)VALUES('$user_id','$object_id')";
// 	$result=mysqli_query($conn,$sql);
// 	if($result){
// 			$success=true;
// 	}
// 	else{
// 		$success=false;
// 	}
// 	$data=array("message"=>$message,"success"=>$success);
// 	echo json_encode($data);
// }

			// if (isset($_POST['like'])) {
			// 	$user_id=$object_id="";
			// 	$user_id=$_POST['user_id'];
			// 	$object_id=$_POST['object_id'];


			// 	if(!empty($user_id) && !empty($object_id))
			// 	{
			// 		like_tab($user_id,$object_id);
			// 	}
			// 	else{

			// 	}
			// }
?>
