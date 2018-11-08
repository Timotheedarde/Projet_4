<?php foreach ($billets as $billet):?>
    <a href="<?= "" . $this->nettoyer($billet['id']) ?>">
        <h3 class="titreBillet"><?= $this->nettoyer($billet['titre']) ?></h3>
    </a>
    <time>Date de publication: <?= $this->nettoyer($billet['date']) ?></time>
<?php endforeach; ?>
