<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beachtravel";



try {
    // Créer une connexion PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configurer PDO pour lancer des exceptions en cas d'erreur
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $destination = $_POST['destination'];
    $date_depart = $_POST['date-depart'];
    $date_retour = $_POST['date-retour'];
    $commentaires = $_POST['commentaires'];

    

    // Préparer et exécuter la requête SQL en utilisant des requêtes préparées
    $stmt = $conn->prepare("INSERT INTO reservations (nom, prenom, email, telephone, destination, date_depart, date_retour, commentaires) 
                            VALUES (:nom, :prenom, :email, :telephone, :destination, :date_depart, :date_retour, :commentaires)");
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':telephone', $telephone, PDO::PARAM_STR);
    $stmt->bindParam(':destination', $destination, PDO::PARAM_STR);
    $stmt->bindParam(':date_depart', $date_depart,PDO::PARAM_STR);
    $stmt->bindParam(':date_retour', $date_retour,PDO::PARAM_STR);
    $stmt->bindParam(':commentaires', $commentaires, PDO::PARAM_STR);
    
    echo "Nom: $nom, Prénom: $prenom, Email: $email, Téléphone: $telephone, Destination: $destination, Date de Départ: $date_depart, Date de Retour: $date_retour, Commentaires: $commentaires";
    // Exécuter la requête
   

// Exécuter la requête
if ($stmt->execute()) {
    echo "<script>alert('Réservation enregistrée avec succès'); window.location.href='accueil.html';</script>";
} else {
    echo "Échec de l'enregistrement de la réservation.";
}

    // $stmt->execute();

    // echo "<script>alert('Réservation enregistrée avec succès'); window.location.href='accueil.html';</script>";
    
} catch(PDOException $e) {
    echo "<script>alert('Erreur: " . $e->getMessage() . "'); window.history.back();</script>";
}

// Fermer la connexion
$conn = null;


?>

