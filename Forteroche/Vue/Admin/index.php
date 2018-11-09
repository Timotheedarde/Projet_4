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

<section id="gestionBillet">

    <div id="ajouterUnbillet">
        <h4>Publier un nouveau Chapitre</h4>
        <form method="post" action="billet/poster">
            <input id="titreNouveauBillet" name="titre" placeholder="Titre du chapitre" /><br />
            <textarea   id="txtNouveauBillet" name="contenu" rows="30" 
                        placeholder="Votre texte" required></textarea><br />
            <input id="publierNouveauBillet" type="submit" value="Publier" />
        </form>
    </div>



    <div id="modifierUnbillet">
        <h4>Liste des chapitres en ligne</h4>
        <div id="listebillets">
        </div> 
    </div>

</section>

<hr />

<section id="gestionCommentaire">

    <div id="SupprimerUnCommentaire">
        <h4>Listes de commentaires signalés</h4>
        <div id="listeCommentaires">
        </div>
    </div>

</section>
