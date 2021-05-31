<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HAMRIWRITING/OUR TEAM</title>
	<link rel="stylesheet" href="../css/main2.css">
   <meta charset="utf-8">
    <meta name="description" content="This webiste is created to share your writing skill like poem , shayari , jokes and other thoughts andc visit site for serch these things ">
    <meta name="keywords" content="Jokes,memes,poems,shayari">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Allura|Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.wrapper{
  margin-top: 8%;
}

.wrapper h1{

  font-size: 50px;
  margin-bottom: 60px;
  text-align: center;
  color: white;
}

.team{
  display: flex;
  justify-content: center;
  width: auto;
  text-align: center;
  flex-wrap: wrap;
}

.team .team_member{
  background: #fff;
  margin: 5px;
  margin-bottom: 50px;
  width: 300px;
  padding: 20px;
  line-height: 20px;
  color: #8e8b8b;  
  position: relative;
  box-shadow: 0px 0px 8px white;
}

.team .team_member h3{

  color: black;
  font-size: 26px;
  margin-top: 50px;
}

.team .team_member p.role{
  /*color: #ccc;*/
  color: black;
  margin: 12px 0;
  font-size: 12px;
  /*text-transform: uppercase;*/
}

.team .team_member .team_img{
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 120px;
  height: 120px;
  border-radius: 50%;
  background: #fff;
}

.team .team_member .team_img img{
  width: 120px;
  height: 120px;
  padding: 5px;
  border-radius: 50%;
}

@media(min-width: 300px) and (max-width: 400px){
   .wrapper h1{
      font-size: 20px;
   }
}
  </style>

</head>
<body>
  <?php
     require_once("menu_bar1.php");
  ?>

<div class="wrapper">
  <h1>Our Team</h1>
  <div class="team">
    <div class="team_member">
      <div class="team_img">
        <img src="../profiles/default.jpg" alt="Team_image">
      </div>
      <h3>Piyush </h3>
      <p class="role">DEVELOPER<br>Phone no:- 7777777777<br>Gmail:- piyushnainwal090@gmail.com</p>
      <p>B.Sc M.S.IT(3rd sem)<br> India.</p>
    </div>
    <div class="team_member">
      <div class="team_img">
        <img src="../profiles/default.jpg" alt="Team_image">
      </div>
      <h3>Deepak </h3>
      <p class="role">DEVELOPER<br>Phone no:- 77777777<br>Gmail:- dm6433652@gmail.com</p>
      <p>B.Sc P.C.M(6th sem)<br> India.</p></div>
    <div class="team_member">
      <div class="team_img">
        <img src="../profiles/default.jpg" alt="Team_image">
      </div>
      <h3>Girish </h3>
      <p class="role">DEVELOPER<br>Phone no:- 77777777<br>Gmail:- girish63kumar@gmail.com</p>
      <p>B.Ca (6th sem)<br> India.</p>
    </div>
  </div>
</div>	

<?php
     require_once("footer.php");
  ?>

</body>
</html>