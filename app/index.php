<?php

require_once('./connexion.php');

$sql="SELECT ID, Nom, Prenom, Telephone FROM contacts ORDER BY ID";
$result=$cnx->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="essai.css">
	<meta charset="utf-8">
</head>
<body>
	<header>
        
        <h1>MyWallet</h1>
        
		<div class="head">
			<ul class="debut">
				<li class="deb">
            		<a href="formulaire.php" class="ajt">Ajouter un contact</a>			
				</li>

				<li>
					<a href="#Affichage" class="ajt">Liste des contacts</a>
				</li>
			</ul>
		</div>
        <div class="center">
            <h3>Bienvenue<br>sur<br> le Gestionnaire de contact</h3><hr class="separator">
            <p class="cnt">MyWallet est une application web qui permet à ses utilisateurs de gérer facilement, de manière intuitive et rapide tous ses contacts en un seul clic.<br><br>Avec elle, vous pouvez AJOUTER de nouveaux contacts, MODIFIER votre liste de contacts existante et enfin SUPPRIMER ceux dont vous n'estimez plus avoir besoin.<br><br>Simplifiez-vous la vie avec l'application MyWallet</p>
            <a href="formulaire.php" class="last">Ajouter un contact</a>
        </div>

        
	</header>
	<section id="Affichage">
        <h3 class="skills-h3">Liste des contacts</h3>
        <hr class="affiche-sep">
      <table class="content-table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Téléphone</th>
                <th></th>
                <th></th>
                <th></th>
			</tr>
		</thead>
		<tbody>
			
		<?php while ($ligne=$result->fetch_assoc()) {?>
			<tr>
				
				<td><?php echo($ligne['ID'])?></td>
				<td><?php echo($ligne['Nom'])?></td>
				<td><?php echo($ligne['Prenom'])?></td>
				<td><?php echo($ligne['Telephone'])?></td>
				<td class='change'><a class="sup" href="Detail.php?code=<?php echo($ligne['ID'])?>">Détails</a></td>
				<td class='change'><a class="dlt" href="modifier.php?code=<?php echo($ligne['ID'])?>">Modifier</a></td>
	            <td class='change'><a class="sup" href="Supprimer.php?code=<?php echo($ligne['ID'])?>">Supprimer</a></td>
			<?php }?>
	           
			</tr>
			
		</tbody>
	</table>
    <a href="Details.php" class="dtl">Détails</a>
    <a href="Suppression.php" class="supp">Supprimer</a>
    </section>

    <section class="about">
        
        <h2>Qui sommes-nous</h2>
        <hr class="about-sep">
        
        <div class="moi">
        
        
            <div class="me">

               </div>
            <h4>Hello !</h4>
              <p class="mee"><strong>ATYS</strong> est une entreprise spécialisée dans la programmation et le dévéloppement informatique.Nos activités sont essentiellement tournées vers le mobile et les technologies du web.Nous dévéloppons des applications mobiles aussi bien sur ANDROID que sur IOS avec différents langage informatique.Mais nous créeons, maintenons et administrons vos pages web,le tout à un prix résonnable</p>
        
        </div>
    </section>
	</body>
 	<footer class="foo">
    		<h5>Contactez nous</h5>
    		<hr class="contacte">
    		<input type="text" name="" placeholder="Entrez votre e-mail" class="inp"><br>
    		<input type="text" name="" placeholder="Votre message" class="inpt"><br>
    		<button><a class="contact">Envoyer</a></button>
    		<div class="in">
    			
    			<h6>Adresse</h6>
    			<hr class="end">
    		</div>
    		<p class="add">Dakar, Senegal<br>Medina rue 39<br>Téléphone: +221 77-415-47-59<br>E-mail: abdkabirzakouamadou@gmail.com</p>
    		<p class="fend">Copyright 2022-2025. Tous droits Réservés</p>%
    		
    </footer>
</html>
