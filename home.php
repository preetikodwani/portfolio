<?php
session_start();
if(!isset($_Session['name'])){
header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>online library</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
body{
  background-image: url("bok.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
 }
h1{
  text-shadow: 2px 2px 5px red;
  margin-top: 100px;
}
h2{
margin-left: 60px;
padding: 10px;
font-size: 170%;
}
.bod{	
  background-color: #f9f9f9;
  color: black;
  margin-left:60px;
  margin-right:60px;
  padding:10px;
  
}
section{
  float: right;
  padding-right: 60px;
}
#navi{
  margin-left: 50px;
  padding-right: 10px;
  top: 0;
  float:right;
}

.nav{
  background-color: #f9f9f9;
  color: black;
  width: 1130px;
  margin-left:60px;
  top: 0;
  font-size: 200%;
  position: fixed;
}
.nav a{
  position: relative;
  float: left;
  padding: 14px 16px;
  font-size: 30px;
  color: black;
  text-align: center;
  text-decoration: none;
}
.dropdown{
  float: left;
  overflow: hidden;
}
.dropdown.dropbtn{
  font-size: 50px;
  border: none;
  outline: none;
  color: black;
  padding: 16px ;
  background-color: inherit;
  font-family: inherit;
  }
.nav a:hover, .dropdown:hover .dropbtn{
  background-color: green;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 10;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px ;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: gray;
}
.dropdown:hover .dropdown-content {
  display: block;
}
div.gallery {
  margin-left: 60px;
  display: inline-block;
  border: 1px solid #ccc;
  float: left;
  width: 150px;
  
  justify-content: centre; 
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 150px;
  height: 200px;
}

div.desc {
  display: inline-block;
  width: 70px;
  font-size: 20px; 
  text-align: center;
}

@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
@media screen and (max-width:600px) 
{
  .topnav.responsive{position: relative;}
  .topnav.responsive a.icon{
  position: absolute;
  right: 0;
  top: 0; 
 }
.topnav.responsive a {
  float: none;
  display: block;
  text-align: left;
 }
  .topnav.responsive.dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown.dropbtn {
	display: block;
	width: 100%;
	text- align: left;
}
}
</style>

<body>
  <div class="nav">
  	<a href="index.html">HOME</a>
	<a href="req.html">REQUEST</a>
  	<a href="aboutus.html">ABOUT US</a>
	<div id = navi>
		<input type= "text" placeholder="Search" name="txtUser" maxlength="30" />
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		<h1>WELCOME <?php $_Session['name']; ?> </h1>
	</div>
	<div class="dropdown">
    		<button class="dropbtn">GENRE</button>
    		<div class="dropdown-content">
      			<a href="self.html">SELF HELP</a>
      			<a href="thrill.html">THRILLER</a>
     			<a href="religious.html">RELIGIOUS</a>
			<a href="romance.html">ROMANCE</a>
			<a href="kids.html">KIDS</a>
			<a href="novel.html">NOVEL</a>
			<a href="auto.html">AUTOBIOGRAPHY</a>
		</div>
    	</div>
</div> 

<h1 class = "bod"><b>ONLINE LIBRARY</b></h1>
 <section>
      <a href="admin.html">ADMIN</a><br><br>
      <a href="login.html">LOGIN</a>	|
      <a href="sign.html">SIGN-UP</a>
  </section>

<h2>FEATURED BOOKS</h2>
<div class="gallery">
  <a href="#">
    <img src="img53.jpg" alt="A GIRL ON THE TRAIN" >
</a>
  <div class="desc"><input type="button" value= "DOWNLOAD" />
			<input type="button" onclick= "window.location.href='Third Girl.pdf'" value="READ"/>
  </div>
</div>


<div class="gallery">
  <a href="#">
    <img src="img54.jpg" alt="A GIRL ON THE TRAIN" >
</a>
  <div class="desc"><input type="button" value= "DOWNLOAD" />
			<input type="button" onclick= "window.location.href='The Secret Adversary.pdf'" value="READ"/>
  </div>
</div>

<div class="gallery">
  <a href="#">
    <img src="img55.jpg" alt="A GIRL ON THE TRAIN" >
</a>
  <div class="desc"><input type="button" value= "DOWNLOAD" />
			<input type="button" onclick= "window.location.href='The Perks of being a Wallflower.pdf'" value="READ"/>
  </div>
</div>


<div class="gallery">
  <a href="#">
    <img src="img16.jpeg" alt="A GIRL ON THE TRAIN" >
</a>
  <div class="desc"><input type="button" value= "DOWNLOAD" />
			<input type="button" onclick= "window.location.href='i too had a luv story.pdf'" value="READ"/>
  </div>
</div>
<div class="gallery">
  <a href="#">
    <img src="img73.jpg" alt="A GIRL ON THE TRAIN" >
</a>
  <div class="desc"><input type="button" value= "DOWNLOAD" />
			<input type="button" onclick= "window.location.href='The man in the brown suit.pdf'" value="READ"/>
  </div>
</div>

<div class="gallery">
  <a href="#">
    <img src="img18.jpeg" alt="A GIRL ON THE TRAIN" >
</a>
  <div class="desc"><input type="button" value= "DOWNLOAD" />
			<input type="button" onclick= "window.location.href='eleanor-and-park.pdf'" value="READ"/>
  </div>
</div>
<div class="gallery">
  <a href="#">
    <img src="img65.jpg" alt="A GIRL ON THE TRAIN" >
</a>
  <div class="desc"><input type="button" value= "DOWNLOAD" />
			<input type="button" onclick= "window.location.href='charlotte.pdf'" value="READ"/>
  </div>
</div>
<div class="gallery">
  <a href="#">
    <img src="nagas.png" alt="A GIRL ON THE TRAIN" >
</a>
  <div class="desc"><input type="button" value= "DOWNLOAD" />
			<input type="button" onclick= "window.location.href='nagas.pdf'" value="READ"/>
  </div>
</div>
<div class="gallery">
  <a href="#">
    <img src="img47.jpg" alt="A GIRL ON THE TRAIN" >
</a>
  <div class="desc"><input type="button" value= "DOWNLOAD" />
			<input type="button" onclick= "window.location.href='Seriously I_m Kidding.pdf'" value="READ"/>
  </div>
</div>
<div class="gallery">
  <a href="#">
    <img src="meluha.png" alt="A GIRL ON THE TRAIN" >
</a>
  <div class="desc"><input type="button" value= "DOWNLOAD" />
			<input type="button" onclick= "window.location.href='mel.pdf'" value="READ"/>
  </div>
</div>
<div class="gallery">
  <a href="#">
    <img src="img50.jpg" alt="A GIRL ON THE TRAIN" >
</a>
  <div class="desc"><input type="button" value= "DOWNLOAD" />
			<input type="button" onclick= "window.location.href='The Warren Buffett Way.pdf'" value="READ"/>
  </div>
</div>
</div><div class="gallery">
  <a href="#">
    <img src="vayu.png" alt="A GIRL ON THE TRAIN" >
</a>
  <div class="desc"><input type="button" value= "DOWNLOAD" />
			<input type="button" onclick= "window.location.href='vayu.pdf'" value="READ"/>
  </div>
</div>
<div class="gallery">
  <a href="#">
    <img src="img62.jpg" alt="A GIRL ON THE TRAIN" >
</a>
  <div class="desc"><input type="button" value= "DOWNLOAD" />
			<input type="button" onclick= "window.location.href='gofhp.pdf'" value="READ"/>
  </div>
</div>

<div class="gallery">
  <a target="_blank" href="#a">
    <img src="img33.jpeg" alt="THE MYSTERIOUS AFFAIRS AT STYLE"/>
  </a>
  <div class="desc"><input type="button" value= "DOWNLOAD" />
			<input type="button" onclick= "window.location.href='The_Mysterious_Affair_At_Styles.pdf'" value="READ"/>
  </div>
</div>
<div class="gallery">
  <a href="#">
    <img src="img64.jpg" alt="A GIRL ON THE TRAIN" >
</a>
  <div class="desc"><input type="button" value= "DOWNLOAD" />
			<input type="button" onclick= "window.location.href='wimpy.pdf'" value="READ"/>
  </div>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="img21.jpeg" alt="THE DA VINCI CODE" />
  </a>
  <div class="desc"><input type="button" value= "DOWNLOAD" />
			<input type="button" onclick= "window.location.href='The_Da_Vinci_Code.pdf'" value="READ"/>
  </div>
</div>
<div class="gallery">
  <a target="_blank" href="#">
    <img src="img10.jpeg" alt="Mountains" />
  </a>
  <div class="desc"><button type="button">DOWNLOAD</button>
			<button type="button">READ</button>
  </div>
</div>
<div class="gallery">
  <a target="_blank" href="#">
    <img src="img11.jpeg" alt="Mountains" />
  </a>
  <div class="desc"><button type="button">DOWNLOAD</button>
			<button type="button">READ</button>
  </div>
</div>
<div class="gallery">
  <a target="_blank" href="#">
    <img src="img12.jpeg" alt="Mountains" />
  </a>
  <div class="desc"><button type="button">DOWNLOAD</button>
			<button type="button">READ</button>
  </div>

</div>
<div class="gallery">
  <a target="_blank" href="#">
    <img src="img13.jpeg" alt="Mountains22"/>
  </a>
  <div class="desc"><button type="button">DOWNLOAD</button>
			<button type="button">READ</button>
  </div>
</div>
<div class="gallery">
  <a target="_blank" href="#">
    <img src="img14.jpeg" alt="Mountains22"/>
  </a>
  <div class="desc"><button type="button">DOWNLOAD</button>
			<button type="button">READ</button>
  </div>
</div>
<div class="gallery">
  <a target="_blank" href="#">
    <img src="img15.jpeg" alt="Mountains22"/>
  </a>
  <div class="desc"><button type="button">DOWNLOAD</button>
			<button type="button">READ</button>
  </div>
</div>
<div class="gallery">
  <a target="_blank" href="#">
    <img src="img16.jpeg" alt="Mountains22"/>
  </a>
  <div class="desc"><button type="button">DOWNLOAD</button>
			<button type="button">READ</button>
  </div>
</div>
<div class="gallery">
  <a target="_blank" href="#">
    <img src="img17.jpeg" alt="Mountains22"/>
  </a>
  <div class="desc"><button type="button">DOWNLOAD</button>
			<button type="button">READ</button>
  </div>
</div>
<div class="gallery">
  <a target="_blank" href="#">
    <img src="img18.jpeg" alt="Mountains22"/>
  </a>
  <div class="desc"><button type="button">DOWNLOAD</button>
			<button type="button">READ</button>
  </div>
</div>
<div class="gallery">
  <a target="_blank" href="#">
    <img src="img19.jpeg" alt="Mountains22"/>
  </a>
  <div class="desc"><button type="button">DOWNLOAD</button>
			<button type="button">READ</button>
  </div>
</div>



  
</body>
</html>