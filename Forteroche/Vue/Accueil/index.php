<?php $this->titre = "Billet simple pour l'Alaska"; ?>

<header class="messageAccueil">
    <a href=""><h1 class="titreBlog">Jean Forteroche - Blog d'auteur</h1></a>
    <p>Bienvenue sur mon carnet de route en ligne, ce blog vous permettra de suivre 
    les aventures de mon nouveau roman:<br> <span>Billet simple pour l'Alaska</span></p>
</header>

<figure class="homepageimg">
    <img src="public/images/homepageimg.jpg" alt="Paysage d'Alaska" />
</figure>

<div class="titreListeBilletAccueil">
    <h3>Retrouvez les derniers chapitres de l'aventure</h3>
</div>

<section class="listeBilletAccueil">
    <?php foreach ($billets as $billet):
        ?>
        <article>
            <div class="affichageBillet">
                <a href="<?= "billet/index/" . $this->nettoyer($billet['id']) ?>">
                    <h3 class="titreBilletAccueil"><?= $this->nettoyer($billet['titre']) ?></h3>
                </a>
                <time>Date de publication: <?= $this->nettoyer($billet['date']) ?></time>
            </div>
        </article>
        <hr />
    <?php endforeach; ?>
</section>
