<?php
namespace Controleur;


use Controleur\ControleurAdmin;

/////////////////////////////////////////////
// Contrôleur des actions d'administration //
/////////////////////////////////////////////

class ControleurAdminnouveauposte extends ControleurAdmin
{
    // Ajoute nouveau billet
    public function nouveauBillet() {
        $titre = $this->requete->getParametre("titre");
        $contenu = $this->requete->getParametre("contenu");
        
        $this->nouveauBillet->ajouterBillet($titre, $contenu);
        
        // Exécution de l'action par défaut pour réafficher la liste des billets
        $this->executerAction("index");
    }
}