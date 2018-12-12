<?php $this->titre = "Billet simple pour l'Alaska - Administration" ?>

<div class="titreAdmin">
    <h3>Administration</h3>
</div>

<section class="adminMessage">
    <div class="adminControl">
        <p>Bienvenue, <span><?= $this->nettoyer($login) ?> !</span></p>
        <a id="lienDeco" href="connexion/deconnecter">Se déconnecter</a>
    </div>
    <h4 class="titreParties">Informations générales</h4>
    <p class="recapBlog">Ce blog comporte <?= $this->nettoyer($nbBillets) ?> Chapitre(s) et <?= $this->nettoyer($nbCommentaires) ?> commentaire(s).</p>
</section>

<hr class="separateurAdmin"/>

<h4 class="titreParties">Options d'administration</h4>
<section class="MenuAdmin">
    <a href= "admin/publier"><h5>Ajouter un chapitre</h5></a>
    <a href="admin/moderer"><h5>Commentaires Signalés</h5></a>
    <a href="admin/commentaires"><h5>Voir tous les commentaires</h5></a>
</section>

<hr class="separateurAdmin"/>

<h4 class="titreParties">Liste des chapitres en ligne</h4>
<div class="affichageTousLesBillets">
    <?php foreach ($billets as $billet):?>
    <div class="affichageBilletAdmin">
        <div class="blockTxt">
            <h3 class="titreBilletAdmin"><?= $this->nettoyer($billet['titre']) ?></h3>
            <time>Date de publication: <?= $this->nettoyer($billet['date']) ?></time>
        </div>
        <div class="blockBoutons">
            <a class="glyphicon glyphicon-pencil" href="<?= "admin/update/" .  $this->nettoyer($billet['id']) ?>"  aria-hidden="true" method="get" href="admin/update"></a>
            <button class="supprimerBillet" data-id="<?= $this->nettoyer($billet['id']) ?>"><i class="fas fa-times"></i></button>
        </div>
    </div>
    <?php endforeach; ?>
</div>