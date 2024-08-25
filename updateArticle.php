<?php
ob_start();

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beachtravel";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer l'id de l'article à modifier
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Préparer et exécuter la requête SQL pour récupérer l'article
        $stmt = $conn->prepare("SELECT * FROM articles WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // Vérifier si l'article existe
        $article = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$article) {
            throw new Exception("Article introuvable.");
        }
    } else {
        throw new Exception("ID d'article non fourni.");
    }

} catch (Exception $e) {
    echo "<script>alert('Erreur: " . addslashes($e->getMessage()) . "'); window.location.href='index.php';</script>";
    exit();
}
?>

<section class="formulaire">
    <h2>Modifier l'Article</h2>

    <form id="update-article" method="post" action="updateArticlebdd.php">
        <input type="hidden" name="id" value="<?= htmlspecialchars($article['id']); ?>">

        <label for="titre">Titre :</label><br>
        <input type="text" id="titre" name="titre" value="<?= htmlspecialchars($article['titre']); ?>" required><br><br>

        <label for="contenu">Contenu :</label><br>
        <textarea id="contenu" name="contenu" rows="20" cols="60" required><?= htmlspecialchars($article['contenu']); ?></textarea><br><br>

        <label for="auteur">Auteur :</label><br>
        <input type="text" id="auteur" name="auteur" value="<?= htmlspecialchars($article['auteur']); ?>" required><br><br>

        <label for="date_creation">Date de création :</label><br>
        <input type="date" id="date_creation" name="date_creation" value="<?= htmlspecialchars($article['date_creation']); ?>" required><br><br>

        <input class="btn btn-info btn-lg" type="submit" id="submitArticle" value="Mettre à jour l'article">
    </form>
</section>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
