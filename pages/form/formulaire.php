<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Réservation de Voyage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playwrite+ES+Deco:wght@100..400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../../css/formulaire.css">
    <link rel="icon" type="image/png" href="/pictures/favicon.png">
</head>
<?php include '../../pages/accueil/header.php'; ?>
<body>
    

    

    <div class="form-container">
        <h2>Formulaire de réservation de voyage</h2>
        <form id="reservationForm" action="formulaire.php" method="POST">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone :</label>
                <input type="tel" id="telephone" name="telephone" required>
            </div>
            <div class="form-group">
                <label for="destination">Destination :</label>
                <select id="destination" name="destination" required>
                    <option value="">Sélectionner une destination</option>
                    <option value="paris">Paris</option>
                    <option value="londres">Londres</option>
                    <option value="new-york">New York</option>
                    <option value="tokyo">Tokyo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date-depart">Date de Départ :</label>
                <input type="date" id="date-depart" name="date-depart" required>
            </div>
            <div class="form-group">
                <label for="date-retour">Date de Retour :</label>
                <input type="date" id="date-retour" name="date-retour" required>
            </div>
            <div class="form-group">
                <label for="commentaires">Commentaires :</label>
                <textarea id="commentaires" name="commentaires" rows="4"></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Réserver</button>
            </div>
        </form>
    </div>


</body>

</html>