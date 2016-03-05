<!DOCTYPE html>
<html>
<head>
 <h1 align="center" >LEARNMARKET</h1>
 </head>
 <body>
   <body background ="fond2.jpg"> </body>
 </br>

    <p> <strong> Apprend à compter </strong> </p>

    <form method= "post" >

            <!---   NOMBRE 1      -->
          </strong> Entre un nombre entier  :</strong>
          <input type="text" name="nomb1" />

</br>            <!---   NOMBRE 2     -->
          </strong> Entre un second nombre entier :</strong>
          <input type="text" name="nomb2" />

          <input type="submit" value="valider" />
      <p>Les nombres pairs sont en <font color=blue>bleu.</font></p>
      <p>Les nombres impairs sont en <font color=orange>orange.</font></p>
      <p>Les nombres qui sont des carrés parfaits sont en <strong> gras.</strong></p>
</br>
          <?php
          $debutplage = $_POST['nomb1'];
          $finplage = $_POST['nomb2'];
          for ($boucle = $debutplage; $boucle <= $finplage; $boucle++) {
              $carre = false;
              for ($j=0; $j<$boucle; $j++) {
                  $s = $j*$j;
                  if($s==$boucle) {
                      $carre = true;
                  }
              }
              if ($boucle % 2 == 0) {
                  if($carre == true) {
                      echo "<strong><font color=blue>" . $boucle . "</font></strong><br>";
          		} else {
                      echo "<font color=blue>" . $boucle .  "</font><br/>";
                    }
              } else {
                  if($carre == true) {
                      echo "<strong><font color=orange>" . $boucle . "</font></strong><br>";
                } else {

                      echo "<font color=orange>" . $boucle . "</font><br/>";
                  }
                }
          }

?>
<p align="right">#Davidprod</p>

</body>
</html>
