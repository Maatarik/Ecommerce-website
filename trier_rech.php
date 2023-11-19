<?php
function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost',	'root',	'','e_commerce');
return	$basi;
}
$lien=connectMaBasi();
global $lien;




if($_POST["vv"]==null)
		header('Location: index.php');

if(isset($_POST["sub"]) && isset($_POST["vv"]) && $_POST["vv"]!= null ){

$rech=$_POST["vv"];$choix=$_POST["choise"];$_SESSION['rech']=$_POST["vv"];$_SESSION['choise']=$_POST["choise"];
if($choix == 'all'){
$getArt="SELECT * FROM article WHERE nom like '%$rech%'|| categorie like '%$rech%' || description like '%$rech%' ";
$run=mysqli_query($lien,$getArt) or die( mysqli_error($lien));}
else{
$getArt2="SELECT * FROM article WHERE nom like '%$rech%' AND categorie = '$choix' ";
$run=mysqli_query($lien,$getArt2) or die( mysqli_error($lien));}
}

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
</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script
			  src="https://code.jquery.com/jquery-3.4.0.js"
			  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
			  crossorigin="anonymous"></script>
</body>
</html>
