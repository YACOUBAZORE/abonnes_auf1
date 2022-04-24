
  <link rel="stylesheet" href="./style.css">


<h1>
    Formulaire d'enregistrement
</h1>



<?php
include("./connexion_bdd.php");

?>
<div class="formulaire">
    
<form action="./ajout.php" method="post">
    <input type="text" name="nom"
    id="nom" placeholder="entrez votre nom ici">
    <br><br>
    <input type="text" name="prenom"
    id="prenom" placeholder="entrez votre prenom ici">
    <br><br>
    <input type="date" name="date_de_naissance"
    id="prenom" placeholder="entrez votre date de naissance ici">
    <br><br>
    <input type="text" name="email"
    id="prenom" placeholder="entrez votre email ici">
    <br><br>
    <input type="number" name="numero"
    id="numero" placeholder="entrez votre numero ici">
    <br><br>
    <input type="date" name="debut_d_abonnement"
    id="debut_d_abonnement" placeholder="entrez votre debut d'abonnement ici">
    <br><br>
    </form>
    <form action="./abonnes.php" method="post" >
    <input type="submit" value="s'inscrire" name="submit">
    </form>

</div>