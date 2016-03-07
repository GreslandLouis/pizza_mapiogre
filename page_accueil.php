<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=pizza;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" />
    <title>Accueil</title>
</head>

<body>
<h1>Page d'accueil</h1>
<p><a href="Page_pizza.php">Pizza</a></p>
<p><a href="Page_menu.php">Menu</a></p>
<p><a href="Page_panier.php">Panier</a></p>
<p><a href="Page_stats.php">Statistique</a></p>
</body>
</html>