<?php
require_once "components/navbar_items.php";
require_once "components/card.php";
// require_once "fonctions/utilities.php"
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
<header>
	<div class="title-header">
		<h1>Beach Travel Blog de Voyage</h1>
		<span class="separator"></span>
		<a href="index.php"><img src="./public/logo/pngegg.png" alt="logo" title="Ceci est mon logo"></a>
	</div>
	<div class="nav-container">
		<nav>
			<?php foreach ($navbar_items as $link): ?>
				<a href="<?= $link['url'] ?>" class="link_to_page"><?= $link['label'] ?></a>
			<?php endforeach ?>
		</nav>
	</div>
</header>
	<div class="container">
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
	<?php if (isset($content)) {
		echo $content;
	} ?>


	<?php if (isset($show_cards) && $show_cards): ?>
		<section>
			<div id="projets">
				<?php foreach ($cards as $card): ?>
					<div class="projet">
						<a href="<?= $card['url'] ?>" target="_blank">
							<div class="picture">
								<img src="<?= $card['image'] ?>" alt="<?= $card['alt'] ?>">
							</div>
							<span><?= $card['label'] ?></span>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</section>
	<?php endif; ?>
	<footer>


		<!-- <section class="footer"> -->

		<a href="index.php"><h3 class="h3-footer">BEACH TRAVEL</h3></a>
		<div class="social-links">

			<p>Suivez-nous sur les réseaux sociaux :</p>
			<a href="https://www.facebook.com/BeachTravelBlog" target="_blank"><i class="fab fa-facebook-f"></i></a>
			<a href="https://www.instagram.com/BeachTravelBlog" target="_blank"><i class="fab fa-instagram"></i></a>
			<a href="https://www.twitter.com/BeachTravelBlog" target="_blank"><i class="fab fa-twitter"></i></a>
		</div>
		<!-- </section> -->
		<p>Nous Contacter</p>

		<div id="contact">

			<p>Si vous voulez me contacter, n'hésitez pas à m'envoyer un e-mail à :
				<b><a id="email" href="mailto:contact@beachtravel.com"> <br>contact@beachtravel.com </a></b>
			</p>

		</div>
		<span>2024 &copy Tous droits réservés à Beach Travel</span>
	</footer>

</body>

</html>