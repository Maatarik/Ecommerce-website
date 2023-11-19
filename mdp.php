
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body style='background-color:lavender;' class='adForm'><form class='sed' method='post'>
	<?php
	session_start();
	$email=$_SESSION['email'];
	echo"<h1><center> vous avez oublie le mot de passe </center></h1>";
    echo"<h3><center> vous devez saisir le code d'activation recu a $email </center></h3>";

    echo"<input type='text' name='te' placeholder='code de 4 chiffres'>";
    echo"<input type='submit' name='psw' value='envoyer'>";?>
</form>
    



</body>