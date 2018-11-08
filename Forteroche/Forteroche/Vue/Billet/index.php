<?php $this->titre = "Billet simple pour l'Alaska - " . $this->nettoyer($billet['titre']); ?>


<article>
    <div id="billetArticle">
        <h3 class="titreBillet"><?= $this->nettoyer($billet['titre']) ?></h3>
        <time><?= $this->nettoyer($billet['date']) ?></time>
    </div>
    <p><?= $this->nettoyer($billet['contenu']) ?></p>
</article>

<hr />

<article>
    <div id="commentaireArticle">
        <h3 id="titreCommentaires">Commentaires <?= $this->nettoyer($billet['titre']) ?></h3>

        <?php foreach ($commentaires as $commentaire): ?>
            <p>Date: <?= $this->nettoyer($commentaire['date']) ?></p>
            <p><?= $this->nettoyer($commentaire['auteur']) ?> dit :</p>
            <p><?= $this->nettoyer($commentaire['contenu']) ?></p>
            <button>Signaler ce commentaire</button>
        <?php endforeach; ?>
        </div>
        <hr />
    <div id= "commentaireForm">
        <h4 id="Commenter">Laissez un commentaire</h4>
        <form method="post" action="billet/commenter">
            <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" 
                required /><br />
            <textarea id="txtCommentaire" name="contenu" rows="4" 
                    placeholder="Votre commentaire" required></textarea><br />
            <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
            <input type="submit" value="Commenter" />
        </form>
    </div>

</article>