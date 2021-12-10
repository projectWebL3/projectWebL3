<?php
namespace App\model;

Class Client{

    private $id;
    public $nom;
    public $prenom;
    public $nRue;
    public $voie;
    public $ville;
    public $codeP;
    public $mdp;
    public $mail;
    
    
    public function getNom(){
     return $this->$nom;
    }

    public function getPrenom(){
     return $this->$prenom;
    }

    public function getNRue(){
        return $this->$nRue;
    }

    public function getVoie(){
        return $this->$voie;
    }

    public function getCodeP(){
        return $this->$codeP;
    }

   

    public function getVille(){
        return $this->$ville;
    }

    public function getMail(){
        return $this->$mail;
    }

    public function getMdp(){
        return $this->$mdp;
    }
    public function getId(){
        return $this->$id;
    }

    public function setId($id){
        $this->id=$id;
        return $this;
    }

    public function setNom($nom){
        $this->nom=$nom;
        return $this;
    }
   
    public function setPrenom($prenom){
        $this->prenom=$prenom;
        return $this;
    }
   
    public function setNRue($nRue){
        $this->nRue=$nRue;
        return $this;
    }

    public function setVoie($voie){
        $this->voie=$voie;
        return $this;
    }
   
    
   
    public function setCodeP($codeP){
        $this->codeP=$codeP;
        return $this;
    }
   
   
    public function setVille($ville){
        $this->ville=$ville;
        return $this;
    }
   
    public function setMail($mail){
        $this->mail=$mail;
        return $this;
    }
   
    public function setMdp($mdp){
        $this->mdp=$mdp;
        return $this;
    }

}