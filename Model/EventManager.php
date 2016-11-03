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
    
    function ajouterEvent($titre,$texte,$date)
    {
        $sql='INSERT INTO event(titre,text_event,date_event) VALUES (?,?,?)';
        $this->executerRequete($sql,array($titre,$texte,$date)); 
        return 0;
    }
    
    
}
