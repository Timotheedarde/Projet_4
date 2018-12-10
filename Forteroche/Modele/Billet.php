<?php
namespace Modele;

use Framework\Modele;

///////////////////////////////////////////
// Fournit les services liés aux billets //
///////////////////////////////////////////

class Billet extends Modele {
    /** Renvoie la liste des billets du blog
     * @return PDOStatement La liste des billets
    */
    public function getBillets() {
        $sql = 'select bil_id as id, bil_date as date,'
                . ' bil_titre as titre, bil_contenu as contenu from t_billet'
                . ' order by bil_id desc';
        $billets = $this->executerRequete($sql);
        return $billets;
    }
    
    /** Renvoie les informations sur un billet
     * @param int $id L'identifiant du billet
     * @return array Le billet
     * @throws Exception Si l'identifiant du billet est inconnu
    */
    public function getBillet($idBillet) {
        $sql = 'select bil_id as id, bil_date as date,'
                . ' bil_titre as titre, bil_contenu as contenu from t_billet'
                . ' where bil_id=?';
        $billet = $this->executerRequete($sql, array($idBillet));
        if ($billet->rowCount() > 0)
            return $billet->fetch();  // Accès à la première ligne de résultat
        else
            throw new \Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
    }
    
    // Ajouter un billet à la BDD
    public function ajouterBillet($titre, $contenu) {
        $sql = 'insert into t_billet(bil_date, bil_titre, bil_contenu)'
            . ' values(?, ?, ?)';
        $date = date('Y-m-d H:i:s'); //format de la date
        $this->executerRequete($sql, array($date, $titre, $contenu));
    }

    // Mettre à jour un billet ****
    public function MAJBillet($titre, $contenu) {
        $sql = 'update t_billet set bil_titre, bil_contenu where bil_id = ?';
        $this->executerRequete($sql, array($titre, $contenu));
    }

    // Supprimer un billet
    public function supprimerBillet($idBillet){
        $sql = 'delete from t_billet where bil_id = ?';
        $this->executerRequete($sql, array($idBillet));
}

    /** Renvoie le nombre total de billets
     * @return int Le nombre de billets
    */
    public function getNombreBillets(){
        $sql = 'select count(*) as nbBillets from t_billet';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbBillets'];
    }
}

