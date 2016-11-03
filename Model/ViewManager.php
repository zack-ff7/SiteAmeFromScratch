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
    
    function afficherProgramme(){
        
        $sql='SELECT * FROM vueprogramme;';
        $data=  $this->executerRequete($sql);
        $var=$data->fetch();
        return $var['textpage'];
        
    }
    
    function modifProgramme($texte){
        $sql='UPDATE vueprogramme SET textpage=?';
                $this->executerRequete($sql,array($texte));
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
         
    function modifDiscipline($texte){
        $sql='UPDATE vuediscipline SET textpage=?;';
                      
                $this->executerRequete($sql,array($texte));
                return 0;
    }
    
     
    function modifliens($texte){
        $sql='UPDATE vueliens SET textpage=?';
                $this->executerRequete($sql,array($texte));
                return 0;
    }
    
     function afficherAccueil(){
        
        $sql='SELECT * FROM vueaccueil;';
        $data=  $this->executerRequete($sql);
        $var=$data->fetch();
        return $var['textpage'];
        
    }
    
     function modifAccueil($texte){
        $sql='UPDATE vueaccueil SET textpage=?';
                $this->executerRequete($sql,array($texte));
                return 0;
    }
    
    
    
}
