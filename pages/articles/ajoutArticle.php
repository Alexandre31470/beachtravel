<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Beach Travel</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" type="image/png" href="../../pictures/favicon.png">
</head>


<body>
<?php include '../../pages/accueil/header.php'; ?>
	<section class="formulaire">
		<h2>Ajouter un Article</h1>

			<form id ="add-article" method="post" action="ajoutArticle.php">
				<label for="titre">Titre :</label><br>
				<input type="text" id="titre" name="titre" placeholder="Entrez votre titre" required><br><br>


				<label for="contenu">Contenu :</label><br>
				<textarea id="contenu" name="contenu" rows="20" cols="60" required></textarea><br><br>

				<label for="auteur">Auteur :</label><br>
				<input type="text" id="auteur" name="auteur" placeholder="Entrez l'auteur" required><br><br>

				<label for="date_creation">Date de création :</label><br>
				<input type="date" id="date_creation" name="date_creation" required><br><br>

				<input class="btn btn-info btn-lg " type="submit" id="submitArticle" value="Ajouter l'article">
			</form>

	</section>

</body>
<?php include '../../pages/accueil/footer.php'; ?>

</html>