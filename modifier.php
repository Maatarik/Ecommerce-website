<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body style="background-color: lavender">
	<h1><center>veuillez modifier les champs !!</center></h1>
<?php
session_start();
function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost','root','','e_commerce');
return	$basi; }
	$lien=connectMaBasi();
	$sql="SELECT *from user where email='".$_SESSION['email']."' AND password='".$_SESSION['password1']."'";
	$res=mysqli_query($lien,$sql);
	while ( $row=mysqli_fetch_array($res))
		{$a=$row[1];
	    $b=$row[2];
	    $c=$row[3];
	    $d=$row[4];
	    $e=$row[5];}

	?><center>
	<div class="col-md-8" style="width:500px;">

	<form style="width:80%;" method="post" >
	<div div="form-group">
	<label >Nom  :</label><input type="text" name="title" class="form-control" width="80%" value= <?php echo $a;?>>
	</div>
	<div div="form-group">
	<label >prenom :</label><input type="text" name="cat" class="form-control" width="80%" value= <?php echo $b;?> >
	</div>
	<div div="form-group">
	<label >email :</label><input type="text" name="image" class="form-control" value =<?php echo $_SESSION['email']; ?> readonly       width="80%" >
	</div>
	<div div="form-group">
	<label >ancien password :</label><input type="password" name="prix" class="form-control" width="80%" value =<?php echo ""; ?> >
	</div>
	<div div="form-group">
	<label >nouveau password :</label><input type="password" name="prixa" class="form-control" width="80%" value =<?php echo "" ?> >
	</div>
	<div div="form-group">
	<label >telephone :</label><input type="text" name="des" class="form-control" width="80%" value= <?php echo $e;?>>
	</div><br>


	<div div="form-group">

	<input type="submit" name="new" value="mettre a jour" class="btn btn-primary form-control">
	</center><?php
	if (isset($_POST['new']) && $_POST['prix']==$_SESSION['password1'] ) {
		# code...

		$lien2=connectMaBasi();
	$title=$_POST['title'];
	$cat=$_POST['cat'];
	$des=$_POST['des'];
	$prix=$_POST['prixa'];
$image=$_POST['image'];
$id=$_SESSION['id'];



/*$sql="INSERT INTO user (id,nom,prenom,email,password,tel) */
	if(isset($_POST["title"]) && $title!= NULL){
	         $sql1="UPDATE user SET nom='$title' WHERE id=$id";
	if (mysqli_query($lien2, $sql1)) {
          echo "last name updated successfully <br>";
} else {
    echo "Error updating record: " . $lien2->error;
}}
	if(isset($_POST["cat"]) && $cat!= NULL){
	         $sql2="UPDATE user SET prenom='$cat' WHERE id=$id";
	if (mysqli_query($lien2, $sql2)) {
          echo "first name updated successfully <br>";
} else {
    echo "Error updating record: " . $lien2->error;
}}


	if(isset($_POST["prixa"]) && $prix!= NULL){
	         $sql4="UPDATE user SET password='$prix' WHERE id=$id";
	         $_SESSION['password1']=$_POST["prixa"];
	if (mysqli_query($lien2, $sql4)) {
          echo "password updated successfully <br>";
} else {
    echo "Error updating record: " . $lien2->error;
}}
	if(isset($_POST["des"]) && $des!= NULL){
	         $sql5="UPDATE user SET tel='$des' WHERE id=$id";
	if (mysqli_query($lien2, $sql5)) {
          echo "telephone updated successfully <br>";
} else {
    echo "Error updating record: " . $lien2->error;
}}
echo "<script> alert('les modifications sont enregistres ');</script>";
echo "<script> window.location.replace('index.php');</script>";

}
echo"</body>";

?>
