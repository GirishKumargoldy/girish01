<?php
require_once("../function/connect.php");
session_start();
$conn=connect();

if(isset($_POST['login'])){
	$message="";
	$success=false;
	$url="";
	// global $conn;
 
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="SELECT * FROM register WHERE username='$username' AND password='$password'";
	$result=mysqli_query($conn,$sql);
	if($result){
			if(mysqli_num_rows($result)>0)
			{
					$success=true;
					while($rows=mysqli_fetch_array($result)){
						$id=$rows['id'];
						 $user_type=$rows['user_type'];
						$username=$rows['username'];
					}

					$_SESSION['id']=$id;
					$_SESSION['user_type']=$user_type;
					$_SESSION['username']=$username;
					if($user_type=="user"){
						$url="user_page.php";
					}
					else if($user_type=="admin"){
						$url="admin_dashboard.php";
					}
			}
			else{
				$success=false;
				$message.="no record found";
			}
	}
	else{

	}
	$data=array("message"=>$message,"success"=>$success,"url"=>$url);
	echo json_encode($data);
}	
?>