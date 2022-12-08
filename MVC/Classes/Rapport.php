<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Rapport{
    
    private $id;
    private $dateRapport;
    private $motif; 
    private $bilan;
    
    public function __construct($id, $dateRapport, $motif, $bilan){
        $this -> id = $id;
        $this -> dateRapport = $dateRapport;
        $this -> motif = $motif;
        $this -> bilan = $bilan;
    }
    
    public function getId(){
        return $this -> id;
    }
    
    public function getDateRapport(){
        return $this -> dateRapport;
    }
    
    public function getMotif(){
        return $this -> motif;
    }
    
    public function getBilan(){
        return $this -> bilan;
    }
}