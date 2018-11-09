<?php
require_once 'ControleurSecurise.php';
require_once 'Modele/Billet.php';
require_once 'Modele/Commentaire.php';

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

    // Ajoute nouveau billet
    public function nouveauBillet() {
        $titre = $this->requete->getParametre("titre");
        $contenu = $this->requete->getParametre("contenu");
        
        $this->nouveauBillet->ajouterBillet($titre, $contenu);
        
        // Exécution de l'action par défaut pour réafficher la liste des billets
        $this->executerAction("index");
    }

    // Recupere Contenu d'un billet

    // Remplace contenu d'un billet


}