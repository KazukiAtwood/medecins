<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Medicament{
    
    private $id;
    private $nomCommercial;
    private $composition;
    private $effets;
    private $contreIndications;
    
    public function __construct($id, $nomCommercial, $composition, $effets, $contreIndications){
        $this -> id = $id;
        $this -> nomCommercial = $nomCommercial;
        $this -> composition = $composition;
        $this -> effets = $effets;
        $this -> contreIndications = $contreIndications;
    }
    
    public function getId(){
        return $this -> id;
    }
    
    public function getNomCommercial(){
        return $this -> nomCommercial;
    }
    
    public function getComposition(){
        return $this -> composition;
    }
    
    public function getEffets(){
        return $this -> effets;
    }

    public function getContreIndication(){
        return $this -> contreIndications;
    }
}