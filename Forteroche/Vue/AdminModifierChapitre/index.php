<?php $this->titre = "Billet simple pour l'Alaska - Mise à jour du billet" ?>

<div id="modifierUnbillet">
        <h4>Liste des chapitres en ligne</h4>
        <section id="listeBilletAdmin">
            <div id="affichageBilletAdmin">
                <?php foreach ($billets as $billet):?>
                    <h3 class="titreBilletAdmin"><?= $this->nettoyer($billet['titre']) ?></h3>
                    <time>Date de publication: <?= $this->nettoyer($billet['date']) ?></time>
                    <button>
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                    <hr />
                <?php endforeach; ?>
            </div>
        </section>


        <section id="zoneUpdateTexte">
            <h4 id="titreDuChapitreMAJ">
            Mise à jour du: <?php $this->titre = $this->nettoyer($billet['titre']); ?>
            </h4> 
            <form method="post" action="billet/modifier">
                <input id="modifierTitre" name="titre" placeholder="" /><br />
                <textarea   id="modifierTexte" name="contenu" rows="30" placeholder="" required>
                </textarea>
                <br />
                <input id="updateChapitre" type="submit" value="Mettre à jour" />
            </form>
        </section>



</div>