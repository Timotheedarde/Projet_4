<?php $this->titre = "Billet simple pour l'Alaska - " . $this->nettoyer($billet['titre']); ?>


<article>
    <div id="billetArticle">
        <h3 class="titreBilletVueBillet"><?= $this->nettoyer($billet['titre']) ?></h3>
    </div>
    <p><?= $this->nettoyer($billet['contenu']) ?></p>
    <div id="datePubliBilletVueBillet">
        <time>Date de publication : <?= $this->nettoyer($billet['date']) ?></time>
    </div>
</article>

<hr />

<article>
    <div id="commentaireArticle">
        <h3 id="titreCommentairesVueBillet">Commentaires du <?= $this->nettoyer($billet['titre']) ?></h3>
        <div id="caseCommentaireVueBillet">
            <?php foreach ($commentaires as $commentaire): ?>
                <span><?= $this->nettoyer($commentaire['date']) ?> - <?= $this->nettoyer($commentaire['auteur']) ?> dit:</span>
                <div id="contenuCom"><?= $this->nettoyer($commentaire['contenu']) ?></div id="conenuCom">
                <button>Signaler ce commentaire</button>
                <hr />
            <?php endforeach; ?>
        </div>
    </div>



    <div id= "commentaireForm">
        <h4 id="Commenter">Laisser un commentaire</h4>
        <form method="post" action="billet/commenter">
            <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" 
                required /><br />
            <textarea id="txtCommentaire" name="contenu" rows="10" 
                    placeholder="Votre commentaire" required></textarea><br />
            <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
            <input type="submit" value="Commenter" />
        </form>
    </div>

</article>