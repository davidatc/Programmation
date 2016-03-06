<!DOCTYPE html >
<html>
  <head>
      <h1 align="center"><strong> CYBER-BIRTHDAY </strong></h1>
 <meta charset="utf-8" />
  </head>

<body>
     <body background ="fond2.jpg"></body>
   </br>


     <form method="post">

        <p>Entrer votre date d'anniversaire :  </p>

        Date de naissance :
        <input type="text" size="10" maxlength="10" name="naissance">
        <input type="submit"  value="Valider" >

<?php

isset ($_POST["Valider"]);

$format = ('d/m/Y ');
$naissance=$_POST["naissance"];


if (strlen($naissance) < 10) {
  echo "date incorrect ";
}
elseif (checkdate('d/m/Y') == $format) {
  echo "date mauvais format";
}
  else {
    echo "date valider";
  }

?>
</body>
</html>
