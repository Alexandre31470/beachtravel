<?php
ob_start();
?>

<main>

    <div class="container">
        <h1>Contactez-nous</h1>
        <p>Vous avez une question, une suggestion ou simplement envie de dire bonjour ? Remplissez le formulaire ci-dessous et nous vous répondrons dès que possible !</p>
        <div class="formulaire">
            <form action="POST" method="post" enctype="text/plain">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>


                <button class="btn btn-info btn-lg" type="submit">Envoyer</button>
            </form>
        </div>
        
    </div>


</main>

<?php
$content = ob_get_clean();
require_once 'layout.php';

?>