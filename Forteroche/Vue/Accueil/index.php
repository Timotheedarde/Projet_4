<?php $this->titre = "Billet simple pour l'Alaska"; ?>

<header id="messageAccueil">
    <a href=""><h1 id="titreBlog">Jean Forteroche - Blog d'auteur</h1></a>
    <p>Bienvenue sur mon carnet de route en ligne, ce blog vous permettra de suivre 
    les aventures de mon nouveau roman, <span>"Billet simple pour l'Alaska"</span></p>
</header>

<figure id="homepageimg">
    <img src="public/images/homepageimg.jpg" alt="Paysage d'Alaska" />
</figure>

<div id="titreListeBilletAccueil">
    <h3>Retrouvez les derniers chapitres de l'aventure</h3>
</div>

<section id="listeBilletAccueil">
    <?php foreach ($billets as $billet):
        ?>
        <article>
            <div id="affichageBillet">
                <a href="<?= "billet/index/" . $this->nettoyer($billet['id']) ?>">
                    <h3 class="titreBilletAccueil"><?= $this->nettoyer($billet['titre']) ?></h3>
                </a>
                <time>Date de publication: <?= $this->nettoyer($billet['date']) ?></time>
            </div>
        </article>
        <hr />
    <?php endforeach; ?>
</section>
