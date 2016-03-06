<!DOCTYPE html>
<html>
<head>
 <h1 align="center" >CYBERMAX</h1>

 </head>
 <body>
   <body background ="fond2.jpg"> </body>
 </br>

    <form method= "post" >

          <p> Entrer des <strong>Dix</strong> nombres différents:</p>

        </strong> nombre 1</strong>
          <input type="text" name="nombre1" /> </br>
        </strong> nombre 2</strong>
          <input type="text" name="nombre2" /></br>
        </strong> nombre 3</strong>
          <input type="text" name="nombre3" /></br>
        </strong> nombre 4</strong>
          <input type="text" name="nombre4" /></br>
        </strong> nombre 5</strong>
          <input type="text" name="nombre5" /></br>
        </strong> nombre 6</strong>
          <input type="text" name="nombre6" /></br>
        </strong> nombre 7</strong>
          <input type="text" name="nombre7" /></br>
        </strong> nombre 8</strong>
          <input type="text" name="nombre8" /></br>
        </strong> nombre 9</strong>
          <input type="text" name="nombre9" /></br>
        </strong> nombre 10</strong>
          <input type="text" name="nombre10" /></br>
</br>

        <input type="submit" value="valider">

<?php
isset ($_POST["valider"]);
$nombre1 = $_POST["nombre1"];
$nombre2 = $_POST["nombre2"];
$nombre3 = $_POST["nombre3"];
$nombre4 = $_POST["nombre4"];
$nombre5 = $_POST["nombre5"];
$nombre6 = $_POST["nombre6"];
$nombre7 = $_POST["nombre7"];
$nombre8 = $_POST["nombre8"];
$nombre9 = $_POST["nombre9"];
$nombre10 = $_POST["nombre10"];

$max= max (array($nombre1,$nombre2,$nombre3,$nombre4,$nombre5,$nombre6,$nombre7,$nombre8,$nombre9,$nombre10));
      echo "le nombre le plus grand est : $max";
?>




  </body>
  </html>
