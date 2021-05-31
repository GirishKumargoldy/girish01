<?php  session_start(); ?>
<html>
<head>
	<title>user page</title>
	<script type="text/javascript" src="../jquery.js"></script>
	<meta charset="utf-8">
    <meta name="description" content="This webiste is created to share your writing skill like poem , shayari , jokes and other thoughts andc visit site for serch these things ">
    <meta name="keywords" content="Jokes,memes,poems,shayari">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
<style type="text/css">
		*{
			box-sizing: border-box;
		}
		body,html{
			margin: 0;
			padding: 0;
			background-size: 400% 400%;
            max-width: 100%;
            background-repeat: no-repeat;
            height: 100vh;
            background-color: rgb(192 192 192);
		}
		.menu_bar{
			margin: 0;
			padding: 0;
		    background-color: #7F8688 ;
			width:100%;
			height: auto;
			margin-top: -1.25%;
		}
		.logo img{
			max-width: 100%;
			height: 90px;
				
	    }
		
		.side_bar{
			border: 2px solid #ddd;
			border-radius: 10px;
			width: 29%;
			height: 320px;
			margin-top: 11%;
			margin-left: 3%;
			position: absolute;
			top: 0px;
			background-color: #fff;
		
		}

		.side_barr{
			border: 2px solid #ddd;
			border-radius: 10px;
			width: 90%;
			height: 310px;
			margin-top: 90%;
			position: absolute;
			top: 0px;
			margin-left: 5%;
			background-color: #fff;
		
		}
		.imgg>img{
			/*border:2px solid red;*/
			border-radius: 50%;
			width: 30%;
			height: 90px;
		}
		.main_content{
			max-width: 65%;
			height: auto;
			float: right;
			padding-right: 5%;
			margin-top: 1%;
			
		}





.main_content>.box{
  height: auto;
  width: 100%;
  margin-left: 3%;
  margin-top: 2.3%;
  padding-left: 6px;
  padding-right: 6px;
  float: left;
  box-shadow: 0px 0px 10px 2px black;
  background-color: white;
}
.main_content>.box>p>.img>img{
	border:3px solid red;
}
.img>img{
	/*border:8px solid red;*/
	height: 400px;
	width: 60%;
	margin:0% 20%;
	border-radius: 15px;
}
.size>img{
	width:99%;
	margin-left: 0.5%;
	margin-right:0.5%; 
	/*height:250px;*/
	height: auto;
}

fieldset{
	width: 95%;
			background-color:white;
			height:300px;
			margin-top: 20px;
			margin-right: 0%;
			margin-left: 0%;
			margin: 3% 3%;
			margin-top: 120px;
			padding-bottom: 5px;
}
form{
	height: 100px;
}
.name{
	text-transform: uppercase;
	font-size: 20px;
	color: red;
}
.name_own{
	color: rgb(0,6,251);
	font-size: 15px;
	text-transform: uppercase;
}
.texta a .textb{
	text-decoration: none;
}
.like_btn{
	margin-bottom: 5px;
}
.text-dec a{
	text-decoration: none;
}

.alg{
  text-transform: uppercase;
}


.like>img:hover{
	border:3px solid red;
	border-radius: 50%;
}
.like>img{
	height: 100px;
	width: 10%;
	margin-left: 0%;
	margin-top: -4%;
	border:2px solid blue;
	border-radius: 50%;
	display: inline-block;
	float: left;
}
.float-right{
	margin-left: 5%;
	margin-top: 8%;
}

	/*work for haha react*/
/*.haha>img{
	height: 60px;
	width: 10%;
	display: inline-flex;
	float: left;	
}*/
.haha>img:hover{
	border:3px solid red;
	border-radius: 50%;
}
.haha>img{
	height: 100px;
	width: 10%;
	margin-left: 10%;
	margin-top: 1%;
	border:2px solid blue;
	border-radius: 50%;
	display: inline-block;
	float: left;
}
.float-right1{
	margin-left: 29%;
	color: red;
	margin-bottom: 5%;
}
.lerror{
	color: red;
	margin-top: 5%;
	margin: 40% 5%;
	
}




		/*work for responsive */

		@media(min-width: 300px) and (max-width: 700px){
		
		
		*{
			box-sizing: border-box;
		}
		body,html{
			margin: 0;
			padding: 0;
			/*background-image: linear-gradient(125deg,#2c3e50,#27ae60,#2980b9,#e74c3c,#8e44ad);*/
			background-size: 400% 400%;
            animation: bganimation 10s infinite;
            max-width: 100%;
            background-repeat: no-repeat;
            height: auto;
		}
			.menu_bar{
			height:auto;
			margin-top: -3.1%;
			width: 100%;
			
					}

		fieldset{
	width: 80%;
	height: 320px;
	margin-left: 10px;
	margin-right: 10px;
     }
     fieldset form{
     	width: 100%;
     	margin-left: 0.5%;
     	margin-right: 0.5%;
     }
		.logo img{
			max-width:80%;
			height: 80px;
			

			/*border:2px solid red;*/
			margin-left:10%;
			margin-right: 10%;	
	    }

	    .img>img{
	/*border:8px solid red;*/
	height: 200px;
	width: 60%;
	margin:0% 20%;
			}
		
		.side_bar{
			width: 95%;
			background-color:white;
			height:auto;
			margin-top: 20px;
			margin-right: 0%;
			margin-left: 0%;
			margin: 3% 3%;
			margin-top: 120px;
			padding-bottom: 5px;
		
		
			}
		.side_bar>p{
			text-align: center;
			

		}

		
		.imgg>img{
			/*border:2px solid red;*/
			border-radius: 30%;
			width: 30%;
			height: 90px;
			/*padding-right: 10%;*/
		}
		.main_content{
      width:80%;
      margin-top: 690px;
      margin-right:0.5px;
      margin-left: 0.5px; 
		}
		.main_content>.box{
			width: 150%;
			height: auto;
			margin-left: -48%;

	}

	.size>img{
	width:100%;
	margin-left: 0.5%;
	margin-right: 0.5%;
	height:auto;
}	
		}

		.text-dec:hover{
			width: 30%;
			background-color: orange;
		}
		.like>img:hover{
	border:3px solid red;
	border-radius: 50%;
}
.like>img{
	height: 25px;
	width: 25px;
	margin-left: 0%;
	margin-top: -1%;
	border:2px solid blue;
	border-radius: 50%;
	display: inline-block;
	float: left;
}
.float-right{
	margin-left: 5%;
	margin-top: 8%;
}

.haha>img:hover{
	border:3px solid red;
	border-radius: 50%;
}
.haha>img{
	height: 25px;
	width: 25px;
	margin-left: 1%;
	margin-top: -1%;
	border:2px solid blue;
	border-radius: 50%;
	display: inline-block;
	float: left;
}
.float-right1{
	margin-left: 29%;
	color: red;
	margin-bottom: 5%;
}
.lerror{
	color: red;
	margin-top: 5%;
	margin: 40% 5%;
	
}

a {
  color: #3b5998;
}

.navbar {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}

.navbar-default {
  background-color: #3b5998;
  border-color: #3b5998;
}

.navbar-default .navbar-brand {
  color: #fff;
}

.navbar-default .navbar-brand:focus,
.navbar-default .navbar-brand:hover {
  color: #fff;
}

.navbar-default .navbar-nav>li>a {
  color: #fff;
}

.navbar-default .navbar-nav>li>a:focus,
.navbar-default .navbar-nav>li>a:hover {
  color: #fff;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 5;
  top: 0;
  left: 0;
  background-color: #7F8688;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 30px;

  
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #fff;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>  
	<div class="container">
		<div class="menu_bar">
			 <p class="logo"><img src="../images/b.png">    <!--logo -->	
			 </div><!-- menu_bar -->		
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">My Post</a>
  <a href="#">Edit Profile</a>
  
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>		


		<div class="content">
			<div class="side_bar">
				<center>
					<p><h2>My account</h2></p>
		<p class="name_own">
			<?php if(isset($_SESSION['username'])) {echo "".$_SESSION['username'];$id=$_SESSION['id']; }?>
		</p>
	
		<p class="texta">
			<?php  require_once("../function/function.php"); get_profile($id); ?> <a href="mypost.php" class="textb">Myposts</a>
		</p>
		
		<p class="text-dec">
			<a href="edit_profile.php"> Edit profile</a>
		</p>
		<p class="text-dec">
			<a href="logout.php">Logout</a>
		</p>
	
		<p>
			
		<div class="side_barr"><legend><h2>Upload post</h2></legend>

				<form action="user_page.php" method="post" enctype="multipart/form-data">
					<p>
						<label for="user_content">Write something here</label>
						<br>
						<textarea cols="10" rows="5" name="user_content"></textarea>
					</p>
					<p>
						<!-- <label for="file">Add</label> -->
						<input type="file" name="image">
					</p>
					<p>
						<center><button class="btn" type="submit" name="upload">Upload</button></center>
					</p>
				</form>
				<?php
        require_once("../function/function.php");
        if (isset($_POST['upload'])) {
           $user_content=$image=$image_name=$image_tmp_name=$path=$extension=$date_time="";
          // $username=$_POST['username'];
          $user_content=$_POST['user_content'];
          // $content_image=$_POST['content_image'];
           // $image=$_POST['image'];

          $image_name=$_FILES['image']['name'];
          $image_tmp_name=$_FILES['image']['tmp_name'];
          $image_size=$_FILES['image']['size']/(1024*1024);

         
			 if (!empty($_FILES['image']['name']) || !empty($user_content)) {
				$path="../photos/$image_name";
			      $extension=pathinfo($path,PATHINFO_EXTENSION);
          
          if (strtolower($extension=="jpg") || strtolower($extension=="png" || $user_content)) {
            if ($image_size>5) {
              echo "<div class='lerror'>only less than 1 mb files are allowed";
            }
            else
            {
              
            upload($user_content,$image_name,$image_tmp_name,$path);
        }
        }
           
			      else{
			      	echo "<div class='lerror'>image extension is not allowed";
			      } 
			  }
			    
         

 else{
            echo "<div class='lerror'>please fill up the data</div>";
          } 
}
    ?>
			</div>

				</p>

				</center>
			</div><!-- side_bar -->
			
			    <?php   require_once("../function/function.php");
      
  ?><?php       require_once("../function/function.php");
    ?>
			<div class="main_content" id="main">
					 	  <?php
        						show_content();
      						?>
      				
			</div>    <!-- main_content -->
		</div><!-- content -->
	</div>  <!-- container -->

	
</body>
</html>

<script type="text/javascript">
		// $(function(){
			  $(document).ready(function(){


					
					$(document).on("click",".like",function(){
							
							
							var me=$(this);
							var user_id=me.attr("user_id");
							var object_id=me.attr("object_id");
							// alert(object_id);


							$.ajax({
								url:"dolike.php",
								method:"post",
								datatype:"text",
								data:{
									like:"like",
									user_id:user_id,
									object_id:object_id
								},
								beforeSend:function(){

								},
								success:function(data){
									console.log(data);
									var obj=JSON.parse(data);
									console.log(obj);
									if (obj.success==true) {
										me.html("<div class='like'><img src='../emoji/lik.png' height="42" width="42"></div>");
										
										}
									
								}
							});
						});


					$(document).on("click",".haha",function(){
							
							
							var me=$(this);
							var user_id=me.attr("user_id");
							var object_id=me.attr("object_id");
						


							$.ajax({
								url:"dolike.php",
								method:"post",
								datatype:"text",
								data:{
									haha:"haha",
									user_id:user_id,
									object_id:object_id
								},
								beforeSend:function(){

								},
								success:function(data){
									console.log(data);
									var obj=JSON.parse(data);
									console.log(obj);
									if (obj.success==true) {
										me.html("<div class='haha'><img src='../emoji/haha.png'></div>");
										
									}
									 else if(obj.success==false){
									 	me.html("you are already reacted");
									 }
								}
							});
						});

						});
</script>