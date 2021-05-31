<html>
<head>
	<title>HAMARIWRITING</title>
	<script type="text/javascript" src="../jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/main2.css">
	<meta charset="utf-8">
	<meta name="description" content="This website is created to share your writing skills like poem, shayari, jokes  and other thoughts and visit for search  these things">
	<meta name="keywords" content="jokes,memes,poem,shayari">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
.lerror{
	font-size: 20px;
	text-align: center;
	margin-top: 5%;
	color:red;
}	
.reg{
	font-size: 30px;
	text-align: center;
	text-transform: uppercase;
}	
</style>
</head>
<body class="login1">
	<?php require_once("menu_bar1.php") ?>
<center>
	<div class="container_login1">
		<form>
			<div class="container_login2">
				<h2>Login Form</h2>
				<label for="username"><b>Username</b></label>
				<input type="text" name="username" class="username" autocomplete="username">
				<label for="password">Password</label>
				<input type="password" name="password" class="password" autocomplete="username">
				<button type="button" class="login">Login</button>
			</div><!-- container_login2 -->
			<div class="container_login3">
				<span class="password">Forgot<a href="#">password?</a></span>
			</div><!-- container_login1 -->
		</form>
	</div><!-- container_login1 -->
</center>
</body>
</html>
<script type="text/javascript">
	$(function(){
		$(document).on("click",".login",function(){
			var me=$(this);
			var username=$.trim($(".username").val());
			var password=$.trim($(".password").val());
			$.ajax({
				url:"../function/login_function.php?"+new Date().getTime(),
				method:"post",
				datatype:"Text",
				data:{login:"login",username:username,password:password},
				beforeSend:function(){
					me.html("login...");
				},
				success:function(data){
					console.log(data);
					var obj=JSON.parse(data);
					console.log(obj);
					if (obj.success==true) {
						window.location.href=obj.url;
						me.html("Login");
					}
					else if(obj.success==false){
						me.html("Login");
					}
				}
			});
		});
	});
</script>