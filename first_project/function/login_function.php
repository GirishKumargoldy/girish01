<?php session_start(); ?>
<?php
require_once("../function/connect.php");
 
$conn=connect();
if(isset($_POST['login'])){
	$message="";
	$success=false;
	$url="";

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
						$username=$rows['username'];
					}
					$_SESSION['id']=$id;
					$_SESSION['username']=$username;
						$url="user_page.php";
				
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