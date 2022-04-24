<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>liste</title>
  <link rel="stylesheet" href="./css/liste.css">
  <link rel="stylesheet" href="./css/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.css">
</head>

<body>
  <header>
    <div class="container fluid">
      <div class="row">
        <div class="logo">
          <a href="formulaire.html"> <img src="./images/index.png" alt=""></a>
        </div>
        <div class="barre"></div>
        <div class="trai">
          <div class="bar"></div>

          <div class="text">
            <h1>LISTES DES ABONNEES</h1>
          </div>
          <div class="bar"></div>
        </div>
      </div>
    </div>
  
















<?php

include ("./connexion_bdd.php")
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>AUF</title>
  </head>
  <body>

  <?php
$query = "SELECT * FROM `abonnes_auf`";
$result = mysqli_query ($connection,$query);
if ($result){
    echo '
    <table class="table caption-top">
    <thead>
    <tr>
     
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">age</th>
      <th scope="col">email</th>
      <th scope="col">numero</th>
      <th scope="col">debut</th>
    </tr>
  </thead>
    ';
    while ($data= mysqli_fetch_assoc($result)){
        echo '
        <tr>
        
        <td>'.$data["nom"].'</td>
        <td>'.$data["prenom"].'</td>
        <td>'.$data["date_de_naissance"].'</td>
        <td>'.$data["email"].'</td>
        <td>'.$data["numero"].'</td>
        <td>'.$data["debut_d_abonnement"].'</td>
      </tr>
        ';
    }
    echo '
    </tbody>
</table>
    ';
}


?>

  
<a href="./enregistrement_bdd.php" class="retour"> Retour </a>
  
<footer>
    <div class="container">
      <div class="row">
        <div class="but">
          <a href="formulaire.html"> <img src="./images/arton1259-f6040.png" width="250px" height="150px"></a>
          
        </div>
        <div class="ecrit">
          <h3>
            Contacts <br>
            Mentions Légales <br>
            Politique de confidentialités <br>
          </h3>
        </div>
      </div>
    </div>
  </footer>
  <script src="./css/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</body>

</html>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
  </body>
</html>