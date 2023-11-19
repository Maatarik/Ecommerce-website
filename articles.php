
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>




<?php
function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost','root','','e_commerce');
return	$basi;
}
	$lien=connectMaBasi();
	$lien2=connectMaBasi();
	echo"<body style='background-color:lavender;' class='adForm'>";
echo"<h1><center> veuiller saisir l id d article a supprimmer</center></h1>";
echo "<center><form class='sed' method='post'>";
echo "<select  name='su' width='100px'>";
$sql="select id from article";
$res=mysqli_query($lien,$sql);
 while( $row=mysqli_fetch_array($res))
 	{echo"<option>".$row[0]."</option>";}
 echo"</select><br><br>";
echo"<input type='submit' name='sb' value='supprimer'><input type='submit' name='ter' value='terminer'>
</form></center>
";
if(isset($_POST["ter"])){header('Location:admin.php');
}
if(isset($_POST["su"]) && $_POST["su"]!=null ){
$su=$_POST["su"];
$sql = "DELETE FROM article WHERE id= $su";
if (mysqli_query($lien, $sql)) {
    echo "Record deleted successfully<br><br>";
} else {
    echo "Error deleting record: " . mysqli_error($lien);
}
$sql2 = "DELETE FROM cart WHERE ar_id= $su";
if (mysqli_query($lien2, $sql2)) {
    echo "Record deleted successfully <br><br>";
} else {
    echo "Error deleting record: " . mysqli_error($lien);
}

}











 ?>
