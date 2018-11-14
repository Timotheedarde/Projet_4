<?php $this->titre = "Billet simple pour l'Alaska - Mise à jour du billet" ?>

<div id="modifierUnbillet">
        <h4>Liste des chapitres en ligne</h4>
        <section id="listeBilletAdmin">
            <?php foreach ($billets as $billet):
                ?>
                <article>
                    <div id="affichageBilletAdmin">
                        <a href="<?= "billet/index/" . $this->nettoyer($billet['id']) ?>">
                            <h3 class="titreBilletAdmin"><?= $this->nettoyer($billet['titre']) ?></h3>
                        </a>
                        <time>Date de publication: <?= $this->nettoyer($billet['date']) ?></time>
                    </div>
                </article>
                <hr />
            <?php endforeach; ?>
        </section>
</div>