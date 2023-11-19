
<?php
function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost','root','','e_commerce');
return	$basi; }
	$lien=connectMaBasi();

$sql="select * from article ";
echo"<body style='background-color:lavender;''>";
$run=mysqli_query($lien,$sql);
                       echo "<br> <br> <br> <br>";
                      echo "<caption><center><h4> les articles ajoutes sont:</h4></center></caption>";
				   	 echo ' <table style=" width:50% ; text-align:center;margin-left:300px;" border=1 > ' ;
					 echo"<tr>
  <th>idate</th>
  <th>nom</th>
  <th>categorie</th>
  <th>image</th>
  <th>prix</th>
  <th>description</th>
  <th>date d ajout</th>
 </tr>";

					 while($ligne=mysqli_fetch_array($run)){
						 echo "<tr>" ;

							 echo '<td> '.$ligne[0].'</td><td> '.$ligne[1].'</td><td> '.$ligne[2].'</td><td> '.$ligne[3].'</td><td> '.$ligne[4].'</td><td> '.$ligne[5].'</td><td> '.$ligne[6].'</td>' ;

		                  echo "</tr>" ;
					 }
					 echo "</table>" ;



echo"</body>";

?>
