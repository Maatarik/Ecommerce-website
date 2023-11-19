
<!DOCTYPE html>

<html>
<html lang="fr">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head><?php
function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost','root','','e_commerce');
return	$basi; }
  	$lien=connectMaBasi();
		echo"<body style='background-color:lavender;' >";
echo"<h1><center> veuiller saisir l id d article puis renseiger les champs a modifier</center></h1><br><br>";
echo "<center><form  method='post' enctype='multipart/form-data'>";
echo "<div class='col-md-8' style='width:500px;''>";
echo"<select class='form-control' name='ref' width='80px'>";
$sql="select id from article";
$res=mysqli_query($lien,$sql);
 while( $row=mysqli_fetch_array($res))
 	{echo"<option>".$row[0]."</option>";}
 echo"</select><br>";



echo"<input type='text'class='form-control' name='nm' placeholder='nom'><br>
<input type='text'class='form-control' name='cat' width='80px' placeholder='categorie'><br>
<input type='text' class='form-control' name='im' width='80px' placeholder='image'><br>
<input type='text' class='form-control' name='prix' width='80px' placeholder='prix'><br>
<input type='text'class='form-control' name='des' width='80px' placeholder='description'><br>
<input type='date' class='form-control' name='aj' width='80px' placeholder='date d'ajout><br>
<input type='submit' name='modifier' class='btn btn-primary form-control' value='mettre a jour'><br>
<input type='submit' name='ter'class='btn btn-primary form-control' value='terminer'></form></center>
";
if(isset($_POST["ter"])){header('Location:admin.php');
}

if (isset($_POST["ref"])&& isset($_POST["modifier"])&& $_POST["ref"]!=null ) {
	$ref=$_POST["ref"];$nom=$_POST["nm"];$cat=$_POST["cat"];$date=$_POST["aj"];
	$prix=$_POST["prix"];$des=$_POST["des"];$nom=$_POST["nm"];
	if(isset($_POST["prix"]) && $prix!= NULL){
	         $sql1="UPDATE article SET prix='$prix' WHERE id=$ref";
	if (mysqli_query($lien, $sql1)) {
          echo "prix updated successfully <br>";
} else {
    echo "Error updating record: " . $lien->error;
}}

if(isset($_POST["des"]) && $des!=NULL){
	$sql2="UPDATE article SET description='$des' WHERE id=$ref";
	if (mysqli_query($lien, $sql2)) {
    echo "description updated successfully <br>";
} else {
    echo "Error updating record: " . $lien->error;
}
}
if(isset($_POST["cat"] )&& $cat != NULL){
	$sql3="UPDATE article SET categorie='$cat' WHERE id=$ref";
	if (mysqli_query($lien, $sql3)) {
    echo "categorie updated successfully <br>";
} else {
    echo "Error updating record: " . $lien->error;
}
}
if(isset($_POST["nm"]) && $nom!= NULL){
	$sql4="UPDATE article SET nom='$nom' WHERE id=$ref";
	if (mysqli_query($lien, $sql4)) {
    echo "name updated successfully <br>";
} else {
    echo "Error updating record: " . $lien->error;
}
}
if(isset($_POST["aj"]) && $date!= NULL){
	$sql5="UPDATE article SET ar_date='$date' WHERE id=$ref";
	if (mysqli_query($lien, $sql4)) {
    echo "date updated successfully <br>";
} else {
    echo "Error updating record: " . $lien->error;
}
}



}
?>
