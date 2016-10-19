<?php

/*
 Modele des clubs
 */

/**
 * Description of ClubManager
 *
 * @author Armand
 */
class ClubManager extends Model{
    function nouveauClub($nomClub)
    {
        $sql='INSERT INTO club (nom_club) VALUES (?)';
        $this->executerRequete($sql,array($nomClub));  
    }
    
    function effacerClub($nomClub)
    {
        $sql='DELETE FROM club WHERE nom_club=?';
        $this->executerRequete($sql,array($nomClub));  
    }
    
    function afficherClubs()
    {
        $sql='SELECT * FROM club';
        $res=$this->executerRequete($sql);
        return $res;
    }
}
