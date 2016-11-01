<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ViewManager
 *
 * @author Armand
 */
class ViewManager extends Model {
    
    function afficherAccueil(){
        
        $sql='SELECT * FROM vueaccueil;';
        $data=  $this->executerRequete($sql);
        $var=$data->fetch();
        return $var['textpage'];
        
    }
    
    function modifAccueil($texte){
        $sql='INSERT INTO vueaccueil (textpage) VALUES (?);';
                $sql2='DELETE FROM vueaccueil;';
                $this->executerRequete($sql2);
                $this->executerRequete($sql);
                return 0;
    }
    
     function afficherDiscipline(){
        
        $sql='SELECT * FROM vuediscipline;';
        $data=  $this->executerRequete($sql);
        $var=$data->fetch();
        return $var['textpage'];
        
    }
     function afficherLiens(){
        
        $sql='SELECT * FROM vueliens;';
        $data=  $this->executerRequete($sql);
        $var=$data->fetch();
        return $var['textpage'];
        
    }
    
     function afficherContacts(){
        
        $sql='SELECT * FROM vuecontact;';
        $data=  $this->executerRequete($sql);
        $var=$data->fetch();
        return $var['textpage'];
        
    }
    
     
    function modifContact($texte){
        $sql='INSERT INTO vuecontact(textpage) VALUES (?);';
                $sql2='DELETE FROM vuecontact;';
                $this->executerRequete($sql2);
                $this->executerRequete($sql);
                return 0;
    }
    
     
    function modifDiscipline($texte){
        $sql='INSERT INTO vuediscipline (textpage) VALUES (?);';
                $sql2='DELETE FROM vuediscipline;';
                $this->executerRequete($sql2);
                $this->executerRequete($sql);
                return 0;
    }
    
     
    function modifliens($texte){
        $sql='INSERT INTO vueliens(textpage) VALUES (?);';
                $sql2='DELETE FROM vueliens;';
                $this->executerRequete($sql2);
                $this->executerRequete($sql);
                return 0;
    }
    
    
    
}
