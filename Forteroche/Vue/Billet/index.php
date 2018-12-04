<?php $this->titre = "Billet simple pour l'Alaska - " . $this->nettoyer($billet['titre']); ?>


<article>
    <div class="billetArticle">
        <h3 class="titreBilletVueBillet" id="tireBillet"><?= $this->nettoyer($billet['titre']) ?></h3>
    </div>
    <p id="contenuBillet"><?= $this->nettoyer($billet['contenu']) ?></p>
    <div class="datePubliBilletVueBillet" id="dateBillet">
        <time>Date de publication : <?= $this->nettoyer($billet['date']) ?></time>
    </div>
</article>

<hr />

<article>
    <div class="commentaireArticle">
        <h3 class="titreCommentairesVueBillet">Commentaires du <?= $this->nettoyer($billet['titre']) ?></h3>
        <div class="comment-block">
            <?php foreach ($commentaires as $commentaire): 
                require ('commenter.php');
            endforeach; ?>
        </div>
    </div>


    <div id="resultat">
        <!--  retour en jQuery au visiteur sur ajout du com -->
    </div>

    <div class= "commentaireForm">
        <h4 class="Commenter">Laisser un commentaire</h4>
        <form class="commentaireForm" method="post" action="billet/commenter">
            <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" 
                required /><br />
            <textarea id="txtCommentaire" name="contenu" rows="10" 
                    placeholder="Votre commentaire" required></textarea><br />
            <input id="articleId" type="hidden" name="id" value="<?= $billet['id'] ?>" />
            <input type="submit" value="Commenter" />
        </form>
    </div>

</article>

