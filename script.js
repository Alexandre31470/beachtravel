
document.getElementById('signupForm').addEventListener('submit', function(event) {
    // Empêcher la soumission du formulaire par défaut
    event.preventDefault();

    

    // Récupérer les valeurs des champs du formulaire
    const username = document.getElementById('signupUsername').value;
    const password = document.getElementById('signupPassword').value;
    const email = document.getElementById('signupEmail').value;

    // Validation des champs
    if (!validateUsername(username)) {
        alert("Le nom d'utilisateur doit comporter au moins 3 caractères.");
        return false;
    }

    if (!validatePassword(password)) {
        alert("Le mot de passe doit comporter au moins 8 caractères, incluant un chiffre.");
        return false;
    }

    if (!validateEmail(email)) {
        alert("Veuillez entrer une adresse email valide.");
        return false;
    }

    // Si toutes les validations passent, soumettre le formulaire
    alert("Inscription réussie !");
    document.getElementById('signupForm').submit();
});

// Fonction de validation du nom d'utilisateur
function validateUsername(username) {
    return username.length >= 3;
}

// Fonction de validation du mot de passe
function validatePassword(password) {
    // Mot de passe de 8 caractères minimum, avec au moins un chiffre
    const passwordRegex = /^(?=.*\d).{8,}$/;
    return passwordRegex.test(password);
}

// Fonction de validation de l'email
function validateEmail(email) {
    // Expression régulière pour une adresse email valide
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}



