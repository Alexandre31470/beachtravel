<?php
ob_start();
?>

<div class="container">
    <div class="login-container">
        <form id="loginForm" onsubmit="return validateLoginForm()">
            <h2>Connexion</h2>
            <div class="form-group">
                <label for="loginUsername">Nom d'utilisateur:</label>
                <input type="text" id="loginUsername" name="username" required>
            </div>
            <div class="form-group">
                <label for="loginPassword">Mot de passe:</label>
                <input type="password" id="loginPassword" name="password" required>
            </div>
            <button id="btn-connect" type="submit">Se connecter</button>
            <p>Pas encore de compte ? <a href="signup.php">S'inscrire</a></p>

        </form>
    </div>
</div>


<?php
$content = ob_get_clean();
require_once 'layout.php';
?>

<script src="script.js"></script> 