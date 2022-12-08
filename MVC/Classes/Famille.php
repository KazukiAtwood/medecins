<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Famille{
    
    private $id_famille;
    private $libelle;
    
    public function __construct($id_famille, $libelle){
        $this -> id_famille = $id_famille;
        $this -> libelle = $libelle;
    }
    
    public function getIdFamille(){
        return $this -> id_famille;
    }
    
    public function getLibelle(){
        return $this -> libelle;
    }
}