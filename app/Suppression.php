<?php

require_once('./connexion.php');
$sql="DELETE FROM contacts ";
$result=$cnx->query($sql);
header("location:index.php#Affichage");