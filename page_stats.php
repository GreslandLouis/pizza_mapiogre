<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" />
    <title>Statistique</title>
</head>
<body>
<h1>Page Statistique</h1>
<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=pizza;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM pizza');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong><?php echo $donnees['lib_pizza']; ?></strong><br />
    Base de pizza : <?php echo $donnees['base_pizza']; ?><br /> prix : <?php echo $donnees['prix_pizza']; ?> euros !<br />
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
<?php include("pied_de_page.php"); ?>
</body>
</html>