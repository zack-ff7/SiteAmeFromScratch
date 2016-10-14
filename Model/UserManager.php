<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserManager
 *
 * @author Armand
 */
class UserManager extends Model{
    
    function logIn($login,$password)
    {
        
    }
    
    function SignUp($login,$password,$testpass,$mail,$testmail,$nom,$prenom,$dateNaissance,$statut)
    {
        if($password==$testpass)
        {
            if($mail==$testmail)
                
            {
                
                $hash=  sha1($password);
                $sql='INSERT INTO user (Id,Password,Nom,Prenom,Email,Statut,date_naissance) VALUES (?,?,?,?,?,?,?);';
                $this->executerRequete($sql,array($login,$password,$nom,$prenom,$mail,$statut,$dateNaissance));
               
                return 0;
            }
            else
            {
                return 1;
            }
        }
        else
        {
            
            return 2;
        }
    }
    
    
}
