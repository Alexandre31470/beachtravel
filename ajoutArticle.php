<?php
ob_start();
?>


<section class="formulaire">
	<h2>Ajouter un Article</h2>

	<form id="add-article" method="post" action="ajoutArticlebdd.php">
		<label for="titre">Titre :</label><br>
		<input type="text" id="titre" name="titre" placeholder="Entrez votre titre" required><br><br>

		<label for="pays">Pays :</label><br>
		<input type="text" id="pays" name="pays" placeholder="Entrez le pays visité" required><br><br>


		<label for="contenu">Contenu :</label><br>
		<textarea id="contenu" name="contenu" rows="20" cols="60" required></textarea><br><br>

		<label for="auteur">Auteur :</label><br>
		<input type="text" id="auteur" name="auteur" placeholder="Entrez l'auteur" required><br><br>

		<label for="date_creation">Date de création :</label><br>
		<input type="date" id="date_creation" name="date_creation" required><br><br>

		<input class="btn btn-info btn-lg " type="submit" id="submitArticle" value="Ajouter l'article">
	</form>

</section>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>