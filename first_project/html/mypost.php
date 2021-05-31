<?php
		session_start();

?>

<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			box-sizing: border-box;
		}
		.content{
  width: 100%;
  display: inline-block;
  float: left;
}
.content>.box{
  height: 400px;
  width: 30%;
  /*border: 5px solid red;*/
  margin-left: 3%;
  margin-top: 5%;
  padding-left: 6px;
  padding-right: 6px;
  float: left;
  box-shadow: 0px 0px 30px blue;
  
}
.img{
  width: 50%;
  height: 150px;
}
.name{
  font-size: 28px;
  color: blue; 
}
.data{
  font-size: 15px;
  color: brown;
} .imgg>img{
      /*border:2px solid red;*/
      border-radius: 50%;
      width: 150px;
      height: 150px;
      margin:0% 30%;
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
  margin-top: -3%;
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
 


      /*for responsive*/

      @media(min-width: 300px) and (max-width: 700px){
    
    
    *{
      box-sizing: border-box;
    }
    body,html{
      margin: 0;
      padding: 0;
    }
      .content>.box{
  height: auto;
  width: 90%;
  /*border: 5px solid red;*/
  margin-left: 5.5%;
  margin-top: 5%;
  padding-left: 6px;
  padding-right: 6px;
  float: left;
  box-shadow: 0px 0px 30px blue;
  
}
.img{
  width: 60%;
  height: 200px;
  margin-left: 14%;
}
.img>img{
  border-radius: 20%;
}

.like>img:hover{
  border:3px solid red;
  border-radius: 50%;
}
.like>img{
  height: 60px;
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
  height: 60px;
  width: 10%;
  margin-left: 15%;
  margin-top: -9%;
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
  }
	</style>
</head>
<body>


<h1 style="text-align: center; color: green;" >My Posts</h1>
<div class="content">
  <?php
        require_once("../function/function.php");
        $id=$_SESSION['id'];
       get_profile_mypost($id);
      // get_profile($username);
  ?>
<?php
      require_once("../function/function.php");
	// $_SESSION['username']=$username;

	$username=$_SESSION['username'];

	get_post($username);
?>
</div>


</body>
</html>