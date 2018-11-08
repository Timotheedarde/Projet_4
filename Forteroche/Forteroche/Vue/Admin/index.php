<?php $this->titre = "Billet simple pour l'Alaska - Administration" ?>


<h2>Administration</h2>

Bienvenue, <span><?= $this->nettoyer($login) ?> !</span>
<a id="lienDeco" href="connexion/deconnecter">Se déconnecter</a>

<section id="infoGenerales">
    Ce blog comporte <?= $this->nettoyer($nbBillets) ?> Chapitre(s) et <?= $this->nettoyer($nbCommentaires) ?> commentaire(s).
</section>

<section id="gestionBillet">

    <div id="ajouterUnbillet">
        <h4>Ajouter un nouveau Chapitre</h4>
        <form method="post" action="billet/poster">
            <input id="titreNouveauBillet" name="titre" placeholder="Titre du chapitre" /><br />
            <textarea   id="txtNouveauBillet" name="contenu" rows="10" 
                        placeholder="Votre texte" required></textarea><br />
            <input type="submit" value="Mettre en ligne" />
        </form>
    </div>

    <div id="modifierUnbillet">
        <h4>Liste des chapitres en ligne</h4>
        <div id="listebillets">
            <?php include("Vue/includes/listebillet.php"); ?>
        </div> 
    </div>

</section>

<section id="gestionCommentaire">

    <div id="SupprimerUnCommentaire">
        <h4>Listes de commentaires signalés</h4>
        <div id="listeCommentaires">
            <?php include("Vue/includes/listeCommReport.php"); ?>
        </div>
    </div>

</section>
