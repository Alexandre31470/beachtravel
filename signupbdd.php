<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beachtravel";

try {
    // Connexion à la base de données
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérification que le formulaire est soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        // Récupération et validation des données du formulaire
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $nom = !empty($_POST['nom']) ? htmlspecialchars($_POST['nom']) : null;
        $prenom = !empty($_POST['prenom']) ? htmlspecialchars($_POST['prenom']) : null;
        $photo_profil = !empty($_POST['photo_profil']) ? htmlspecialchars($_POST['photo_profil']) : null;
        $bio = !empty($_POST['bio']) ? htmlspecialchars($_POST['bio']) : null;
        $date_naissance = !empty($_POST['date_naissance']) ? $_POST['date_naissance'] : null;
        $pays_residence = !empty($_POST['pays_residence']) ? htmlspecialchars($_POST['pays_residence']) : null;
        $site_web = !empty($_POST['site_web']) ? htmlspecialchars($_POST['site_web']) : null;

        // Préparer la requête SQL pour insérer les données
        $sql = "INSERT INTO utilisateurs (nom_utilisateur, email, mot_de_passe, nom, prenom, photo_profil, bio, date_naissance, pays_residence, site_web) 
                VALUES (:username, :email, :password, :nom, :prenom, :photo_profil, :bio, :date_naissance, :pays_residence, :site_web)";
        
        $stmt = $conn->prepare($sql);

        // Liaison des paramètres
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':photo_profil', $photo_profil);
        $stmt->bindParam(':bio', $bio);
        $stmt->bindParam(':date_naissance', $date_naissance);
        $stmt->bindParam(':pays_residence', $pays_residence);
        $stmt->bindParam(':site_web', $site_web);

        // Exécuter la requête
        $stmt->execute();

        // Redirection après l'inscription (vers une page de confirmation)
        echo "<script>alert('Inscription réussie'); window.location.href='login.php';</script>";
    }

} catch (PDOException $e) {
    // Gérer les erreurs de connexion ou d'exécution
    echo "<script>alert('Erreur: " . addslashes($e->getMessage()) . "'); window.history.back();</script>";
}
?>
