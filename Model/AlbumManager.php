<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AlbumManager
 *
 * @author Armand
 */
class AlbumManager extends Model {
    function AfficherAlbum($album)
    {
        $sql='SELECT * FROM Photo where album=?;';
        $data=  $this->executerRequete($sql,array($album));
        return $data;
    }
    
    function AfficherLesAlbums(){
        $sql='SELECT * FROM album;';
        $data=  $this->executerRequete($sql);
        return $data;  
    }
    
    function ajouterAlbums($album)
    {
        $sql='INSERT INTO album (NomAlbum) VALUES (?);';
        $this->executerRequete($sql,array($album));
    }
    
}
