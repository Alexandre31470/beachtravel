<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="signup-container">
            <form id="signupForm" onsubmit="return validateSignupForm()">
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
                <button type="submit">S'inscrire</button>
                <p>Déjà inscrit ? <a href="login.html">Se connecter</a></p>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
