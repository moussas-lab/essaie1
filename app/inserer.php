
<?php
 
 require_once ('./connexion.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
// if (!$conn) {
//     die("Connection échouée: " . mysql_connect_error());
// }

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$tel=$_POST['telephone'];
$email=$_POST['email'];
$pays=$_POST['pays'];
$ville=$_POST['ville'];
$adresse=$_POST['adresse'];

$sql= "INSERT INTO contacts (Nom, Prenom, Telephone, Email,Pays_origine,Ville,Adresse) VALUES ('$nom', '$prenom', '$tel', '$email','$pays','$ville','$adresse')";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<link rel="stylesheet" type="text/css" href="inserer.css">
	<meta charset="utf-8">
</head>
<body>

    <div class="centre">

    	<?php 

    	if(mysqli_query($conn,$sql)) {
    		echo "<p>Insertion réussie<br>retouner à la page d'accueil</p>
        		<button><a href='index.php#Affichage'>Accueil</a></button>";
		}  else 
		{
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		 mysqli_close($conn);?>
    
        <!-- <p> Retouner à la page d'accueil</p>
        <button><a href="Afficher.php">Accueil</a></button> -->
    </div>

</body>
</html>


