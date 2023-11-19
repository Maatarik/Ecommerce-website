
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
	<h1>mettre a jour un Client en saisissant l'id :</h1><br><br>
	<form style="width:80%;" method="post" >
		<div div="form-group">
	<label class="control-label">id :</label><input type="text" name="id" class="form-control" width="80%">
	</div>
	<div div="form-group">
	<label >Nom  :</label><input type="text" name="title" class="form-control" width="80%" >
	</div>
	<div div="form-group">
	<label >prenom :</label><input type="text" name="cat" class="form-control" width="80%" >
	</div>
	<div div="form-group">
	<label >email :</label><input type="text" name="image" class="form-control" width="80%" >
	</div>
	<div div="form-group">
	<label >password :</label><input type="text" name="prix" class="form-control" width="80%" >
	</div>
	<div div="form-group">
	<label >telephone :</label><input type="text" name="des" class="form-control" width="80%" >
	</div><br>
	<div div="form-group">
	<input type="submit" name="new" value="Ajouter" class="btn btn-primary form-control">
	<input type="submit" name="ter" value="terminer" class="btn btn-primary form-control">
	</div>
	</form>
</div>
</div></center>
</body>
</html>

<?php
function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost','root',	'','e_commerce');
return	$basi;
}
if(isset($_POST["ter"])){header('Location:admin.php');
}
if (isset($_POST['new']) && isset($_POST["id"]) && $_POST["id"]!=null) {
	$lien=connectMaBasi();
	$title=$_POST['title'];
	$cat=$_POST['cat'];
	$des=$_POST['des'];
	$prix=$_POST['prix'];
$image=$_POST['image'];
$id=$_POST["id"];

$sql="INSERT INTO user VALUES(NULL,'$title','$cat','$image','$prix','$des')";
/*$sql="INSERT INTO user (id,nom,prenom,email,password,tel) */
	if(isset($_POST["title"]) && $title!= NULL){
	         $sql1="UPDATE user SET nom='$title' WHERE id=$id";
	if (mysqli_query($lien, $sql1)) {
          echo "last name updated successfully <br>";
} else {
    echo "Error updating record: " . $lien->error;
}}
	if(isset($_POST["cat"]) && $cat!= NULL){
	         $sql2="UPDATE user SET prenom='$cat' WHERE id=$id";
	if (mysqli_query($lien, $sql2)) {
          echo "first name updated successfully <br>";
} else {
    echo "Error updating record: " . $lien->error;
}}
	if(isset($_POST["image"]) && $image!= NULL){
	         $sql3="UPDATE user SET email='$image' WHERE id=$id";
	if (mysqli_query($lien, $sql3)) {
          echo "email updated successfully <br>";
} else {
    echo "Error updating record: " . $lien->error;
}}
	if(isset($_POST["prix"]) && $prix!= NULL){
	         $sql4="UPDATE user SET password='$prix' WHERE id=$id";
	if (mysqli_query($lien, $sql4)) {
          echo "password updated successfully <br>";
} else {
    echo "Error updating record: " . $lien->error;
}}
	if(isset($_POST["des"]) && $des!= NULL){
	         $sql5="UPDATE user SET tel='$des' WHERE id=$id";
	if (mysqli_query($lien, $sql5)) {
          echo "telephone updated successfully <br>";
} else {
    echo "Error updating record: " . $lien->error;
}}
}
?>
