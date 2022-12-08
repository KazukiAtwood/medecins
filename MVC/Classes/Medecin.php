<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Medecin{
    
    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $tel;
    private $specialiteComplementaire;
    private $departement;
    
    public function __construct($id, $nom, $prenom, $adresse, $tel, $specialiteComplementaire, $departement){
        $this -> id = $id;
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> adresse = $adresse;
        $this -> tel = $tel;
        $this -> specialiteComplementaire = $specialiteComplementaire;
        $this -> departement = $departement;
    }
    
    public function getId(){
        return $this -> id;
    }
    
    public function getNom(){
        return $this -> nom;
    }

    public function getPrenom(){
        return $this -> prenom;
    }
    
    public function getAdresse(){
        return $this -> adresse;
    }
    
    public function getTel(){
        return $this -> tel;
    }
    
    public function getSC(){
        return $this -> specialiteComplementaire;
    }
    
    public function getDepartement(){
        return $this -> departement;
    }
}