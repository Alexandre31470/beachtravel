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
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $auteur = $_POST['auteur'];
    $date_creation = $_POST['date_creation'];

    // Vérification des valeurs récupérées
    if (!$titre || !$contenu || !$auteur || !$date_creation) {
        throw new Exception('Veuillez remplir tous les champs.');
    }
    

    // Préparer et exécuter la requête SQL en utilisant des requêtes préparées
    $stmt = $conn->prepare("INSERT INTO articles (titre, contenu, auteur, date_creation) 
                            VALUES (:titre, :contenu, :auteur, :date_creation)");
    $stmt->bindParam(':titre', $titre, PDO::PARAM_STR);
    $stmt->bindParam(':contenu', $contenu, PDO::PARAM_STR);
    $stmt->bindParam(':auteur', $auteur, PDO::PARAM_STR);
    $stmt->bindParam(':date_creation', $date_creation, PDO::PARAM_STR);
    

    // Exécuter la requête
    $stmt->execute();

    echo "<script>alert('Article créé avec succès'); window.location.href='index.php';</script>";
    
//  catch(PDOException $e) {
//     echo "<script>alert('Erreur: " . $e->getMessage() . "'); window.history.back();</script>";
// }

}catch(PDOException $e) {
    echo "<script>alert('Erreur: " . addslashes($e->getMessage()) . "'); window.history.back();</script>";
}
?>