<?php

/*
 Classe Modele des Evenements
 */

/**
 * Description of EventManager
 *
 * @author Armand
 */
class EventManager extends Model{
    function afficherEvents()
    {
        $sql='SELECT * FROM event';
        $res=$this->executerRequete($sql);
        return $res;
    }
    
    function ajouterEvent($titre,$texte,$date,$emmeteur)
    {
        $sql='INSERT INTO event(titre,text_event,date_event,nom_emmeteur) VALUES (?,?,?,?)';
        $this->executerRequete($sql,array($titre,$texte,$date,$emmeteur));  
    }
    
    
}
