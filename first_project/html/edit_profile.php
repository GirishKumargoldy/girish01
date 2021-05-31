 	<?php
		session_start();
	?>
<html>
<head>
	<title>edit profile</title>
	<link rel="stylesheet" type="text/css" href="../css/main2.css">
	<style type="text/css">
		*{
			box-sizing: border-box;
		}
		.prof>img{
			width: 20%;
			border-radius: 50%;
			height: 100px;

		}
	</style>
</head>
<body>
	<?php
				require_once("../function/function.php");
				if (isset($_POST['update'])) {
						$id=$_POST['id'];
						$username=$_POST['username'];
						$password=$_POST['password'];
						
						$file_name=$_FILES['file']['name'];
						$file_tmp_name=$_FILES['file']['tmp_name'];
						$file_size=$_FILES['file']['size']/(1024*1024);
						$path="../profiles/$file_name";
						$extension=pathinfo($path,PATHINFO_EXTENSION);
						if($extension=="jpg" || $extension=="png" || $extension=="jpeg"){
							if ($file_size>3) {
								echo "only less than 2 mb files are allowed";
							}
							else{
								$image_name=md5(mt_rand(1,10000)).".$extension";
								$path="../profiles/$file_name";

								if ( !empty($id) || !empty($username) || !empty($password)) {
							update_profile($_SESSION['id'],$username,$password,$file_name,$file_tmp_name,$path);
							}
						}
						
						}	
		?>
							<?php
	
	$id=$_SESSION['id'];
	view_user_edit($id);							
?>

</body>
</html>