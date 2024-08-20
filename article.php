

<?php
ob_start();
?>
<section>
        <h2>Les Plages de Bali</h2>
        <p>Bali est réputée pour ses plages magnifiques, chacune offrant une expérience unique.</p>
        <ul>
            <li><strong>Kuta Beach</strong> : Connue pour son ambiance animée, Kuta est l'endroit idéal pour les
                amateurs de surf et ceux qui cherchent à profiter de la vie nocturne.</li>
            <li><strong>Nusa Dua</strong> : Cette plage de sable blanc est parfaite pour une escapade tranquille en
                famille. Elle est également célèbre pour ses complexes hôteliers luxueux.</li>
            <li><strong>Seminyak</strong> : Seminyak offre une atmosphère plus sophistiquée avec ses restaurants haut de
                gamme, ses boutiques de mode et ses clubs de plage élégants.</li>
        </ul>
    </section>
    <section>
        <h2>Les Paysages Naturels</h2>
        <div class="image-container">
            <img src="https://cdn.pixabay.com/photo/2016/11/08/05/54/agriculture-1807581_1280.jpg"
                alt="Tegallalang Rice Terraces">
        </div>
        <h2>Un aperçu en vidéo de source youtube</h2>
        <aside><iframe width="640" height="480" src="https://www.youtube.com/embed/0sSol20h1ck" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe></aside>
        <p>Bali ne se résume pas à ses plages. L'intérieur de l'île est tout aussi captivant avec ses rizières en
            terrasses, ses volcans majestueux et ses forêts tropicales.</p>
        <ul>
            <li><strong>Tegallalang Rice Terraces</strong> : Situées près d'Ubud, ces rizières en terrasses sont un
                spectacle à couper le souffle. C'est un endroit idéal pour la randonnée et la photographie.</li>
            <li><strong>Mont Batur</strong> : Pour les aventuriers, l'ascension du Mont Batur au lever du soleil est une
                expérience inoubliable. Le panorama sur le lac Batur et les montagnes environnantes est spectaculaire.
            </li>
            <li><strong>Forêt des singes d'Ubud</strong> : Un sanctuaire naturel où les visiteurs peuvent observer des
                macaques dans leur habitat naturel tout en explorant d'anciens temples.</li>
        </ul>
    </section>
    <section>
        <h2>La Culture Balinaise</h2>
        <p>La culture de Bali est profondément ancrée dans les traditions hindoues, ce qui se reflète dans ses nombreux
            temples et cérémonies religieuses.</p>
        <ul>
            <li><strong>Temple de Tanah Lot</strong> : Situé sur un rocher au milieu de la mer, ce temple est l'un des
                sites les plus emblématiques de Bali. Il est particulièrement beau au coucher du soleil.</li>
            <li><strong>Uluwatu Temple</strong> : Perché au sommet d'une falaise, ce temple offre des vues imprenables
                sur l'océan Indien. Les visiteurs peuvent également assister à des spectacles de danse traditionnelle
                Kecak.</li>
            <li><strong>Les festivals</strong> : Les festivités balinaises comme Galungan, Kuningan et Nyepi (le jour du
                silence) sont des moments forts pour découvrir la culture locale.</li>
        </ul>
    </section>
    <section>
        <h2>L'Art et la Cuisine</h2>
        <p>Bali est aussi un centre d'art et de gastronomie.</p>
        <ul>
            <li><strong>Art</strong> : Ubud est le cœur artistique de Bali, avec ses nombreuses galeries, ateliers et
                musées. Les visiteurs peuvent y découvrir la peinture, la sculpture, et d'autres formes d'art
                traditionnelles.</li>
            <li><strong>Cuisine</strong> : La cuisine balinaise est un délice pour les papilles. Ne manquez pas de
                goûter au Babi Guling (cochon de lait rôti) et au Nasi Goreng (riz frit). Les marchés locaux offrent
                également une variété de fruits exotiques et de spécialités locales.</li>
        </ul>
    </section>
    <section>
        <h2>Conseils Pratiques</h2>
        <p>Pour profiter pleinement de votre séjour à Bali, voici quelques conseils pratiques :</p>
        <ul>
            <li><strong>Meilleure période pour visiter</strong> : La saison sèche, de mai à septembre, est idéale pour
                visiter Bali. La saison des pluies, d'octobre à avril, peut apporter des averses soudaines mais aussi
                moins de touristes.</li>
            <li><strong>Transport</strong> : Louer un scooter est une option populaire pour se déplacer à Bali, mais les
                taxis et les services de transport en ligne comme Gojek sont également disponibles.</li>
            <li><strong>Respect des coutumes</strong> : Bali étant une île majoritairement hindoue, il est important de
                respecter les coutumes locales, notamment en visitant les temples (vêtements appropriés, respect des
                cérémonies).</li>
        </ul>
    
        
    </section>

    <?php
    $content= ob_get_clean();
    require_once 'layout.php';
    ?>