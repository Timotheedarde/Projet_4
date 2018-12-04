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

    // Ajoute nouveau billet
    public function publier() {
        $titre = $this->requete->getParametre("titre");
        $contenu = $this->requete->getParametre("contenu");
        if(!empty($titre) && !empty($contenu)){
            $this->billet->ajouterBillet($titre, $contenu);
            // Exécution de l'action par défaut pour réafficher la liste des billets
            $this->rediriger('admin');
        }
        $this->generervue();
    }

    // Mise à jour d'un billet ****
    public function update(){
        $titre = $this->requete->getParametre($titre);
        $contenu = $this->requete->getParametre($contenu);
        
        
        $this->generervue();
    }

    // Suppression d'un billet ****
    public function delete(){
        $id = $this->requete->getParametre($id);
        $this->id->supprimerBillet('id');
        $this->rediriger('admin');
        $this->generervue();
    }

    // Moderation (suppression de commentaire) ****
    public function moderer() {

        $this->generervue();
    }
        

}