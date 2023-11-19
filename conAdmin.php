<?php
session_start();
if (isset($_SESSION['user']) && isset($_SESSION['password'])) {
header('location:admin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<body  class="adForm">
	<h1 style="text-transform: uppercase;text-align: center;margin-top: 100px;font-weight: bold;"> <u>BIENVENUE ADMINISTRATEUR,VEUILLEZ SE CONNECTER </u></h1> <br><br>
<form action="conAdmin.php" method="post">
	<input type="text" name="username" placeholder="Nom d'utilisateur"><br><br><br>
	<input type="password" name="password" placeholder="Mot de passe"><br><br><br>
	<input type="submit" name="cn" value="Se connecter" class="btn primary-btn">
	<input type="submit" name="cnn" value="revenir à la page d acceuil" class="btn primary-btn">
	<?php
function	connectMaBasi(){

$basi	=	mysqli_connect('localhost',	'root',	'','e_commerce');

return	$basi;
}

if(isset($_POST['cnn']))
	header('location:index.php');

if(isset($_POST['cn'])){
	if (empty($_POST['username']) || empty($_POST['password'])) {
		echo "<script>alert('Merci de remplire tous les champs');</script>";
	}
	else{
		$lien=connectMaBasi();
$sql="SELECT *from admin where user='".$_POST['username']."' AND password='".$_POST['password']."'";
$res=mysqli_query($lien,$sql);
if (mysqli_fetch_assoc($res)) {
	$_SESSION['user']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    header('location:admin.php');
}
else{
	echo "<script>alert('Nom dutilisateur ou mot de passe est incorrecte');</script>";
	}
}
}
	?>
</form>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script
			  src="https://code.jquery.com/jquery-3.4.0.js"
			  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
			  crossorigin="anonymous"></script>
</body>
</html>
