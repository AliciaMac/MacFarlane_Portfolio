<?php
//require_once("admin/js/load.php");
if(isset($_POST['name'])){
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
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Us</title>
<link rel="stylesheet" href="css/main.css">
</head>

<body>
<form action="Thankyou.php" method="post">
<!--Make sure to give each input a name attribute(name="")-->
<label class="name">Name: </label><input class="name" type="text" size="21" maxlength="30" /><br>
<label class="email">Email: </label><input class="email" type="text" size="21" maxlength="30" /><br>
<label for="street" class="street">Street: </label><input class="street" name="street" type="text" size="21" maxlength="30" /><br>
<label for="message" class="message">Message: </label><textarea name="message"></textarea>
<input class="submit" type="submit" value="Send" class="submit"/>
</form>
</body>
</html>
