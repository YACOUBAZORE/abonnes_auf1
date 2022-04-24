<?php
$connection = new mysqli(
    "localhost", "root",
"", "auf_bdd");
if($connection->connect_error){
echo "connexion echouee";
}

else{
    echo " connexion etablie avec succes";
    
}
?>