 <?php
    session_start();
    if (isset($_SESSION['username'])) {
      
    }
    else{
      $url="login.php";
      header("Location:$url");
      exit();
    }
?>


<html>
<head>
<title>Hamari writing</title>
    <meta charset="utf-8">
    <meta name="description" content="This webiste is created to share your writing skill like poem , shayari , jokes and other thoughts andc visit site for serch these things ">
    <meta name="keywords" content="Jokes,memes,poems,shayari">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  /*background-color: #e9e9e9;*/
  background-color: #e9e9e9;

}


.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 10px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}


.topnav{
  width: 100%;
  height: 170px;

}

.search-container{
  margin-top: -10%;

}
.top{
  margin-top: -0.1%;
  width: 100%;

}
.site{
  /*margin-left: 9%;*/
  width: 30%;
  height: auto;
  font-size: 50px;
  
}
.sidebar{
  /*border: 5px solid red;*/
  margin: 0;
  padding: 0;
  /*position: fixed;*/
  width: 28%;
  background-color: #e9e9e9;
  height: auto;
  position: absolute;
}
.topnav>.sidebar{
  position: fixed;
}

.frm{
    font-size: 25px;
    
}
/*.field{
  margin-right: 5%;
  box-shadow: 0px 0px 1px blue;
 
}*/
.lg{
  text-shadow: 0px 0px 10px black;
}
.btn{
  background-color: /*#4285F4*/ none;
  font-size: 25px;
}
.btn:hover{
  cursor: pointer;
  color: white;
  background-color: #34A853;
 
}



/*css for content*/
.single>p{
    display: inline-block;
   display: inline-table;
   float: left;
}
.content{
  width: 378%;
  height: 1500px;
  /*border: 10px solid green;*/
  margin-left: 135%;
  margin-top: -220%;
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
  width: 80%;
  height: 150px;
}

.imgg>img{
  width: 30%;
  height: 80px;
 border-color: 2px solid red;
  border-radius: 50%;
  margin-top: -4%;
}
/*.card-body>.card-text>b>.alg{
  padding: 2%;
}*/
.name{
  font-size: 28px;
  color: blue; 
}
.data{
  font-size: 15px;
  color: brown;
}
.error{
  color: red;

}
.card-body>.card-text>a{
  text-decoration: none;
  font-size: 20px;
}
.card-body>.card-text>a:hover{
  color: blue;
  
}
.content>.box>.like{
  width: 20%;
  color: red;
}
input[type=submit]{
      font-size: 12px;
      border-radius: 
}
.like{
  font-size: 20px;
  color: red;
}
.alg{
  text-transform: uppercase;
}
  /*Work for responsive*/
  
@media(min-width: 200px) and (max-width: 600px){
     .site>img{
        height: auto;
        width: 200%;
        text-align: center;
        border: 2px solid red;            
      }
      img{
        border-radius: 20%;
        text-align: center;
      }   
      .content{
  width: 190%;
  height: 1000px;
  border: 10px solid green;
  margin-left: -13%;
  margin-top: -220%;
  display: inline-block;
  float: left;
}
 .sidebar{
  /*border: 5px solid red;*/
  margin: 0;
  padding: 0;
  /*position: fixed;*/
  width: 100%;
  background-color: green;
  text-align: center;
  height: auto;
 
}   
.sidebar>.card-title{
  text-align: center;
}   
}
</style>
</head>
<body>



    <?php
        require_once("../function/function.php");
        if (isset($_POST['upload'])) {
          // $user_content=$content_image=$date_time="";
          // $username=$_POST['username'];
          $user_content=$_POST['user_content'];
          // $content_image=$_POST['content_image'];




          $image_name=$_FILES['image']['name'];
          $image_tmp_name=$_FILES['image']['tmp_name'];
          $image_size=$_FILES['image']['size']/(1024*1024);

          $path="../photos/$image_name";

          $extension=pathinfo($path,PATHINFO_EXTENSION);
          if ($extension=="jpg" || $extension=="png") {
            if ($image_size>5) {
              echo "only less than 1 mb files are allowed";
            }
            else
            {
              $image_name=md5(mt_rand(1,10000)).".$extension";
              $path="../photos/$image_name";
              upload($user_content,$image_name,$image_tmp_name,$path);
            }
          }

          // $date_time=$_POST['date_time'];


          // if (!empty($user_content)&& !empty($content_image)) {
            
          // }
          else{
            echo "<div class='error'>please fill up the data</div>";
          }
        }



    ?>

<div class="topnav">
<div class="top"> 
    <div class="site"> <img src="../images/b.png"></div>
    <div class="btn">
      <button type="submit" name="btn"><a href="logout.php"> Logout</a></button>
    </div>
    </div> <!-- top -->
</div>
  
 <div class="sidebar"><ul class="navbar-nav mr-auto">
        <div class="card" style="width: 18rem;">
      <h5 class="card-title"> My Account</a></h5>
 <!--  <img class="card-img-top" src="../images/2.jpg" alt="Card image cap"> -->

  <div class="card-body">
    <p class="card-text"><b class="alg"><?php if(isset($_SESSION['username'])) {echo "".$_SESSION['username'];$id=$_SESSION['id']; }?></b></p>
    <p class="card-text"><?php  get_profile($id); ?><a href="mypost.php">My post</a> </p>
    <p class="card-text"><a href="edit_profile.php">Edit profile</a></p>
    <br>

    <fieldset class="field">
      <legend class="lg">upload post</legend>
    <form class="frm" action="main_user_page.php" method="post" enctype="multipart/form-data">
        <p>
          <label for="user_content">Write something here</label>
          <textarea cols="15" rows="5" name="user_content"></textarea>
        </p>
        <p>
          <label for="file">add  image</label>
          <input type="file" name="image">
        </p>
        <p>
          <center><button class="btn" type="submit" name="upload">Upload</button></center>
        </p>
    </form>
  </fieldset>
  </div><!--  sidebar -->


          <?php   require_once("../function/function.php");
      if (isset($_POST['like'])) {
        if (isset($_SESSION['total_likes'])) {
          
        }
        else
        {
          $total_likes=array();
          $_SESSION['total_likes']=$total_likes;
        }


        if (isset($_POST['id'])) {
          $id=$_POST['id'];
          $single_product=array($id);
          array_push($_SESSION['total_likes'],$single_product);
          // echo "add like successfully";
          // for insert like into the data:
            like_btn();
        }
      }
  ?><?php       require_once("../function/function.php");
        if(isset($_SESSION['total_likes'])){
          $c=0;
          
          foreach($_SESSION['total_likes'] as $x){
            $c++;
          }
          echo "total likes are ($c) ";
   

        }
    ?>
            <div class="content">
              <?php
        show_content();
    ?>
  </div>
     
 
</body>
</html>

