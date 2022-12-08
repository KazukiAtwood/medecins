<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

Class MedecinDAO{
    private $login = "root";
    private $mdp = "";
    private $bdd = "gsbrapports";
    private $serveur = "localhost";
    private $connect;

    public function __construct(){
        try {
            $this->connect = new PDO("mysql:host=".$this->serveur.";dbname=".$this->bdd, $this->login, $this->mdp);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            print "Erreur de connexion PDO : ".$e->getCode()." ".$e->getMessage();
            die();
        }
    }
    
    public function getBDD($id, $objet) {
        $resultat = array();
        try {
            $query = $this->connect-> prepare("Select * from ".$objet." where id = :id");
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->execute();

            $ligne = $query->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = $ligne;
                $ligne = $query->fetch(PDO::FETCH_ASSOC);
            }
        }
        catch (PDOException $e) {
            print"erreur : ".$e->getMessage();
            die();
        }
        return $resultat;
    }