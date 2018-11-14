<?php $this->titre = "Billet simple pour l'Alaska - Administration" ?>

<div id="titreAdmin">
    <h3>Administration</h3>
</div>

<section id="adminMessage">
    <div id="adminControl">
        <p>Bienvenue, <span><?= $this->nettoyer($login) ?> !</span></p>
        <a id="lienDeco" href="connexion/deconnecter">Se déconnecter</a>
    </div>
    <p>Ce blog comporte <?= $this->nettoyer($nbBillets) ?> Chapitre(s) et <?= $this->nettoyer($nbCommentaires) ?> commentaire(s).</p>
</section>

<hr />

<h4 id="titreOption">Options d'administration</h4>

<section id="MenuAdmin">
    <a href="<?= "adminnouveauposte" ?>"><h5>Ajouter un Chapitre</h5></a>
    <a href="<?= "adminmodifierchapitre" ?>"><h5>Modifier un Chapitre</h5></a>
    <a href="<?= "adminmoderation" ?>"><h5>Modération des commentaires</h5></a>
</section>