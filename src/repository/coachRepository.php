<?php

namespace App\repository;

use App\Database;
use App\model\Coach;

class CoachRepository extends Database
{
    public function getCoach()
    {
        $sql=('SELECT * FROM coach');
        $result = $this->checkConnection()->query($sql);
        $t=$result->fetchAll();
        
        return($t);
        
    
        
    }

    public function get(int $id)
    {
        $result = $this->createQuery(
            'SELECT * FROM coach WHERE id = :id',
            ['id' => $id]
        );
       
    
        return $this->buildObject($result->fetch());
    }
    public function connexion(array $data = [])
    {
        $sql='SELECT id FROM coach WHERE Mail ="'.$data["mail"].'" AND mdp="'.$data["mdp"].'"';
        $result = $this->checkConnection()->query($sql);
        $t=$result->fetch() ;

        if ($result){
            echo "connecté";
           $url ="http://localhost/projetMuscu/index.php?route=coach&action=read&id=".$t["id"];
           
           header("Location: $url");
        }
        else {
            "Echec";
        }
         
    }
    public function subcribe(array $data = [])
    {
        $query = $this->createQuery(
       'INSERT INTO coach (nom, prenom, nRue, voie, codeP, Ville, tel, mail, bio, prestation, lieu, mdp) VALUES (:nom, :prenom, :nRue, :voie, :codeP, :Ville, :tel, :mail, :bio, :prestation, :lieu, :mdp)',
            [
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'nRue' => $data['nRue'],
            'voie' => $data['voie'],
            'codeP' => $data['codeP'],
            'Ville' => $data['Ville'],
            'tel' => $data['tel'],
            'mail' => $data['mail'],
            'bio' => $data['bio'],
            'prestation' => $data['prestation'],
            'lieu' => $data['lieu'],
            'mdp' => $data['mdp'],  
            ]
        );

        if ($query){
            echo "Votre inscription est enregistrée";
        }
        else {
            "Echec lors de l'inscription";
        } 
    
       
    }

    public function update( array $data = [])
    {
        
        $query = $this->createQuery(
       'UPDATE coach SET prestation = :prestation WHERE id = :id',
            ['prestation' => $data['prestation'],
              'id' => $_GET['id'],
            ]
        );

        if ($query){
            echo "la modification a bien été enregistrée";
        }
        else {
            "Echec lors de la modification";
        } 
    
       
    }

    public function delete(int $id)
    {
        
        $query = $this->createQuery(
       'DELETE FROM coach WHERE id = :id',
            ['id' => $id]);

            

        if ($query){
            echo "Votre compte a bien été supprimé";
        }
        else {
            "erreur";
        } 
    
    }

    private function buildObject(array $row): Coach
    {
        $coach = new Coach;
        $coach->setId((int) $row['id']);
        $coach->setNom( $row['nom']);
        $coach->setPrenom( $row['prenom']);
        $coach->setNrue( $row['nom']);
        $coach->setVoie( $row['voie']);
        $coach->setCodeP( $row['codeP']);
        $coach->setVille( $row['Ville']);
        $coach->setTel( $row['tel']);
        $coach->setMail( $row['mail']);
        $coach->setBio( $row['bio']);
        $coach->setPrest( $row['prestation']);
        $coach->setLieu( $row['lieu']);
        $coach->setMdp( $row['mdp']);

       
       return $coach;
   }

  
}