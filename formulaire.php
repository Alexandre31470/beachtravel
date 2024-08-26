<?php
ob_start();
?>
<div class="form-container">
    <h2>Formulaire de réservation de voyage</h2>
    <form id="reservationForm" action="formulairebdd.php" method="POST">
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
            <label for="nombre_jours">Nombre de jours:</label>
            <input type="text" id="nombre_jours" class="form-control" readonly>
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

<script>
    // Ajouter des écouteurs d'événements pour les changements de dates
    document.getElementById('date-depart').addEventListener('change', calculerNombreJours);
    document.getElementById('date-retour').addEventListener('change', calculerNombreJours);

    function calculerNombreJours() {
        // Récupérer les valeurs des champs de date
        var dateDepart = document.getElementById('date-depart').value;
        var dateRetour = document.getElementById('date-retour').value;

        // Vérifier que les deux dates sont bien renseignées
        if (dateDepart && dateRetour) {
            // Convertir les chaînes de caractères en objets Date
            var depart = new Date(dateDepart);
            var retour = new Date(dateRetour);

            // Calculer la différence en millisecondes
            var difference = retour - depart;

            // Convertir la différence en jours
            var nombreJours = difference / (1000 * 60 * 60 * 24);

            // Vérifier si le nombre de jours est valide (>= 0)
            if (nombreJours >= 0) {
                // Afficher le nombre de jours dans le champ "nombre_jours"
                document.getElementById('nombre_jours').value = nombreJours + " jours";
            } else {
                // Si la date de retour est avant la date de départ, afficher une alerte
                document.getElementById('nombre_jours').value = "Invalide";
            }
        }
    }
</script>

<?php
$content = ob_get_clean();
require_once 'layout.php';


?>

