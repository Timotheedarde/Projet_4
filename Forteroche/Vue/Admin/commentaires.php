<?php $this->titre = "Billet simple pour l'Alaska - Liste de tous les commentaires" ?>

<section id="ListAllComment">
        <h4>Listes de  tous les commentaires </h4>
        <?php foreach ($liste_commentaires as $commentaire):
        ?>
        <div class="affichageAllCom">
                <div class="blocTxtComList">
                        <span>
                                <?= $this->nettoyer($commentaire['date']) ?> - <?= $this->nettoyer($commentaire['auteur']) ?> a dit:
                        </span>
                        <div class="contenuCom">
                                <?= $this->nettoyer($commentaire['contenu']) ?>
                        </div>
                </div>
                <div class="blocButtonComList">
                        <button class ="supprimerCom" data-id="<?= $this->nettoyer($commentaire['id']) ?>"><i class="fas fa-times"></i></button>
                </div>
        </div>
    <?php endforeach; ?>

</section>