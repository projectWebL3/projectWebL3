<?php

Class Client{

    private $id;
    private $nom;
    private $prenom;
    private $nRue;
    private $voie;
    private $ville;
    private $codeP;
    private $mdp;
    private $mail;
    
    
    public function getNom(){
     return this.$nom;
    }

    public function getPrenom(){
     return this.$prenom;
    }

    public function getNRue(){
        return this.$nRue;
    }

    public function getVoie(){
        return this.$voie;
    }

    public function getCodeP(){
        return this.$codeP;
    }


    public function getVille(){
        return this.$ville;
    }

    public function getMail(){
        return this.$mail;
    }

    public function getMdp(){
        return this.$mdp;
    }


    public function setNom($nom){
        this.$nom=$nom;
        return this;
    }
   
    public function setPrenom($prenom){
        this.$prenom=$prenom;
        return this;
    }
   
    public function setNRue($nRue){
        this.$nRue=$nRue;
        return this;
    }
   
    public function setVoie($nVoie){
        this.$voie=$voie;
        return this;
    }
   
    public function setCodeP($codeP){
        this.$codeP=$codeP;
        return this;
    }
   
   
    public function setVille($ville){
        this.$ville=$ville;
        return this;
    }
   
   public function setMail($mail){
        this.$mail=$mail;
        return this;
    }
   
    public function setMdp(){
        this.$mdp=$mdp;
        return this;
    }

}