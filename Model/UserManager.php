<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Classe Model Utilisateur 
 *
 * @author Armand
 */
class UserManager extends Model{
    
    function logIn($login,$password)
 {
          $sql='SELECT * FROM user WHERE Id=?';
          $data=$this->executerRequete($sql,array($login));
         $var=$data->fetch();
  if($data==null)
          {
              return 1;
          }
          else
          {
              if($var['Password']==$password)
              {
                  return 0;
              }
              else
              {
                  
                  return 2;
              }
         }
          
     }
     
     function SignUp($login,$password,$testpass,$mail,$testmail,$nom,$prenom,$dateNaissance,$statut)
    {
         if($password==$testpass)
         {
             if($mail==$testmail)
                 
             {
                 
                 $hash= sha1($password);
                 $sql='INSERT INTO user (Id,Password,Nom,Prenom,Email,Statut,date_naissance) VALUES (?,?,?,?,?,?,?);';
                 $this->executerRequete($sql,array($login,$hash,$nom,$prenom,$mail,$statut,$dateNaissance));
                
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
     
     function detailUser($login)
     {
          $sql='SELECT * FROM user WHERE Id=?';
          $data=$this->executerRequete($sql,array($login));
          $var=$data->fetch();
          return $var;
     }
     
     function allUser($statut)
     {
         $sql='SELECT * FROM user WHERE Statut=?';
         $data=$this->executerRequete($sql,array($statut));
         return $data;
     }
     
     function validUser($login,$newStatut)
     {
         $sql='UPDATE user SET Statut=? WHERE Id=?';
         $this->executerRequete($sql,array($login,$newStatut));
         
     }
     
    
    
    
}
