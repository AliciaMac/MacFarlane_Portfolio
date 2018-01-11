<?php


require_once("admin/scripts/load.php");
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$street = $_POST['street'];
$direct = "Thankyou.php";

if($street ==="") {
$sendMail = submitMessage($name, $email, $message, $direct);
//echo "street is empty";
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>Alicia's Portfolio</title>
	<link rel="stylesheet" href="css/main3.css">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">
</head>
<body>
<div class="container">

<div>
		<img src="assets/background.png" class="background">
		<h1 class="nameside1"><< </h1>
		<h1 class="nameside2"> >> </h1>
		<h1 class="firstname">A</h1>
		<h1 class="lastname">MACFARLANE </h1>
		<h1 class="workname">graphic | web | motion design</h1>
		<h2 class="scroll">scroll for more</h2>
		<img src="assets/arrow.png" class="arrow">
		<img src="images/circle.png" class="circle" alt="" display="small-only">
		<img src="assets/welcomegirl.svg" class="welcome" style="width:300px">
		<img src="assets/watercolortext.svg" class="watercolor" style="width:500px">
		<p class="portfoliowelcometext">My name is Alicia</p>
		<p class="portfoliowelcometext2">I am currently enrolled </p>
		<p class="portfoliowelcometext3">At Fanshawe College!</p>
		<p class="portfoliowelcometext4">This is my portfolio! </p>

 <div class="box">
    </div>
</div>


<div>
	<img src="images/learn.svg" width="250px" height="250px" alt="learn icon" class="learn">
	<img src="images/brainstorm.svg" width="300px" height="300px" alt="brainstorm icon" class="brainstorm">
	<img src="images/make.svg" width="300px" height="300px" alt="make icon" class="make">
</div>


<div>
		<img src="images/laptopGirl.svg" width="300px" height="300px" alt="laptop girl" class="laptopGirl">
		<p class="laptopText">I have been at fanshawe for a year now, I have learned <br>not only to code/design responsive websites I have also
		learned animation!<br> Check out some of my 3D work below.</p>
	</div>


	<div class="ThreeD">
		<img src="images/Nail_polish_1.png" id="1" alt="nail polish animation " class="lightboxThumb nailPolish">
		<img src="images/Nail_Polish_2.png" id="2" alt="mascara animation" class="lightboxThumb nailPolish2">
		<img src="images/Nail_Polish_3.png" id="3" alt="mascara and nail polish" class="lightboxThumb nailPolish3">
	</div>
	<div class="lightbox hidden" id="">
		<img class="lightboxImg" src="" alt="image">
	</div>

	<img src="images/readinggirl.svg" width="300px" height="300px" class="readinggirl" alt="">
	<h1 class="readingText">Learning to code was a process,<br>
some examples below are projects<br>
 I coded in/for school using a mixture<br>
of HTML5, CSS3 + JAVASCRIPT <br></h1>
<img src="images/akimalbuild.png" class="website1"alt="">
<img src="images/SaturatedStudios.png" class="website2" alt="">
<img src="images/graduatinggirl.svg" class="graduatingGirl" width="300px" height="300px"alt="">
<h1 class="graduatingText">Once I graduate in 2018 i’ll be proficient in:</h1>
<img src="images/html.svg" class="html"width="100px" height="100px" alt="">
<img src="images/css.svg" class="css" alt=""width="100px" height="100px">
<img src="images/javascript.svg" class="javascript" width="100px" height="100px"alt="">
<img src="images/php.svg" class="php" width="100px" height="100px"alt="">
<img src="images/after-effects.svg" class="ae" width="100px" height="100px"alt="">
<img src="images/illustrator.svg" class="illustrator" width="100px" height="100px"alt="">
<img src="images/photoshop.svg" class="photoshop" width="100px" height="100px"alt="">
<img src="images/C4D_Logo.png" class="cinema" alt="">


<h1 class="artText">Check out more work I am proud of!</h1>
<img src="images/artshowgirl.svg" class="artGirl" width="300px" height="300px"alt="">
<img src="images/DOTH.png" class="doth" alt="">
<video src="images/Soccervideo.mp4" class="soccervideo" controls></video>
<video src="images/SilverWolfWineVideo.mp4" class="Silvervideo" controls></video>

<div class="spacer"></div>
<h1 class="contactMe">CONTACT ME! </h1>
		<form action="index.php" method="post">
		<!--Make sure to give each input a name attribute(name="")-->
		<label class="name">Name: </label><input class="name" type="text" size="21" maxlength="30" name="name"/><br>
		<label class="email">Email: </label><input class="email" type="text" size="21" maxlength="30" name="email"/><br>
		<label for="street" class="street">Street: </label><input class="street" name="street" type="text" size="21" maxlength="30" /><br>
		<label for="message" class="message">Message: </label><textarea name="message"></textarea>
		<input class="submit" type="submit" value="Send" name="submit"/>
		</form>

		</div>

<script src="js/main.js"></script>






	</body>
	</html>
