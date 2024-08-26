<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beachtravel";

try {
    // Création de la connexion
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configuration pour lever des exceptions en cas d'erreurs
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour récupérer les données de la table articles
    $sql = "SELECT id, titre, pays, contenu, auteur, date_creation, image_url FROM articles";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Récupération des résultats sous forme de tableau associatif
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

// Fermer la connexion
$conn = null;
?>