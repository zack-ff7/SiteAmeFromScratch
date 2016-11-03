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
    function afficherClubs()
    {
        $sql='SELECT * FROM club';
        $res=$this->executerRequete($sql);
        return $res;
    }
    
    function ModifClub($club,$texte)
    {
        $sql='UPDATE club SET textClub=? WHERE nom_club=? ';
        $this->executerRequete($sql,array($texte,$club));
        return 0;
    
                
    }
    
    function  afficherTexteClub($club)
    {
        $sql='SELECT textClub FROM club WHERE nom_club=?';
        $res=$this->executerRequete($sql,array($club));
        $data=$res->fetch();
        return $data['textClub'];
    }
}
