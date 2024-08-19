<?php
require_once "components/navbar_items.php";
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Beach Travel Blog</title>
	<link rel="stylesheet" type="text/css" href="./public/style/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" type="image/png" href="./public/favicon/favicon.png">
</head>
<header>
	<div class="title-header">

		<h1>Beach Travel Blog de Voyage</h1>

		<span class="separator"></span>


		<a href="accueil.php"><img src="./public/logo/pngegg.png" alt="logo" title="Ceci est mon logo"></a>
	</div>
	<nav>
		<?php foreach ($navbar_items as $link): ?>
			<a href="<?= $link['url'] ?>" class="link_to_page"><?= $link['label'] ?></a>
		<?php endforeach ?>
	</nav>
</header>
<body>
<div class="contener">
		<!--Présentation-->
		<section>
			<div>
				<audio controls loop muted>
					<source src="./public/music/Son-1.mp3" type="audio/mp3">
					<source src="./public/music/Son-2.mp3" type="audio/mp3">
					<source src="./public/music/Son-3.mp3" type="audio/mp3">
					<source src="./public/music/Son-4.mp3" type="audio/mp3">
				</audio>
			</div>



			<p class="descripaccueil">Sur ce blog je partage des photos et commentaires de mes différents voyages dans
				le monde .</p>
		</section>
	</div>
	<?=$contents ?> 
	<footer>

		<section class="footer">
			<h3>Nous Contacter</h3>

			<div id="contact">

				<p>Si vous voulez me contacter, n'hésitez pas à m'envoyer un e-mail à
					<b><a id="email" href="mailto:contact@beachtravel.com"> <br>contact@beachtravel.com </a></b>
				</p>

			</div>
			<span>2023 &copy; Tous droits réservés à Beach Travel</span>
		</section>
	</footer>

</body>

</html>