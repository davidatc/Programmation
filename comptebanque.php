
<!DOCTYPE html >
<html>
  <head>
      <h1 align="center"><strong> CYBERBANK </strong></h1>


  </head>

<body>
     <body background ="fond2.jpg"></body>
   </br>
     <form method="post">
        <p> Vous voulez connaître votre situation bancaire ? </p>
        <p> Entrer le montant de votre compte bancaire : </p>
        <input type=" float" name="compte"> € euro
        <input type="submit" value="Vérifier">
     </form>
</br>
</br>

 <?php
 
     $compte = $_POST["compte"];


     if ($compte == 0 ) {
              echo "En Équilibre";

     } elseif ($compte < 0) {
              echo "En Déficitaire";

     } else {
              echo "Crédité";
     }

     ?>

</body>


</html>
