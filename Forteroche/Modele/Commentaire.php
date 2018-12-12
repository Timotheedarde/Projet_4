<?php
namespace Modele;

use Framework\Modele;

///////////////////////////////////////////////
// Fournit les services liés au commentaires //
///////////////////////////////////////////////

class Commentaire extends Modele {
    /** Renvoie la liste des commentaires du blog
    * @return PDOStatement La liste des commentaires
    */
    public function getListeCommentaires() {
        $sql = 'select com_id as id, com_date as date,'
                . ' com_auteur as auteur, com_contenu as contenu from t_commentaire'
                . ' order by com_id desc';
        $liste_commentaires = $this->executerRequete($sql, array());
        return $liste_commentaires;
    }
    
    // Renvoie la liste des commentaires associés à un billet
    public function getCommentaires($idBillet) {
        $sql = 'select com_id as id, com_date as date,'
                . ' com_auteur as auteur, com_contenu as contenu from t_commentaire'
                . ' where bil_id=?';
        $commentaires = $this->executerRequete($sql, array($idBillet));

        return $commentaires;
    }

    // Renvoi la liste des commentaires signalés 
    public function getReportCommentaires(){
        $sql = 'select com_id as id, com_date as date,'
                . ' com_auteur as auteur, com_contenu as contenu, bil_id as idBillet from t_commentaire'
                . ' where com_report = 1';
        $report_commentaires = $this->executerRequete($sql, array());

        return $report_commentaires;
    }

    // ajout d'un commentaire
    public function ajouterCommentaire($auteur, $contenu, $idBillet) {
        $sql = 'insert into t_commentaire(com_date, com_auteur, com_contenu, com_report, bil_id)'
            . ' values(?, ?, ?, 0, ?)';
        $date = date('Y-m-d H:i:s'); //format de la date
        $this->executerRequete($sql, array($date, $auteur, $contenu, $idBillet));

        return [
            'auteur' => $auteur,
            'contenu' => $contenu,
            'date' => $date,
            'id' => $this->getLastInsertId()
        ];
    }

    // Signalement d'un commentaire 
    public function reportCommentaire($id) {
        $sql = 'update t_commentaire set com_report = 1 where com_id = ?';
        $this->executerRequete($sql, array($id));
    }

    // Supprimer un commentaire
    public function supprimerCommentaire($id){
            $sql = 'delete from t_commentaire where com_id = ?';
            $this->executerRequete($sql, array($id));
    }

    // Supprimer tous les commentaires lié à un billet ****
    public function supprimerCommentairesBillet($idBillet){
        $sql = 'delete from t_commentaire where bil_id = ?';
        $this->executerRequete($sql, array($idBillet));
    }
    
    /** Renvoie le nombre total de commentaires
     * @return int Le nombre de commentaires
    */
    public function getNombreCommentaires()
    {
        $sql = 'select count(*) as nbCommentaires from t_commentaire';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne

        return $ligne['nbCommentaires'];
    }
}
