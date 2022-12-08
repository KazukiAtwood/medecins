<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Offrir{
    
    private $quantite;
    
    public function __construct($quantite){
        $this -> quantite = $quantite;
    }
    
    public function getQuantite(){
        return $this -> quantite;
    }
}