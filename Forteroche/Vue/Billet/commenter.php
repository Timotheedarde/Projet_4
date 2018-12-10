<div class="comment-block">
    <div class="blocTxtCommenter">
        <span><?= $this->nettoyer($commentaire['date']) ?> - <?= $this->nettoyer($commentaire['auteur']) ?> dit:</span>
        <div class="contenuCom"><?= $this->nettoyer($commentaire['contenu']) ?></div>
    </div>
    <div class="blocBoutonCommenter">
        <button class ="boutonSignaler" data-id="<?= $this->nettoyer($commentaire['id']) ?>">Signaler ce commentaire</button>
    </div>
</div>
<hr class="separateurCommentaire" />
