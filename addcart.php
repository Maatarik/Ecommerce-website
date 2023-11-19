<!DOCTYPE html>
<html lang="fr">
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php
session_start();
function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost',	'root',	'','e_commerce');
return	$basi; }
	echo "fvfv";
	if (isset($_SESSION['email']) && isset($_SESSION['password1'])) {
		if (isset($_POST['adCart'])) {
		  	$lien=connectMaBasi();

	$quantite=$_POST['qnt'];
	$art_id=$_GET['ar_id'];
	$idd="SELECT id FROM user where email='".$_SESSION['email']."'";
	$run1=mysqli_query($lien,$idd);
	$res=mysqli_fetch_array($run1);
	$res1=$res['id'];

	$check="SELECT * FROM cart  where c_ref='".$_SESSION['ref']."' and ar_id='".$art_id."' ";
	$run=mysqli_query($lien,$check);
	if (mysqli_num_rows($run)>0) {

		$sqla="update cart set quantite='".$quantite."' where c_ref='".$_SESSION['ref']."' and ar_id='".$art_id."' ";
		$run2=mysqli_query($lien,$sqla);
	/*echo "<script>alert('Cet artice est dèja ajouté à la carte !')</script>";
	echo "<script>window.open('details.php?art_id=$art_id','_self')</script>";*/
	header('location:cart.php');
	}
	 else{

if(!isset($_SESSION['ref'])){
		$sql2='INSERT INTO commmande VALUES (NULL,"'.$res1.'",NOW())';
		$run2=mysqli_query($lien,$sql2);
	$iddd="SELECT MAX(ref) FROM commmande";
	$run5=mysqli_query($lien,$iddd);
	$res=mysqli_fetch_array($run5);
	$res2=$res[0];
	$_SESSION['ref']=$res2;
	echo $res2;
	$sql='INSERT INTO cart VALUES ("'.$art_id.'","'.$quantite.'","'.$res2.'")';
	$run2=mysqli_query($lien,$sql);
		header('location:cart.php');}
else{

	$sql5='INSERT INTO cart VALUES ("'.$art_id.'","'.$quantite.'","'.$_SESSION['ref'].'")';

	$run2=mysqli_query($lien,$sql5);
		header('location:cart.php');}

	}
	}
	}
	else{
			echo "<script>alert('Vous n'etes pas connecté !')</script>";
	echo "<script>window.open('connection.php','_self')</script>";
	}


?>
