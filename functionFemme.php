<?php
function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost',	'root',	'','e_commerce');
return	$basi; }
$lien=connectMaBasi();
global $lien;
$getArt="SELECT * FROM article WHERE categorie='telephone' order by id DESC";
$run=mysqli_query($lien,$getArt);
?>
<div class="row">
<?php
while ($row=mysqli_fetch_array($run)) {
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
