<?php
ob_start();
?>
    <div class="container">
        <div class="signup-container">
            <form id="signupForm"  method="POST" action="signupbdd.php" onsubmit="return validateSignupForm()">  
                <h2>Inscrivez-vous dès maintenant</h2>
                <div class="form-group">
                    <label for="signupUsername">Nom d'utilisateur:</label>
                    <input type="text" id="signupUsername" name="username" required>
                </div>
                <div class="form-group">
                    <label for="signupPassword">Mot de passe:</label>
                    <input type="password" id="signupPassword" name="password" required>
                </div>
                <div class="form-group">
                    <label for="signupEmail">Email:</label>
                    <input type="email" id="signupEmail" name="email" required>
                </div>
                <div class="form-group">
                    <label for="signupNom">Nom:</label>
                    <input type="text" id="signupNom" name="nom">
                </div>
                <div class="form-group">
                    <label for="signupPrenom">Prénom:</label>
                    <input type="text" id="signupPrenom" name="prenom">
                </div>
                <div class="form-group">
                    <label for="signupPhotoProfil">Photo de profil (URL):</label>
                    <input type="text" id="signupPhotoProfil" name="photo_profil">
                </div>
                <div class="form-group">
                    <label for="signupBio">Biographie:</label>
                    <textarea id="signupBio" name="bio"></textarea>
                </div>
                <div class="form-group">
                    <label for="signupDateNaissance">Date de naissance:</label>
                    <input type="date" id="signupDateNaissance" name="date_naissance">
                </div>
                <div class="form-group">
                    <label for="signupPaysResidence">Pays de résidence:</label>
                    <input type="text" id="signupPaysResidence" name="pays_residence">
                </div>
                <div class="form-group">
                    <label for="signupSiteWeb">Site Web (URL):</label>
                    <input type="url" id="signupSiteWeb" name="site_web">
                </div>
                <button type="submit">S'inscrire</button>
                <p>Déjà inscrit ? <a href="login.php">Se connecter</a></p>
            </form>
        </div>
    </div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>

<script src="script.js"></script>
