
<?php
$rech=$_SESSION['rech'];
$choix=$_SESSION['choise'];
	  	function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost',	'root',	'','e_commerce');
return	$basi;
}
$lien=connectMaBasi();
global $lien;
if($choix == 'all'){
$getArt3="SELECT * FROM article WHERE nom like '%$rech%'|| categorie like '%$rech%' || description like '%$rech%' order by nom ";
$run2=mysqli_query($lien,$getArt3) or die( mysqli_error($lien));}
else{
$getArt4="SELECT * FROM article WHERE nom like '%$rech%' AND categorie = '$choix' order by nom";
$run2=mysqli_query($lien,$getArt4) or die( mysqli_error($lien));}

?>
<div class="row">
<?php
while ($row=mysqli_fetch_array($run2)) {
	$id=$row['id'];
	$title=$row['nom'];
	$prix=$row['prix'];
	$image=$row['image'];
	?>

	<div class="col-md-3 col-sm-6 single">
		<div class="article">
			<a href="details.php?art_id=<?php echo $id;?>">
				<img src="images/<?php echo $image;?>" class="img-fluid item">
			</a>
			<div class="text">
				<h3>
					<a href="details.php?art_id=<?php echo $id;?>">
						<?php echo $title; ?>
					</a>
				</h3>
				<h3 class="price">
					<?php echo $prix; ?> DH
				</h3>
			</div>
		</div>
	</div>
	<?php
}

?>
</div>
