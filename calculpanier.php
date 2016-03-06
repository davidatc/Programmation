<!DOCTYPE html>
<html>
<head>
 <h1 align="center" >CYBERMARKET</h1>
 </head>
 <body>
   <body background ="fond.jpg"> </body>
 </br>
    <p> <strong> Bienvenue sur votre site MARKET </strong> </p>

    <form method= "post" >
        <!---   PRODUIT 1      -->
          <p> ARTICLE 1 </p>

          </strong> Prix :</strong>
          <input type="text" name="prix1" />

          </strong> quantité :</strong>
          <input type="text" name="quantité1" />

        </strong> TVA(%) :</strong>
        <input type="text" name="tva1" />
  <!---   PRODUIT 2     -->

           <p> ARTICLE 2 </p>

          </strong> Prix :</strong>
          <input type="text" name="prix2" />

          </strong> quantité :</strong>
          <input type="text" name="quantité2" />

        </strong> TVA(%) :</strong>
        <input type="text" name="tva2" />


  <!---   PRODUIT 3      -->

           <p> ARTICLE 3 </p>

          </strong> Prix :</strong>
          <input type="text" name="prix3" />

          </strong> quantité :</strong>
          <input type="text" name="quantité3" />

        </strong> TVA(%) :</strong>
        <input type="text" name="tva3" />

<br/>
<br/>

        <input type="submit" value = "Valider" />


    </form>
<!--  CALCUL -->
  <?php
  isset ($_POST["Valider"]);
$prix1=$_POST['prix1'];
$quantité1=$_POST['quantité1'];
$TVA1=$_POST['tva1']*$_POST['quantité1']*$prix1/100;
$prix2=$_POST['prix2'];
$quantité2=$_POST['quantité2'];
$TVA2=$_POST['tva2']*$_POST['quantité2']*$prix2/100;
$prix3=$_POST['prix3'];
$quantité3=$_POST['quantité3'];
$TVA3=$_POST['tva3']*$_POST['quantité3']*$prix3/100;

$TOTAL=$prix1*$quantité1+$TVA1+$prix2*$quantité2+$TVA2+$prix3*$quantité3+$TVA3 ;
$erreur="vous n'avez pas entrer la quantité de vos produits";

if
(($quantité1>=1)||($quantité2>=1)||($quantité3>=1))

{
  echo " TOTAL: $TOTAL  € euro" ;
}

elseif ($TOTAL<=0)
{
echo $erreur;
}
?>
<p> Avez-vous la carte de fidélité <strong> CYBERMARKET </strong> ?</p>
<input type="radio" name="fidélité" value="oui" id="oui" /> <label for="oui">Oui</label>
<input type="radio" name="fidélité" value="non" id="non" /> <label for="non">Non</label>
<br/>
<br/>

 <strong>code fidélité:</strong>
 <input type="password" nom="code" />
 <input type="submit"   value="Valider" </>


</body>
        Devenir membre ? <a href="www.google.fr ">cliquez</a>
</html>
