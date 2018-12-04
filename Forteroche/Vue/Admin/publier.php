<?php $this->titre = "Billet simple pour l'Alaska - Publier un Chapitre" ?>

<div id="formPublication">
        <h4>Publier un nouveau Chapitre</h4>
        <form method="post" action="admin/publier">
            <input class="titreNouveauBillet" id="titreNouveauBillet" name="titre" placeholder="Titre du chapitre" /><br />
            <textarea   class="txtNouveauBillet" id="txtNouveauBillet" name="contenu" rows="30" 
                        placeholder="Votre texte" required></textarea><br />
            <input class="publierNouveauBillet" id="publierNouveauBillet" type="submit" value="Publier" />
        </form>
</div>