<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClubManager
 *
 * @author Armand
 */
class ClubManager extends Model{
    function nouveauClub($nomClub,$detailclub)
    {
        $sql='INSERT INTO club (nom_club,detail_club) VALUES (?,?)';
        $this->executerRequete($sql,array($nomClub,$detailclub));  
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
