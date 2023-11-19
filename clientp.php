
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body style='background-color:lavender;'>
	<center>
<div class="col-md-8" style="width:500px;">
	<h1>Ajouter Client :</h1><br><br>
	<form style="width:80%;" method="post" enctype="multipart/form-data">
		<div div="form-group">
	<label class="control-label">Nom  :</label><input type="text" name="title" class="form-control" width="80%" required>
	</div>
	<div div="form-group">
	<label class="control-label">prenom :</label><input type="text" name="cat" class="form-control" width="80%" required>
	</div>
	<div div="form-group">
	<label class="control-label">email :</label><input type="text" name="image" class="form-control" width="80%" required>
	</div>
	<div div="form-group">
	<label class="control-label">password :</label><input type="text" name="prix" class="form-control" width="80%" required>
	</div>
	<div div="form-group">
	<label class="control-label">telephone :</label><input type="text" name="des" class="form-control" width="80%" required>
	</div><br>
	<div div="form-group">
	<input type="submit" name="new" value="Ajouter" class="btn btn-primary form-control">
	</div>
	</form>
</div>
</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script
			  src="https://code.jquery.com/jquery-3.4.0.js"
			  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
			  crossorigin="anonymous"></script></center>
</body>
</html>

<?php
function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost','root',	'','e_commerce');
return	$basi;
}
if (isset($_POST['new'])) {
	$lien=connectMaBasi();
	$title=$_POST['title'];
	$cat=$_POST['cat'];
	$des=$_POST['des'];
	$prix=$_POST['prix'];
$image=$_POST['image'];

$sql="INSERT INTO user VALUES(NULL,'$title','$cat','$image','$prix','$des')";
/*$sql="INSERT INTO user (id,nom,prenom,email,password,tel) values (null,'".$title."','".$cat."','".$image."','".$prix."','".$des."'";*/
$run=mysqli_query($lien,$sql);
if ($run) {
	echo "<script>alert('Le client est bien ajoute !')</script>";
}
else{
	echo "<script>alert('Erreur d ajout')</script>";
}
}
?>
