<!DOCTYPE html>
<html>
<head>
	<title>likepage</title>
</head>
<body>
// <?php
		require_once("../function/function.php");
		if (isset($_SESSION['total_likes'])) {
			echo "likes";
			$n=1;
			foreach ($_SESSION['total_likes'] as $like) {
				for ($i=0; $i<1; $i++) { 
					if ($i==0) {
						$id=$like[$i];
					}
				}
				echo "$like";
				$n++;
			}
		}
		
		like_btn();
		
?>
					

					
		<form action="like_btn.php" method="post">
			<p>
				<button type="submit" name="like">Like</button>
			</p>
		</form>
</body>
</html>