<?php
namespace Controleur;


use Controleur\ControleurAdmin;
use Modele\Billet;

/////////////////////////////////////////////
// Contrôleur des actions d'administration //
/////////////////////////////////////////////

class ControleurAdminnouveauposte extends ControleurAdmin
{
    // Ajoute un nouveau billet
    public function poster() {
        $titre = $this->requete->getParametre("titre");
        $contenu = $this->requete->getParametre("contenu");
        
        $this->billet->ajouterBillet($titre, $contenu);
        // Exécution de l'action par défaut pour réafficher la liste des billets
        $this->executerAction("index"); // utiliser header pour rediriger vers une nouvelle page liste billet admin 
    }

}