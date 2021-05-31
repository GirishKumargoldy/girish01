<html>
<head>
  <title>HAMRIWRITING/LOGIN</title>
  <script type="text/javascript" src="../jquery.js"></script>
<link rel="stylesheet" type="text/css" href="../css/main2.css">
 <meta charset="utf-8">
    <meta name="description" content="This webiste is created to share your writing skill like poem , shayari , jokes and other thoughts andc visit site for serch these things ">
    <meta name="keywords" content="Jokes,memes,poems,shayari">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
  .terror{

    font-size: 40px;
    text-align: center;
    color: red;
    text-shadow: 0px 0px 4px yellow;
    text-transform: uppercase;
}
  .reg{
    font-size: 30px;
    text-align: center;
    color: white;
    text-shadow: 0px 0px 10px red;
    text-transform: uppercase;
  }

</style>
</head>
<body class="login">
   <?php
     require_once("menu_bar1.php");
  ?>
   <?php
        // require_once("../function/function.php");

        // if (isset($_POST['login'])) {
        //   $username=$password="";
        //   $username=$_POST['username'];
        //   $password=$_POST['password'];


        //   if (!empty($username) && !empty($password)) {
        //     login($username,$password);
            
        //   }
        // }
  ?> 

 
<center>

  <div class="container_login1">
  
  

<form action="" method="">

  <div class="container_login2">
    <div class="img">
    <h2>Login Form</h2>
    <label for="email"><b>email</b></label><br>
    <input type="email" placeholder="Enter registered email id" name="username" class="email"><br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" class="password">
        
    <button type="submit" name="login" class="login">Login</button>
   <!--  <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> -->
  </div>
     
  <div class="container_login3">
   <!--  <button type="button" class="cancelbtn">Cancel</button> -->
    <span class="password">Forgot <a href="#">password?</a></span>
  </div>
</div>
</form>
</center>
<?php
     require_once("footer.php");
  ?>
</body>
</html>

<script type="text/javascript">
            $(function(){
                $(document).on("click",".login",function(){
                  var me=$(this);
                  var email=$.trim($(".email").val());
                  var password=$.trim($(".password").val());
                  $.ajax({
                    url:"login_function.php?"+new Date().getTime(),
                    method:"post",
                    datatype:"text",
                    data:{login:"login",email:email,password:password},
                    beforeSend:function(){
                      me.html("login..");
                    },
                    success:function(data){
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