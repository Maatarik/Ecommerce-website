<?php
session_start();
if (!isset($_SESSION['user']) || !isset($_SESSION['password'])) {
header('location:conAdmin.php');
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
<body style="background-color:aqua;">
	<br>
 <center><h5><u>vous pouvez effectuer les taches suivantes</u></h5></center>
 <br>
 <center>
<div class="row">


<ul class="admenu">
	<li><a href="articleC.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
 afficher les articles</a></li>
	<li><a href="article.php"><i class="fa fa-plus" aria-hidden="true"></i>
 Ajouter un article</a></li>
 <li><a href="articlep.php"><i class="fas fa-cash-register" aria-hidden="true"></i>
 mettre a jour un article</a></li>
 <li><a href="articles.php"><i class="far fa-trash-alt" aria-hidden="true"></i>
 Supprimer un article</a></li>
	<li><a href="client.php"><i class="fa fa-users" aria-hidden="true"></i>
 afficher les clients</a></li>
	<li><a href="clientp.php"><i class="fa fa-plus" aria-hidden="true"></i>
	Ajouter un client</a></li>
	<li><a href="clientm.php"><i class="fas fa-cash-register" aria-hidden="true"></i>
	mettre a jour un client</a></li>
	<li><a href="clients.php"><i class="far fa-trash-alt" aria-hidden="true"></i>
 Supprimer un client</a></li>
 <li><a href="comm.php"><i class="fas fa-archive" aria-hidden="true"></i>
 afficher les commandes</a></li>
	<form class="sed" method="post" action="admin.php">
		<input type="submit" name="dec" value="Se deconnecter" class="btn prymary-btn"></center>
<?php
if (isset($_POST['dec'])) {
	session_destroy();
	header('location:conAdmin.php');
}
	?>
  	</form>
</ul>

<div class="col-md-8">
</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script
			  src="https://code.jquery.com/jquery-3.4.0.js"
			  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
			  crossorigin="anonymous"></script>
</body>
</html>
