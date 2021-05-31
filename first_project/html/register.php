<html>
<head>
  <title>HAMRIWRITING/REGISTER</title>
  <script type="text/javascript" src="../jquery.js"></script>
   <meta charset="utf-8">
    <meta name="description" content="This webiste is created to share your writing skill like poem , shayari , jokes and other thoughts andc visit site for serch these things ">
    <meta name="keywords" content="Jokes,memes,poems,shayari">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/main2.css">
<style type="text/css">
 .reg{
    font-size: 30px;
    text-align: center;
    color: white;
    text-shadow: 0px 0px 10px red;
    text-transform: uppercase;
  }

</style>
</head>
<body>

  <?php
     require_once("menu_bar1.php");
  ?>
 
<?php
  // require_once("../function/function.php");
  //   if (isset($_POST['register'])) {
  //       $username=$psw=$cpsw="";
  //       $username=$_POST['username'];
  //       $psw=$_POST['psw'];
  //       $cpsw=$_POST['cpsw'];


  //       if (!empty($username) && !empty($psw) ) {
  //           register($username,$psw);
  //         // echo "<div class='reg'>work on progress</div>";
  //       }
  //       else
  //       {
  //         echo "please fill the form data";
  //       }
  //   }

?>
<center>
<!-- <form action="" method="post">
 -->
  <div class="container">
  
  </div>
 <!-- enctype="enctype='multipart/form-data'" -->
<form>
    <h2>Register Form</h2>
   <p> <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" class="username" name="username">
    <span class="username_error"></span></p>

   <p> <label for="password"><b>Password</b></label>
    <input type="text" placeholder="Enter Password" class="password" name="password" pattern="(?=.\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
     <span class="password_error"></span></p>

   <p> <label for="cpassword"><b>Confirm Password</b></label>
    <input type="text" placeholder="Enter Password" class="cpassword" name="cpassword" >
     <span id="cpassword_error"></span></p>
   <p class="resl"></p>     
   <p> <button type="button" class="register">Register</button></p>
   

    <p class="result"></p></form>
   <!--  <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> -->
  </div>

  <div class="container">
    
    <span class="already">already have an account? <a href="login.php">login</a></span>
  </div>

</center>
<?php
     require_once("footer.php");
  ?>
</body>
</html>
<script type="text/javascript">

  $(function(){
    var username_error=password_error=cpassword_error=0;

    $(document).on("click",".register",function(){
      var result=$(".result");
          var username,password,cpassword;
          check_username($(".username"));
          
          check_password($(".password"));
          check_cpassword($(".cpassword"));

          if (username_error==0 && password_error==0 && cpassword_error==0) {

          username=$(".username").val();
          
          password=$(".password").val();
          // cpassword=$(".cpassword").val();
          
          $.ajax({
                url:"../function/function.php",
                method:"post",
                datatype:"Text",
                data:{
                  register:"register",
                  
              
                  username:username,
                  password:password

                  // cpassword:cpassword
                },
                beforeSend:function(){
                    result.html("Processing..");
                    // alert(password);

                },
                success:function(data){ // json  
                  // json ===> java script object
                  console.log(data);
                  var obj=JSON.parse(data);
                  console.log(obj);

                  if(obj.success==true)
                      {
                    result.html(obj.message).css("color","green");
                  }
                  else{
                    result.html(obj.message).css("color","red");
                  }
                }

          });
        }
        else
        {
          // result.html("correct form").css("color","red");
        }
    });

        $(document).on("blur",".username",function(){
        check_username($(this));       
    });

    function check_username(me){
      var pattern=/^[a-z\s]{3,40}$/i;
        var data=$.trim(me.val());
        username_error=match(pattern,data,me,".username_error","Invalid username");
        // check=true;
    }


      

    $(document).on("blur",".password",function(){       
        check_password($(this));
    });

    function check_password(me){
    
      var pattern=/^[a-z0-9]{8,14}$/i;
      // var pattern=/^(?=.\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
        var data=$.trim(me.val());
        password_error=match(pattern,data,me,".password_error","Invalid password  min length 8 char");
        // if (pattern![a-b0-9]) {
        //   password_error="must used character";
        // }
        // check=true;
      
    }

    $(document).on("blur",".cpassword",function(){
        check_cpassword($(this));
    });

    function check_cpassword(me){
      var pattern=/^[a-z0-9]{3,40}$/i;
        var data=$.trim(me.val());
        cpassword_error=match(pattern,data,me,".cpassword_error","Invalid confirm password");
        // check=true;
   }
});

    function match(pattern,data,ele,child,error){

      if(pattern.test(data)){
        ele.parent("p").children(child).html("");
        ele.parent("p").children("input").removeClass("error");
        return 0; // no error
      }
      else{
        ele.parent("p").children("input").addClass("error");
        ele.parent("p").children(child).html("* "+error).css("color","red");
        return 1; // error 
      }
    }

    $(document).ready(function(){

        $('.cpassword').keyup(function(){
          var password=$('.password').val();
          var cpassword=$('.cpassword').val();

          if (cpassword!=password) {
            $('.resl').html('password not matching');
            $('.resl').css('color','red');
            return false;
          }
          else{
            $('.resl').html('');
            return true;
          }
        });
    });

  
</script>

