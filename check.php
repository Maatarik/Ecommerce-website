<!DOCTYPE html>
<html>
<head>
	<title>livraison</title>
</head>
<body style="background-color: lavender">

	<?php
	include 'header.php';
	?>
<center><img src="./images/service-livraison.jpg" width="500"
     height="150"></center>
     <center><h1>FINALISATION DE LA COMMANDE</h1></center><br>
     <div class="aaa">
     <form method="post">
		<fieldset>
			<label><?php
              if(isset($_SESSION['adresse'])){
			$adresse = $_SESSION['adresse'];}
      else $adresse=""; ?>
     <h5>ADRESSE DE LIVRAISON:</h5> <input type="text" name="ad" size="50" style="height:50px;" required="" value="<?php
               if(!empty($_POST['ad']))
                   echo $_POST['ad'];
                                       ?>"><BR>
     <br><br>
     <?php
               ?>
     </fieldset></label>
     <fieldset>
			<label>
     <h5>mode de payement: </h5><br><table border="1" size="20" style="height: 50px;">
             <tr ><td><button type="radio" name="cg" value="payer par carte bancaire" ></button></td><td>Paiement par carte bancaire (pour Eviter tout contact avec de la monnaie ou des billets)</td>	</tr>

             <tr><td><button type="radio" name="cc" value="payer cache"></button></td><td>Paiement cash A la livraison (favorisez le paiement par carte bancaire)</td></tr></table>

     <input type="submit" name="res" value="voir le resume d'achat"><br>
              <?php

              if (isset ($_POST["cc"])){
                       echo"<script>alert('notre livreur va vous offrir un bon de payment') </script>  ";
                      $_SESSION['payer']="payement cash a la livraison";
                      $_SESSION['adresse']=$_POST['ad'];
                       }
                   if (isset ($_POST["cg"]))
                   {
                      echo"<script> window.location.replace('carte.php');</script>";
                    $_SESSION['payer']="payement deja par carte bancaire";
                  $_SESSION['adresse']=$_POST['ad'];



                }
                if(isset ($_POST["res"]))
                   echo  "<script> window.location.replace('resume.php');</script>";

               ?>


     </fieldset></label>

</form>
</div>
</body>
</html>
