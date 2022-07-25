<?php
 
require_once('./connexion.php');
$row=$_GET['code'];
$sql="DELETE FROM contacts WHERE (ID=$row) ";
$result=$cnx->query($sql);
header("location:index.php#Affichage");