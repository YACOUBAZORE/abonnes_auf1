<?php


include("./connexion_bdd.php");

if(isset($_POST["submit"])){
    $nom= $_POST["nom"];
    $prenom=$_POST["prenom"];
    $date_de_naissance=$_POST["date_de_naissance"];
    $email=$_POST["email"];
    $numero=$_POST["numero"];
    $debut_d_abonnement=$_POST["debut_d_abonnement"];





    $query="INSERT INTO `abonnes_auf` (`nom`, `prenom`, `date_de_naissance`, `email`, `numero`, `debut_d_abonnement`) 
    VALUES ('$nom', '$prenom', '$date_de_naissance', '$email', '$numero', '$debut_d_abonnement')";
     $resultat=mysqli_query($connection, $query);
     if($resultat){
         echo "utilisateur ajoute avec succes";
         header("location: enregistrement.php");
        exit;
     }
     else{
         echo "utilisateur n'a pas pu etre ajoute";
     }
}
?>