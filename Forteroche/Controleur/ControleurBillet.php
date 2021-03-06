<?php
namespace Controleur;

use Framework\Controleur;
use Modele\Billet;
use Modele\Commentaire;


//////////////////////////////////////////////
// Contrôleur des actions liées aux billets //
//////////////////////////////////////////////

class ControleurBillet extends Controleur {
    private $billet;
    private $commentaire;

    // CONSTRUCTEUR
    public function __construct() {
        $this->billet = new Billet();
        $this->commentaire = new Commentaire();
    }

    // Affiche les détails sur un billet
    public function index() {
        $idBillet = $this->requete->getParametre("id");
        $billets = $this->billet->getBillets();
        $billet = $this->billet->getBillet($idBillet);
        $commentaires = $this->commentaire->getCommentaires($idBillet);
        
        $this->genererVue(array('billets' => $billets, 'billet' => $billet, 'commentaires' => $commentaires));
    }

    // Ajoute un commentaire sur un billet 
    public function commenter() {
        $idBillet = $this->requete->getParametre("id");
        $auteur = $this->requete->getParametre("auteur");
        $contenu = $this->requete->getParametre("contenu");
        
        $commentaire = $this->commentaire->ajouterCommentaire($auteur, $contenu, $idBillet);
        // Exécution de l'action par défaut pour réafficher la liste des billets
        $this-> genererVue(['commentaire' => $commentaire ], null, false);
    }

    // Signaler un commentaire sur un billet 
    public function signaler() {
        $com_report = $this->requete->getParametre("id");
        $this->commentaire->reportCommentaire($com_report);
    }
}