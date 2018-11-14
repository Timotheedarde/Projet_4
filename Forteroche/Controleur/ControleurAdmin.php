<?php
namespace Controleur;

use Controleur\ControleurSecurise;
use Modele\Billet;
use Modele\Commentaire;


/////////////////////////////////////////////
// Contrôleur des actions d'administration //
/////////////////////////////////////////////

class ControleurAdmin extends ControleurSecurise
{
    private $billet;
    private $commentaire;
    
    // CONSTRUCTEUR
    public function __construct()
    {
        $this->billet = new Billet();
        $this->commentaire = new Commentaire();
    }
    public function index()
    {
        $billets = $this->billet->getBillets();
        $nbBillets = $this->billet->getNombreBillets();
        $nbCommentaires = $this->commentaire->getNombreCommentaires();
        $login = $this->requete->getSession()->getAttribut("login");
        $this->genererVue(array('billets' => $billets, 'nbBillets' => $nbBillets, 'nbCommentaires' => $nbCommentaires, 'login' => $login));
    }

}