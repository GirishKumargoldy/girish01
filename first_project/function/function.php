<?php 
		require_once("connect.php");
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



	function upload($user_content,$image_name,$image_tmp_name,$path)
	{
		global $conn;
		$date_time=date("Y-m-d H:i:s");
		$user_name=$_SESSION['username'];
		$sql="INSERT INTO userdata(user_name,user_content,content_image,date_time)VALUES
		('$user_name','$user_content','$image_name','$date_time')";

		$result=mysqli_query($conn,$sql);

		if ($result) {
			if(move_uploaded_file($image_tmp_name, $path)||$user_content)
				
			 {
				echo "<div class='lerror'>the content is uploaded successfully</div>";
			 }
		
		}
		else
		{
			$error=mysqli_error($conn);
			echo "error:$error";
		}
	}


	function show_content()
{

	global $conn;
	$data="";
	$sql="SELECT * FROM userdata ";
	$result=mysqli_query($conn,$sql);
	if ($result) {
		$total=mysqli_num_rows($result);
		if ($total>0) {
			while ($rows=mysqli_fetch_array($result)) {
				$id=$rows['id'];
				$user_name=$rows['user_name'];
				$user_content=$rows['user_content']; 
				$content_image=$rows['content_image'];
				 
				
				$likes=check_likes($id);
				$haha=check_haha($id);
				$data.=" 
						<div class='box'><p class='name'>$user_name<p>
						<p class='data'>$user_content</p>";
				 if (!empty($content_image)) {
				 	
				  $data.="
<p>	<div class='img'><img src='../photos/$content_image' class='img'></center></div></p>
";
}
			$data.="
  <strong class='float-right' >$likes</strong>  <span><strong class='float-right'>$haha</strong></span>

						</div>
				

				";
				

			}

		}
		else
		{
			$data.="not found";
		}
	}
	else 
	{
		$data.="error:".mysqli_error($conn);
	}
	
	echo $data;
}


	function check_likes($id){
  global $conn;
    $data="";
    $likes="";
    $total_likes="";


    $sql="SELECT * FROM likes WHERE object_id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
           $total_likes=mysqli_num_rows($result);

                $current_user=$_SESSION['id'];
                $sql1="SELECT * FROM likes WHERE object_id='$id' AND user_id='$current_user'";
                $result1=mysqli_query($conn,$sql1);
                if($result1){
                        if(mysqli_num_rows($result1)>0){
                                $likes="<div class='like' id='auto' ><img src='../emoji/lik.png'></div>";
                        }
                        else{
                        	
                          $likes="<span class='like'  id='auto' user_id='$current_user' object_id='$id'><img src='../emoji/lik.png' height='42' width='42'></button></span>";
                        }
                }else{

                }
    }
    else{

    }

   $data="<strong class='float-right'>$total_likes likes $likes</strong>";

return $data;
 }
 


 			function check_haha($id){
  global $conn;
    $data="";
    $haha="";
    $total_haha="";


    $sql="SELECT * FROM haha WHERE object_id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
           $total_haha=mysqli_num_rows($result);

                $current_user=$_SESSION['id'];
                $sql1="SELECT * FROM haha WHERE object_id='$id' AND user_id='$current_user'";
                $result1=mysqli_query($conn,$sql1);
                if($result1){
                        if(mysqli_num_rows($result1)>0){
                                $haha="<div class='haha'><img src='../emoji/haha.png'></div>";
                        }
                        else{
                          $haha="<span class='haha' user_id='$current_user' object_id='$id'><img src='../emoji/haha.png'></button></span>";
                        }
                }else{

                }
    }
    else{

    }

   $data="<strong class='float-right1'>$total_haha haha $haha</strong>";

return $data;
 }



		function get_profile($id)
	{
			global $conn;
			$data="";
			$sql="SELECT * FROM register WHERE id='$id'";
			$result=mysqli_query($conn,$sql);
			if ($result) {
				if(mysqli_num_rows($result)>0){
					while ($rows=mysqli_fetch_array($result)) {
						$profile=$rows['profile'];
					}
					$data.="<div class='imgg'>
								<img src='../profiles/$profile'>
							</div>
					

					";
				}
			}
			echo $data;
	}


	function view_user_edit($id)
	{
		global $conn;
		$record="";
		$sql="SELECT * FROM register WHERE id='$id'";
		$result=mysqli_query($conn,$sql);
		if ($result) {
			$total=mysqli_num_rows($result);
			if ($total>0) {
				while ($rows=mysqli_fetch_array($result)) {
					// $id=$rows['id'];
					$username=$rows['username'];
					$password=$rows['password'];
					$profile=$rows['profile'];

				}
				$record.="
					<center>
<form action='edit_profile.php?id=$id' method='post' enctype='multipart/form-data' >
<h2>Updation profile</h2>
<input type='hidden' name='id' value='$id'> 
		<div class='prof'><img src='../profiles/$profile'>
		<input type='file' name='file'></div>					
    
    <p><label for='username'><b>Username</b></label>
    <input type='text' placeholder='Enter Username' name='username' value='$username' required>
    </p>
    <p><label for='password'><b>Password</b></label>
    <input type='password' placeholder='Enter Password' name='password' value='$password' required>
    </p>
    <p><label for='cpassword'><b>Confirm Password</b></label>
    <input type='password' placeholder='Enter Password' name='cpsw'  required>
       </p> 
    <button type='submit' name='update'>update record</button>
   </form></center>
				";
			}
			else{
				$record.="no record found";
			}
		}
		else{
			$error=mysqli_error($conn);
			$record="error:$error";
		}
		echo $record;
	}




	function update_profile($id,$username,$password,$file_name,$file_tmp_name,$path)
	{
		global $conn;
		$record="";

		$sql1="SELECT * FROM register WHERE id='$id'";
		$result1=mysqli_query($conn,$sql1);
		if ($result1) {
			if (mysqli_num_rows($result1)>0) {
				while($rows=mysqli_fetch_array($result1))
				{
					$profile=$rows['profile'];


		$sql="UPDATE register SET username='$username', password='$password', profile='$file_name' WHERE id='$id' ";
		$result=mysqli_query($conn,$sql);
		if ($result) {
			if(move_uploaded_file($file_tmp_name,$path)){
				$record.="record update successfully";
				$url="user_page.php";
	header("Location:$url");
	exit;

				$delete_url="../profiles/$profile";
				if ($profile!="default.jpg") {
					// delete image
					unlink($delete_url);
				}
			}
		}
		else
		{
			$error=mysqli_error($conn);
			$record.="error:$error";
		}
				}
			}
			else{
				$record.="no record found";
			}
		}
		else
		{
			$record.="Error:".mysqli_error($conn);
		}

		echo $record;
		
	}


	





	function get_post($username)
{

	global $conn;
	$data="";
	$sql="SELECT * FROM userdata WHERE user_name='$username'";
	$result=mysqli_query($conn,$sql);
	if ($result) {
		$total=mysqli_num_rows($result);
		if ($total>0) {
			while ($rows=mysqli_fetch_array($result)) {
				$id=$rows['id'];
				$user_name=$rows['user_name'];
				$user_content=$rows['user_content'];
				$content_image=$rows['content_image'];	

					$likes=check_likes_mypost($id);
					$haha=check_haha_mypost($id);
				$data.="

						<div class='box'> 
						<p class='name'>$user_name<p>
						<p class='data'>$user_content</p>
						<p>	<div class='img'><center><img src='../photos/$content_image' class='img'></center></div></p>
						<strong class='float-right'>$likes</strong>  <span><strong class='float-right'>$haha</strong></span>
						</div>
				";
			}
		}
		else
		{
			$data.="not found";
		}
	}
	else 
	{
		$data.="error:".mysqli_error($conn);
	}
	echo $data;
}

function check_likes_mypost($id){
  global $conn;
    $data="";
    $likes="";
    $total_likes="";


    $sql="SELECT * FROM likes WHERE object_id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
           $total_likes=mysqli_num_rows($result);

                $current_user=$_SESSION['id'];
                $sql1="SELECT * FROM likes WHERE object_id='$id' AND user_id='$current_user'";
                $result1=mysqli_query($conn,$sql1);
                if($result1){
                        if(mysqli_num_rows($result1)>0){
                                $likes="<div class='like'><img src='../emoji/lik.png'></div>";
                        }
                        else{
                        	
                          $likes="<span class='like' user_id='$current_user' object_id='$id'><img src='../emoji/lik.png'></button></span>";
                        }
                }else{

                }
    }
    else{

    }

   $data="<strong class='float-right'>$total_likes likes $likes</strong>";

return $data;
 }


 			function check_haha_mypost($id){
  global $conn;
    $data="";
    $haha="";
    $total_haha="";


    $sql="SELECT * FROM haha WHERE object_id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
           $total_haha=mysqli_num_rows($result);

                $current_user=$_SESSION['id'];
                $sql1="SELECT * FROM haha WHERE object_id='$id' AND user_id='$current_user'";
                $result1=mysqli_query($conn,$sql1);
                if($result1){
                        if(mysqli_num_rows($result1)>0){
                                $haha="<div class='haha'><img src='../emoji/haha.png'></div>";
                        }
                        else{
                          $haha="<span class='haha' user_id='$current_user' object_id='$id'><img src='../emoji/haha.png'></button></span>";
                        }
                }else{

                }
    }
    else{

    }

   $data="<strong class='float-right1'>$total_haha haha $haha</strong>";

return $data;
 }
		


	function get_profile_mypost($id)
	{
			global $conn;
			$data="";
			$sql="SELECT * FROM register WHERE id='$id'";
			$result=mysqli_query($conn,$sql);
			if ($result) {
				if(mysqli_num_rows($result)>0){
					while ($rows=mysqli_fetch_array($result)) {
						$profile=$rows['profile'];
					}
					$data.="<div class='imgg'>
								<img src='../profiles/$profile'>
							</div>
					

					";
				}
			}
			echo $data;
	}


