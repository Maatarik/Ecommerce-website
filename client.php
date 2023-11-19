

<?php
function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost','root',	'','e_commerce');
return	$basi;
}
	$lien=connectMaBasi();

$sql="select * from user ";
$run=mysqli_query($lien,$sql);
echo"<body style='background-color:lavender;''>";
echo "<br> <br> <br> <br>";
                      echo "<caption><center><h4> les clients sont :</h4></center></caption>";
					 echo ' <table style=" width:50% ; text-align:center;margin-left:300px;" border=1 > ' ;
					 echo"<tr>
  <th>id</th>
  <th>nom</th>
  <th>prenom</th>
  <th>email</th>
  <th>password</th>
  <th>telephone</th>
 </tr>";


					 while($ligne=mysqli_fetch_array($run)){
						 echo "<tr>" ;

							 echo '<td> '.$ligne[0].'</td><td> '.$ligne[1].'</td><td> '.$ligne[2].'</td><td> '.$ligne[3].'</td><td> '.$ligne[4].'</td><td> '.$ligne[5].'</td>' ;

		                  echo "</tr>" ;
					 }
					 echo "</table>" ;





?>
