<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body style="background-color:lavender;">
<br>
	<div class="row" id="ctc" style="background-color:white;">
		<div class="col-md-4" id="case1"><p><i class="fas fa-smile-wink"></i> les meilleures prix sont ici  </p></div>
		<div class="col-md-4" id="case1"><p><i class="fas fa-map-marker-alt"></i>  shopp  </p></div>
		<div class="col-md-4" id="case1"><p><i class="fas fa-phone-volume"></i>  +212 611 32 23 66/+212 664 756 762</p></div>
	</div>
	<?php
	session_start();
if (isset($_SESSION['email']) && isset($_SESSION['password1'])) {?>
	<form action="process.php" method="post"><div class="compte" style="">
		<?php echo "       <i>  BIENVENUE  <b><u>".$_SESSION['prenom']."  --></u></b></i>"; ?>
		<a href="modifier.php"><input type="submit" name="update" value="modifier votre profil" size="20" style=" width:130px; background-color:transparent; border:none;" ></a>
		<a><input type="submit" name="deco" value="Se deconnecter" size="20" style="width:130px;background-color:transparent; border: none;" ></a></form>
		</div>
	<?php
}
else{
	?>
	<div class="compte" style="background-color:white;"><a href="connection.php">Se connecter</a><a href="inscription.php">Creer un compte</a> <a href="admin.php">espace admin </a>

	</div>
	<?php


}
?>

	<div class="logo" style="background-color:white;"><h1><a href="index.php">accueil</a></h1></div>

	<div class='icons' style='background-color:white;'>
      <form action="search.php" method="post" class="example">
			<input type="text" name="vv" placeholder="rechercher un produit..." style="border:none;" >
			<select name="choise" bgcolor="white" size="1" style="border:none; width:1;">
   <option valeur="fr">all</option>
   <option valeur="nl">telephone</option>
   <option valeur="en">ordinateur</option>
   <option valeur="other">tablette</option>
   <option valeur="other">accessoire</option>
</select></input>
			<button type="submit" name="sub" value="" type="btn-primary" class="button8" style="border:none; background-color: white;"><i class="fa fa-search"></i></button>
        </div>
		<div class="panier">
	<?php
	if (isset($_SESSION['email']) && isset($_SESSION['password1'])){

	echo"  ";
	echo"  <a href='cart.php'><i class='fas fa-shopping-cart'>    panier</i></a>";}
	 ?>

	</form></div>



		<div class="menu" style="background-color:white;" align="left">
		<ul>

			<li><a href="all.php"> <i class="fas fa-plus-square"> NouveutEs</i></a></li>
			<li><a href="telephone.php"><i class="fa fa-phone-square" aria-hidden="true">telephones</i></a></li>
			<li><a href="ordinateur.php"><i class="fas fa-laptop"> ordinateurs</i></a></li>
			<li><a href="tablette.php"><i class="fa fa-tablet-alt" aria-hidden="true"> Tablettes</i></a></li>
			<li><a href="cam.php"><i class="fa fa-camera" aria-hidden="true"> Camera</i></a></li>
			<li><a href="accessoire.php"><i class="fas fa-headphones-alt"> accessoires</i></a></li>
		</ul>
	</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script
			  src="https://code.jquery.com/jquery-3.4.0.js"
			  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
			  crossorigin="anonymous"></script>
</body>
</html>
