<?php $this->titre = "Billet simple pour l'Alaska - Editer un Chapitre" ?>

<div id="formPublication">
        <h4>Editer le billet: </h4>
        <form method="post" action="admin/update">
            <input class="titre" id="titreBillet" name="titre" value="<?= $this->nettoyer($billet['titre']) ?>"/> <br />
            <textarea   class="txt" id="txtuBillet" name="contenu" rows="30" ><?= $this->nettoyer($billet['contenu']) ?></textarea> <br />
            <input class="editerBillet" id="editerBillet" type="submit" value="Editer le chapitre" />
        </form>
</div>