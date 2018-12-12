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
        $idBillet = $this->requete->getParametre("id");
        $billets = $this->billet->getBillets();
        $nbBillets = $this->billet->getNombreBillets();
        $commentaires = $this->commentaire->getCommentaires($idBillet);
        $nbCommentaires = $this->commentaire->getNombreCommentaires();
        $login = $this->requete->getSession()->getAttribut("login");

        $this->genererVue(array('billets' => $billets, 'nbBillets' => $nbBillets,'commentaires' => $commentaires, 'nbCommentaires' => $nbCommentaires, 'login' => $login));
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

    // Affichage d'un billet dans un Form pour MAJ
    public function update(){
        $idBillet = $this->requete->getParametre("id");
        $billets = $this->billet->getBillets();
        $billet = $this->billet->getBillet($idBillet);
        $titre = $this->requete->getParametre("titre");
        $contenu = $this->requete->getParametre("contenu");

        if(!empty($titre) && !empty($contenu)){
            $this->billet->MAJBillet($idBillet, $titre, $contenu);
            // Exécution de l'action par défaut pour réafficher la liste des billets
            $this->rediriger('admin');
        }
        $this->genererVue(array('billets' => $billets, 'billet' => $billet));
    }


    // Suppression d'un billet ****
    public function deleteBillet(){
        $billet = $this->requete->getParametre("id");

        $this->billet->supprimerBillet($billet);
        $this->billet->supprimerCommentairesBillet($billet);
        $this->rediriger('admin');
        $this-> genererVue(['billet' => $billet ], null, false);
    }

    // Moderation des commentaires (affichage des commentaires)
    public function moderer() {
        $idBillet = $this->requete->getParametre("id");
        $commentaires = $this->commentaire->getCommentaires($idBillet);
        $report_commentaires = $this->commentaire->getReportCommentaires();
        $liste_commentaires = $this->commentaire->getListeCommentaires();

        $this->genererVue(array('commentaires' => $commentaires, 'report_commentaires' => $report_commentaires, 'liste_commentaires' => $liste_commentaires));
    }

    public function commentaires() {
        $idBillet = $this->requete->getParametre("id");
        $commentaires = $this->commentaire->getCommentaires($idBillet);
        $report_commentaires = $this->commentaire->getReportCommentaires();
        $liste_commentaires = $this->commentaire->getListeCommentaires();

        $this->genererVue(array('commentaires' => $commentaires, 'report_commentaires' => $report_commentaires, 'liste_commentaires' => $liste_commentaires));
    }


    // Suppression des commentaires 
    public function deleteCom(){
        $commentaire = $this->requete->getParametre("id");

        $this->commentaire->supprimerCommentaire($commentaire);
    }
}
