
<!DOCTYPE html>

<html>
<html lang="fr">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body style='background-color:lavender;'>
	<center>
<div class="col-md-8" style="width:500px;">
	<h1>Ajouter Article :</h1><br><br>
	<form style="width:80%;" method="post" enctype="multipart/form-data">
		<div div="form-group">
	<label class="control-label">Nom d'article :</label><input type="text" name="title" class="form-control" width="80%" required>
	</div>
	<div div="form-group">
	<label class="control-label">Categorie :</label><select class="form-control" name="cat">
		<option>telephone</option>
		<option>ordinateur</option>
		<option>tablette</option>
		<option>camera</option>
		<option>accessoire</option>
	</select>
	</div>
	<div div="form-group">
	<label class="control-label">Image d'article :</label><input type="file" name="image" class="form-control" width="80%" required>
	</div>
	<div div="form-group">
	<label class="control-label">Prix d'article :</label><input type="text" name="prix" class="form-control" width="80%" required>
	</div>
	<div div="form-group">
	<label class="control-label">Description d'article :</label><textarea class="form-control" name="des" required></textarea>
	</div><br>
	<div div="form-group">
	<input type="submit" name="new" value="Ajouter" class="btn btn-primary form-control">
	</div><br>
	<div div="form-group">

	</form>
</div>
</div></center>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script
			   src="https://code.jquery.com/jquery-3.4.0.js"
			  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
			  crossorigin="anonymous"></script>
</body>
</html>

<?php
function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost','root',	'','e_commerce');
return	$basi; }
if(isset($_POST["ter"])){header('Location:admin.php');
}
if (isset($_POST['new'])) {
	$lien=connectMaBasi();
	$title=$_POST['title'];
	$cat=$_POST['cat'];
	$des=$_POST['des'];
	$prix=$_POST['prix'];
$image=$_FILES['image']['name'];
$imageTemp=$_FILES['image']['tmp_name'];
move_uploaded_file($imageTemp,"images/".$image."");
$sql="INSERT INTO article (nom,categorie,image,prix,description,ar_date) values ('".$title."','".$cat."','".$image."','".$prix."','".$des."',NOW())";
$run=mysqli_query($lien,$sql);
if ($run) {
	echo "<script>alert('Larticle est bien ajouté !')</script>";
}
else{
	echo "<script>alert('Erreur')</script>";
}
}
?>
