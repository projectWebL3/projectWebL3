<?php
namespace App\model;

class Coach {


    private $id;
 private $nom;
 private $prenom;
 private $nRue;
 private $voie;
 private $codeP;
 private $ville;
 private $mail;
 private $bio;
 private $prest;
 private $lieu;
 private $mdp;



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


 public function getBio(){
     return this.$bio;
 }
 
 public function getPrest(){
     return this.$prest;
 }

 public function getLieu(){
     return this.$lieu;
 }

 
 public function getMdp(){
     return this.$prest;
 }


 public function setNom( $nom){
    $this->nom=$nom;
    return $this;
}
public function setPrenom($prenom){
    $this->prenom=$prenom;
    return $this;
}
public function setNRue($nRue){
    $this->nRue = $nRue;
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
public function setVille(  $ville) {
    $this->ville=$ville;
    return $this;
}
public function setMail($mail){
    $this->mail=$mail;
    return $this;
}
public function setBio( $bio){
    $this->bio=$bio;
    return $this;
}
public function setPrest($prest){
    $this->prest=$prest;
    return $this;
}
public function setLieu($lieu){
    $this->lieu=$lieu;
    return $this;
}
public function setMdp($mdp){
     $this->mdp=$mdp;
     return $this;
}
public function setId($id){
    $this->id=$id;
    return $this;
}
}

?>