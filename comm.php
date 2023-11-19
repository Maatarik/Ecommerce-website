<?php

function	connectMaBasi(){

$basi	=	mysqli_connect	('localhost','root','','e_commerce');
return	$basi;
 }
	$lien=connectMaBasi();

$sql="select * from lignedecommande ";
echo"<body style='background-color:silver;''>";
$run=mysqli_query($lien,$sql);

					 echo ' <table style=" width:50% ; text-align:center;margin-left:300px;" border=1 > ' ;
					 echo "<tr><td> id d'article</td><td>quantite</td><td> id de client</td>";

					 while($ligne=mysqli_fetch_array($run)){
						 echo "<tr>" ;

							 echo '<td> '.$ligne[0].'</td><td> '.$ligne[1].'</td><td> '.$ligne[2].'</td>' ;

		                  echo "</tr>" ;
					 }
					 echo "</table>" ;



echo"</body>";
?>
