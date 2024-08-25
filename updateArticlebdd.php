<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beachtravel";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données du formulaire
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $auteur = $_POST['auteur'];
    $date_creation = $_POST['date_creation'];

    // Vérification des valeurs récupérées
    if (!$id || !$titre || !$contenu || !$auteur || !$date_creation) {
        throw new Exception('Veuillez remplir tous les champs.');
    }

    // Préparer et exécuter la requête SQL pour mettre à jour l'article
    $stmt = $conn->prepare("UPDATE articles SET titre = :titre, contenu = :contenu, auteur = :auteur, date_creation = :date_creation WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':titre', $titre, PDO::PARAM_STR);
    $stmt->bindParam(':contenu', $contenu, PDO::PARAM_STR);
    $stmt->bindParam(':auteur', $auteur, PDO::PARAM_STR);
    $stmt->bindParam(':date_creation', $date_creation, PDO::PARAM_STR);

    // Exécuter la requête
    $stmt->execute();

    echo "<script>alert('Article mis à jour avec succès'); window.location.href='index.php';</script>";

} catch (PDOException $e) {
    echo "<script>alert('Erreur: " . addslashes($e->getMessage()) . "'); window.history.back();</script>";
}
?>
