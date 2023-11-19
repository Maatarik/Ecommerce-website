<?php session_start();
function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost',	'root',	'','e_commerce');
return	$basi; }
if (isset($_GET['art_id'])) {
	$lien=connectMaBasi();
	$artId=$_GET['art_id'];
	$c_ref=$_SESSION['ref'];
	echo $artId;
	echo $c_id;
	$sqla="DELETE FROM cart where c_ref=$c_ref && ar_id=$artId";
					    $res=mysqli_query($lien,$sqla);

					     echo "<script> window.location.replace('cart.php');</script>";    }
?>
