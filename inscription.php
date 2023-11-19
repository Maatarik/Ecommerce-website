<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<div class="jain-container" id="screen">
	<?php include 'header.php'; ?>
<div class="row" id="connectSection">
	<div class="col-md-6" id="form">
		<form method="post" action="inscription.php" id="maform">
			<input type="text" name="nom" placeholder="Nom" class="txt"><br><br>
			<input type="text" name="prenom" placeholder="Prenom" class="txt"><br><br>
			<input type="text" name="mail" placeholder="E-mail" class="txt"><br><br>
            <input type="text" name="tel" placeholder="tel" class="txt">
			<br><br>
			<input type="password" name="pssw1" placeholder="Mot de passe" class="txt"><br><br>
			<input type="password" name="pssw2" placeholder="Confirmer le Mot de passe" class="txt"><br><br>
			<input type="submit" name="inscrire" value="S'inscrire" class="btnCon">
		</form>
	</div>
		<div class="col-md-6" id="inscrire">
			<h1>Vous avez deja un compte ?<br><span>Connectez-vous maintenant !</span></h1><br><br><br>
			<a href="connection.php">Se connecter</a>
		</div>
</div>
	</div>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script
			  src="https://code.jquery.com/jquery-3.4.0.js"
			  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
			  crossorigin="anonymous"></script>
			  <?php
			  function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost',	'root',	'','e_commerce');
return	$basi; }
if (isset($_POST['inscrire'])) {
		$lien=connectMaBasi();
	$Nom=$_POST["nom"];
	$Prenom=$_POST["prenom"];
	$Email=$_POST["mail"];
	$Tel=$_POST["tel"];
	$password1=$_POST["pssw1"];
	$password2=$_POST["pssw2"];
if ($Nom=="" || $Prenom=="" || $Email=="" || $Tel=="" || $password1=="" || $password2=="") {
	echo "<script>alert('Merci de remplire tous les champs !');</script>";
}
 else{
 	if ($password1!=$password2) {
 		echo "<script>alert('Le deuxieme mot de passe est incorrecte !');</script>";
 	}
 	else{


 		$sql='INSERT INTO user  (nom, prenom, email, tel, password)  VALUES("'.$Nom.'","'.$Prenom.'","'.$Email.'","'.$Tel.'","'.$password1.'")';
 		$res =mysqli_query($lien,$sql) ;
 		if (!$res) {
 			echo "<script>alert('Vous avez deja un compte !');</script>";
 		}
 		else{echo "<script>alert('Merci pour votre inscription !');</script>";
 		echo "<script> window.location.replace('connection.php');</script>";}
 	}}
 }

			  ?>
</body>
</html>
