<?php
if (isset($_SESSION['email']) && isset($_SESSION['password1'])) {
header('location:index.php');
}
?>
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
		<form method="post" action="process.php" id="maform">
				<?php
if (@$_GET['Empty']==true) { ?>
	<div class="alert alert-warning" role="alert"><?php echo $_GET['Empty'];?></div>
	<?php
}
?>
<?php
if (@$_GET['Invalid']==true) { ?>
	<div class="alert alert-danger" role="alert"><?php echo $_GET['Invalid'];?></div>
	<?php
}
?>
			<input type="text" name="mail" placeholder="E-mail" class="txt"><br><br>
			<input type="password" name="pssw" placeholder="Mot de passe" class="txt"><br><br>
			<input type="submit" name="connecter" value="Se connecter" class="btnCon">
		</form>
	</div>
		<div class="col-md-6" id="inscrire">
			<h1>Vous n'avez pas un compte ?<br><span>Creez-le maintenant !</span></h1><br><br><br>
			<a href="inscription.php">Creer Un Compte</a>
		</div>
</div>
	</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script
			  src="https://code.jquery.com/jquery-3.4.0.js"
			  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
			  crossorigin="anonymous"></script>
</body>
</html>