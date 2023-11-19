<?php
function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost',	'root',	'','e_commerce');
return	$basi;
}
if (isset($_GET['art_id'])) {
	$lien=connectMaBasi();
	$id=$_GET['art_id'];
	$art="SELECT * FROM article where id='".$id."'";
     $run=mysqli_query($lien,$art);
     $row=mysqli_fetch_array($run);
     $title=$row['nom'];
     $prix=$row['prix'];
     $des=$row['description'];
     $image=$row['image'];
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
<div class="container">
	<div class="row" style="margin-top: 60px;">
		<div class="col-md-6"><center><img src="images/<?php echo $image;?>"></center></div>
		<div class="col-md-6"><h1><?php echo $title;?></h1>
<h3><?php echo $prix;?> DH</h3>
<p style="text-align: justify;"><?php echo $des?></p>

<form action="addcart.php?ar_id=<?php echo $_GET['art_id']; ?>" method="post" style="margin-top:0px;width: 40%;">
	<label>Quantite :</label><select name="qnt" class="form-control">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
	</select><br><br>
	<input type="submit" name="adCart" class="btn primary-btn form-control" value="Ajouter au Panier" style="background: aqua;color: #fff;">
</form>
		</div>
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
