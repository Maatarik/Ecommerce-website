<?php
function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost',	'root',	'','e_commerce');
return	$basi;
if (isset($_SESSION['email']) && isset($_SESSION['password1'])) {
	$lien=connectMaBasi();
	$id="SELECT id FROM user where email='".$_SESSION['email']."'";
	$run1=mysqli_query($lien,$id);
	$sql="SELECT * FROM cart where c_id='".$run1."'";
	$run2=mysqli_query($lien,$sql);
	$count=mysqli_num_rows($run2);

}
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
	<div class="col-md-9">
	<div class="box">
		<form action="cart.php" method="post" enctype="multipart/form-data">
			<h1>Panier :</h1>
			<p class="text-muted">
				<?php
				if (!isset($_SESSION['email']) && !isset($_SESSION['password1']))
					{ header('Location:connection.php');}







							if (isset($_SESSION['email']) && isset($_SESSION['password1'])) {
	$lien=connectMaBasi();
	$id="SELECT id FROM user where email='".$_SESSION['email']."'";
	$run1=mysqli_query($lien,$id);
	$res=mysqli_fetch_array($run1);
	$res1=$res['id'];
	$ref=$_SESSION['ref'];

	/*$iddd="SELECT MAX(ref) FROM commmande   ";
	$run5=mysqli_query($lien,$iddd);
	$res=mysqli_fetch_array($run5);
	$res2=$res['ref'];*/

	$sql="SELECT * FROM cart where c_ref='".$ref."'";
	$run2=mysqli_query($lien,$sql);
	$count=mysqli_num_rows($run2);
	$somme=0;

}
?>
				Vous avez maintenant <?php echo $count;?> articles dans votre panier
			</p>
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
						<th colspan="2">Article</th>
						<th>Quantite</th>
						<th>Prix</th>
						<th colspan="1">Supprimer</th>
						<th colspan="2">Total</th>
					</tr>
					</thead>
					<tbody>
						<?php
			$sql3="SELECT * FROM cart where c_ref='".$ref."'";
	$run3=mysqli_query($lien,$sql3);
while($row=mysqli_fetch_array($run3)){
$artId=$row['ar_id'];
$quant=$row['quantite'];
$usId=$row['c_ref'];
$getAR="SELECT * FROM article where id='".$artId."'";
$runPro=mysqli_query($lien,$getAR);

while($row1=mysqli_fetch_array($runPro)){
	$image=$row1['image'];
	$title=$row1['nom'];
	$prix=$row1['prix'];
	$total=$prix*$quant;

?>
<tr>
						<td><img class="img-fluid" id="cartImg" src="images/<?php echo $image;?>"></td>
						<td><a href="details.php?art_id=<?php echo $artId;?>"><?php echo $title;?></a></td>
						<td><?php echo $quant;?></td>
						<td><?php echo $prix;?></td>
						<td><a href="supprimer.php?art_id=<?php echo $artId;?>" style="color: black;"><center> <i class="fas fa-trash-alt"> </i></center> </a></td>
						<td><?php echo $total;?> DH</td>

					</tr>
					<?php
$somme+=$total;

}
}
echo "<tr><td></td><td></td><td></td><td></td><td></td><td bgcolor='gold'>".$somme." DH</td>";
/*if(isset($_POST["remove"])){
	                    echo"<script>var x=document.getElementById('cartImg').value</script>";
						$sqla="DELETE FROM cart where c_id=$usId && ar_id=$artId";
					    $res=mysqli_query($lien,$sqla);

					             }*/
					    if($count !=0){
					    $_SESSION['total']=$somme;}
						?>
					</tbody>
				</table>
			</div>
			<div class="box-footer">
				<div class="pull-left" style="float: left;">
					<a href="index.php" class="btn btn-default">
						<i class="fa fa-chevron-left"></i>Continuer shoping!
					</a>
				</div>
				<div class="pull-right" style="float: right;">
					<button type="submit" name="update" value="Mise à jour de la carte" class="btn btn-default">
						<i class="fa fa-refresh"></i>Mise à jour
					</button>
					<a href="check.php" class="btn btn-primary">Passer Les commandes</a>
				</div>
			</div>
		</form>
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
