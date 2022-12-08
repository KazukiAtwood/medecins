<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Visiteur{
    
    private $id;
    private $nom; 
    private $prenom;
    private $login;
    private $mdp;
    private $adresse;
    private $cp;
    private $ville;
    private $dateEmbauche;
    
    public function __construct($id, $nom, $prenom, $login, $mdp, $adresse, $cp, $ville, $dateEmbauche){
        $this -> id = $id;
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> login = $login;
        $this -> mdp = $mdp;
        $this -> adresse = $adresse;
        $this -> cp = $cp;
        $this -> ville = $ville;
        $this -> dateEmbauche = $dateEmbauche;
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
    
    public function getLogin(){
        return $this -> login;
    }
    
    public function getMdp(){
        return $this -> mdp;
    }
  
    public function getAdresse(){
        return $this -> adresse;
    }
    
    public function getCp(){
        return $this -> cp;
    }
    
    public function getVille(){
        return $this -> ville;
    }
    
    public function getDateEmbauche(){
        return $this -> dateEmbauche;
    }
}