function validateLoginForm() {
    var username = document.getElementById("loginUsername").value;
    var password = document.getElementById("loginPassword").value;

    if (username === "" || password === "") {
        alert("Veuillez remplir tous les champs.");
        return false;
    }

    // Simuler la connexion réussie
    alert("Connexion réussie.");
    // Rediriger vers une page d'accueil ou tableau de bord
    // window.location.href = "dashboard.html";
    return false;
}

function validateSignupForm() {
    var username = document.getElementById("signupUsername").value;
    var password = document.getElementById("signupPassword").value;
    var email = document.getElementById("signupEmail").value;

    if (username === "" || password === "" || email === "") {
        alert("Veuillez remplir tous les champs.");
        return false;
    }

    // Simuler l'inscription réussie
    alert("Inscription réussie. Vous pouvez maintenant vous connecter.");
    // Rediriger vers la page de connexion
    window.location.href = "login.html";
    return false;
}
