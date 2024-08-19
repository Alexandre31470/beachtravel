<?php
ob_start();
?> 

<section>
    <div id="projets">

        <div class="projet">
            <a href="../articles/bali.html" target="_blank">
                <div class="picture">
                    <img src="../public/pictures/bali.jpg" alt="Image bali">
                </div>
                <span>INDONESIE : Bali</span>
            </a>
        </div>

        <div class="projet">
            <a href="../articles/punta_cana.html" target="_blank">
                <div class="picture">
                    <img src="../public/pictures/punta-cana.jpg" alt="Image Punta Cana">
                </div>
                <span>REPUBLIQUE DOMINICAINE : Punta Cana</span>
            </a>
        </div>

        <div class="projet">
            <a href="/pages/articles/article.html" target="_blank">
                <div class="picture">
                    <img src="../public/pictures/berlin.jpg" alt="Image Berlin">
                </div>
                <span>ALLEMAGNE : Berlin</span>
            </a>
        </div>

        <div class="projet">
            <a href="/pages/articles/article.html" target="_blank">
                <div class="picture">
                    <img src="../public/pictures/bonifacio.jpg" alt="Image Bonifacio">
                </div>
                <span>CORSE : Bonifacio</span>
            </a>
        </div>

        <div class="projet">
            <a href="/pages/articles/article.html" target="_blank">
                <div class="picture">
                    <img src="../public/pictures/calanques-cassis.jpg" alt="Image Calanques Cassis">
                </div>
                <span>FRANCE : Calanques de Cassis</span>
            </a>
        </div>

        <div class="projet">
            <a href="/pages/articles/article.html" target="_blank">
                <div class="picture">
                    <img src="../public/pictures/dubrovnik.jpg" alt="Image de Dubrovnik">
                </div>
                <span>CROATIE : Dubrovnik</span>
            </a>
        </div>

        <div class="projet">
            <a href="/pages/articles/article.html" target="_blank">
                <div class="picture">
                    <img src="../public/pictures/madrid.jpg" alt="Image de Madrid">
                </div>
                <span>ESPAGNE : Madrid</span>
            </a>
        </div>

        <div class="projet">
            <a href="/pages/articles/article.html" target="_blank">
                <div class="picture">
                    <img src="../public/pictures/naples.jpg" alt="Image de Naples">
                </div>
                <span>ITALIE : Naples</span>
            </a>
        </div>

        <div class="projet">
            <a href="/pages/articles/article.html" target="_blank">
                <div class="picture">
                    <img src="../public/pictures/san-francisco.jpg" alt="Image de San-Francisco">
                </div>
                <span>ETATS-UNIS : San-Francisco</span>
            </a>
        </div>

        <div class="projet">
            <a href="/pages/articles/article.html" target="_blank">
                <div class="picture">
                    <img src="../public/pictures/suisse.jpg" alt="Image de la Suisse">
                </div>
                <span>SUISSE : Alpes</span>
            </a>
        </div>

        <div class="projet">
            <a href="/pages/articles/article.html" target="_blank">
                <div class="picture">
                    <img src="../public/pictures/sydney.jpg" alt="Image de Sydney">
                </div>
                <span>AUSTRALIE : Sydney</span>
            </a>
        </div>

        <div class="projet">
            <a href="/pages/articles/article.html" target="_blank">
                <div class="picture">
                    <img src="../public/pictures/vienne.jpg" alt="Image de Vienne">
                </div>
                <span>AUTRICHE : Vienne</span>
            </a>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?> 