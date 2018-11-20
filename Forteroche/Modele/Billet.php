<?php
namespace Modele;

use Framework\Modele;

///////////////////////////////////////////
// Fournit les services liés aux billets //
///////////////////////////////////////////

class Billet extends Modele {
    /* Renvoie la liste des billets du blog
     - @return PDOStatement La liste des billets
    */
    public function getBillets() {
        $sql = 'select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
                . ' order by BIL_ID desc';
        $billets = $this->executerRequete($sql);
        return $billets;
    }
    
    /* Renvoie les informations sur un billet
     - @param int $id L'identifiant du billet
     - @return array Le billet
     - @throws Exception Si l'identifiant du billet est inconnu
    */
    public function getBillet($idBillet) {
        $sql = 'select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
                . ' where BIL_ID=?';
        $billet = $this->executerRequete($sql, array($idBillet));
        if ($billet->rowCount() > 0)
            return $billet->fetch();  // Accès à la première ligne de résultat
        else
            throw new \Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
    }
    
    //Ajouter un billet à la BDD
    public function ajouterBillet($titre, $contenu) {
        $sql = 'insert into T_BILLET(BIL_DATE, BIL_TITRE, BIL_CONTENU)'
            . ' values(?, ?, ?)';
        $date = date('Y-m-d H:i:s'); //format de la date
        $this->executerRequete($sql, array($date, $titre, $contenu));
    }

    /* Renvoie le nombre total de billets
     - @return int Le nombre de billets
    */
    public function getNombreBillets(){
        $sql = 'select count(*) as nbBillets from T_BILLET';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbBillets'];
    }
}