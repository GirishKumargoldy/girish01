
<html>
<head>
	<title></title>
</head>
<body>
<?php
				require_once("../function/function.php");

				if(isset($_POST['update'])){
					$file_name=$_FILES['file']['name'];
					$file_tmp_name=$_FILES['file']['tmp_name'];
					$file_size=$_FILES['file']['size']/(1024*1024);
					$path="../profiles/$file_name";
					$extension=pathinfo($path,PATHINFO_EXTENSION);
					if($extension=="jpg" || $extension=="png" || $extension=="jpeg"){
							if($file_size>8){
								echo "<hr>only less than 1/2 mb files are allowed";
							}
							else{
								$file_name=md5(mt_rand(1,10000)).".$extension";
								$path="../profiles/$file_name";
									change_profile($_SESSION['id'],$file_name,$file_tmp_name,$path);
							}

					}
					else{
						echo "<hr>only jpg, png files are allowed.";
					}
				}

?>
</body>
</html>