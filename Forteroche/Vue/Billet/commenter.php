
    <span><?= $this->nettoyer($commentaire['date']) ?> - <?= $this->nettoyer($commentaire['auteur']) ?> dit:</span>
    <div class="contenuCom"><?= $this->nettoyer($commentaire['contenu']) ?></div>
    <input type="submit" value="Signaler" />
    <hr class="separateurCommentaire" />
