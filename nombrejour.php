<!DOCTYPE html >
<html>
  <head>
      <h1 align="center"><strong> CYBER-MONTH</strong></h1>
 <meta charset="utf-8" />
  </head>

<body>
     <body background ="fond2.jpg"></body>
   </br>


     <form method="post">
<p> Choisissez un mois : <p>
                      <select name="jour">
                               <option>  Mois  </option>
                               <option value="31">Janvier</option>
                               <option value="28">Février</option>
                               <option value="31">Mars</option>
                               <option value="30">Avril</option>
                               <option value="31">Mai</option>
                               <option value="30">Juin</option>
                               <option value="31">Juillet</option>
                               <option value="31">Août</option>
                               <option value="30">Septembre</option>
                               <option value="31">Octobre</option>
                               <option value="30">Novembre</option>
                               <option value="31">Decembre</option>
                      </select>


                    <input type="submit" value="Valider">
        </form>
        <?php
        isset ($_POST["Valider"]);
$jour=$_POST["jour"];

  echo "il y a $jour jours. "

         ?>

</body>
</html>
