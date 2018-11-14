<?php $this->titre = "Billet simple pour l'Alaska - Nouveau Chapitre" ?>

<div id="ajouterUnbillet">
        <h4>Publier un nouveau Chapitre</h4>
        <form method="post" action="billet/poster">
            <input id="titreNouveauBillet" name="titre" placeholder="Titre du chapitre" /><br />
            <textarea   id="txtNouveauBillet" name="contenu" rows="30" 
                        placeholder="Votre texte" required></textarea><br />
            <input id="publierNouveauBillet" type="submit" value="Publier" />
        </form>
</div>