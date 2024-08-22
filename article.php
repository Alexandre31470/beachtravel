<?php
require_once 'articlebdd.php';
ob_start()
?>
<h1>ARTICLES DU BLOG</h1>
<div class="article-content">

    <?php if (!empty($articles)): ?>
        <?php foreach ($articles as $article): ?>
            <div class="article">
                <h2><?php echo htmlspecialchars($article['titre']); ?></h2>
                <p><strong>Écrit par :</strong> <?php echo htmlspecialchars($article['auteur']); ?></p>
                <p><strong>Date :</strong> <?php echo htmlspecialchars($article['date_creation']); ?></p>

                
                    <?php if (!empty($article['image_url'])): ?>
                        <div class="article-image">
                            <img class="picture-article" src="<?php echo htmlspecialchars($article['image_url']); ?>" alt="Image de l'article">
                        </div>
                    <?php endif; ?>
                </div>

                <div class="content">
                    <?php echo nl2br(htmlspecialchars($article['contenu'])); ?>
                </div>
            </div>
            <hr>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucun article trouvé.</p>
    <?php endif; ?>
</div>
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>