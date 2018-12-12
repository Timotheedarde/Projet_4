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
                        <button class ="supprimerComReport" data-id="<?= $this->nettoyer($report_commentaire['id']) ?>"><i class="fas fa-times"></i></button>
                </div>
        </div>
    <?php endforeach; ?>
</section>


