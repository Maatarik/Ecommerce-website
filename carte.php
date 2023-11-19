<!DOCTYPE html>
<html>
<head>
	<title>payement</title>
</head>
<body style="background-color: lavender">
	<form method="get">
	<legend><h1>Informations CB</h1></legend>
    <ol>
      <li>
        <fieldset>
          <legend>Type de carte bancaire</legend>
          <ol>
            <li>
              <input id=visa name=type_de_carte type=radio>
              <label for=visa>VISA</label>
            </li>

            <li>
              <input id=mastercard name=type_de_carte type=radio>
              <label for=mastercard>Mastercard</label>
            </li>
          </ol>
        </fieldset><br><br>
      </li>
      <li>
        <label for=numero_de_carte>Numero de carte</label>
        <input id=numero_de_carte name=numero_de_carte type=number required>
      </li><br>
      <li>
        <label for=securite>Code securite</label>
        <input id=securite name=securite type=number required>
      </li><br>
       <li>
        <label for=securite>date d'expiration</label>
        <input id=nb name=securite type=month required>
      </li><br>
      <li>
        <label for=nom_porteur>Nom du porteur</label>
        <input id=nom_porteur name=nom_porteur type=text placeholder="Meme nom que sur la carte" required>
      </li><br>
    </ol>
  </fieldset><br><br>

  <fieldset>
    <center><input input type="submit" name="aa" value="voir le resume d'achat">
 </center> </fieldset>
</form>

</body>
</html>
<?php
  if(isset ($_GET["nom_porteur"]) && isset ($_GET["aa"]))
                    header('Location:resume.php');

               ?>
