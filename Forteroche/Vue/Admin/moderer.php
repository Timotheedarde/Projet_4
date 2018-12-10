<?php $this->titre = "Billet simple pour l'Alaska - Modération" ?>

<section id="listReportComment">
        <h4>Listes des commentaires signalés</h4>
        <?php foreach ($report_commentaires as $report_commentaire):
        ?>
        <div class="affichageComModerate">
                <div class="blocTxtComModerate">
                        <span>
                                <?= $this->nettoyer($report_commentaire['date']) ?> - <?= $this->nettoyer($report_commentaire['auteur']) ?> a dit:
                        </span>
                        <div class="contenuCom">
                                <?= $this->nettoyer($report_commentaire['contenu']) ?>
                        </div>
                </div>
                <div class="blocButtonComModerate">
                        <button class ="supprimerCom" data-id="<?= $this->nettoyer($report_commentaire['id']) ?>"><i class="fas fa-times"></i></button>
                </div>
        </div>
    <?php endforeach; ?>
</section>

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
