<?php
session_start();
function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost',	'root',	'','e_commerce');
return	$basi; }
if(isset($_POST['connecter'])){
	if (empty($_POST['mail']) || empty($_POST['pssw'])) {

		header('location:connection.php?Empty=Merci de remplire tous les champs !');
	}
	else{
		$lien=connectMaBasi();
$sql="SELECT *from user where email='".$_POST['mail']."' AND password='".$_POST['pssw']."'";
$res=mysqli_query($lien,$sql);$_SESSION['email']=$_POST['mail'];
if ($tab=mysqli_fetch_array($res)) {
    $id=$tab[0];
    $_SESSION['nom']=$tab[1];
    $_SESSION['prenom']=$tab[2];
    $_SESSION['id']=$id;
    $_SESSION['password1']=$_POST['pssw'];
    header('location:index.php');
}
else{
	header('location:connection.php?Invalid=E-mail ou mot de passe est incorrecte ! <a href="mdp.php"> vous avez oublier le mot de pase ??</a>');
	}
}
}
if (isset($_POST['deco'])) {
	session_destroy();
	header('location:index.php');
}
if (isset($_POST['update'])) {
	header('location:modifier.php');
}
?>
