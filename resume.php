<!DOCTYPE html>
<html>
<head>
	<title>resumé d'achat</title>
</head>
<body style="background-color: lavender ; border: 1;
text-align: center; " lang="fr">
<p lang="fr" style="border-color: gray; border-style: solid; ">
	<div class="border" style="top: 50;bottom: 1000;margin-top: 100px;
	color:#000;
	border-style: solid;
	text-decoration: none;
		font-size:20px;
	background: lavender;
	font-family: font1;
	border:0px;
	padding:10px;
	border-radius: 20px;
	padding-left: 26px;
	padding-right:26px;
	transition: 0.3s all;">
	<img src="./images/code.png" style="">
<h1> En resumant votre achat</h1>
	<?php session_start();
	function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost',	'root',	'','e_commerce');
return	$basi; }
$lien=connectMaBasi();
	$req="SELECT * FROM cart where c_ref='".$_SESSION['ref']."'";
	$run=mysqli_query($lien,$req);
	while($res=mysqli_fetch_array($run)){


	$sql5='INSERT INTO lignedecommande VALUES ("'.$res[0].'","'.$res[1].'","'.$res[2].'")';

	 $run2=mysqli_query($lien,$sql5);


	}
	$sql="DELETE from cart";
	$supp=mysqli_query($lien,$sql);

	 echo "<h5> bienvenue MR/MDM  " .$_SESSION['nom']."   ".$_SESSION['prenom']."</h5>";
     echo"<h5>votre adresse est : ".$_SESSION['adresse']."</h5>";
     echo "<h5>le montant total de payement est:".$_SESSION['total']." DH</h5>";
     echo"<h5>".$_SESSION['payer']."</h5>";
     session_destroy();


	 ?><a href="index.php"> <input type="submit" name="" value="page d'accueil"></a>
	</div></p>

</body>
</html>
