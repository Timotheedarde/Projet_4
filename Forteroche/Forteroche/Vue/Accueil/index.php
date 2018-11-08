<?php $this->titre = "Billet simple pour l'Alaska"; ?>

<?php foreach ($billets as $billet):
    ?>
    <article>
        <div id="affichageBillet">
            <a href="<?= "billet/index/" . $this->nettoyer($billet['id']) ?>">
                <h3 class="titreBillet"><?= $this->nettoyer($billet['titre']) ?></h3>
            </a>
            <time>Date de publication: <?= $this->nettoyer($billet['date']) ?></time>
        </div>
        <p><?= $this->nettoyer($billet['contenu']) ?></p>
    </article>
    <hr />
<?php endforeach; ?>
