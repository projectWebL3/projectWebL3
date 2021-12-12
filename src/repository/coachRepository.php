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

        if (!empty($t)){
            
            echo "connecté";
           $url =  $url ="http://localhost/projetMuscu/index.php?route=coach&action=read&id=".$t["id"];
           
           header("Location: $url");
        }
        else {
            echo "<script>alert(\"le mot de passe ou l'adresse mail est invalide , réessayer ou connectez vous!\")</script>";
        }
         
    }

    
        

    public function subcribe(array $data = [])
    {    $sql='SELECT Mail FROM coach WHERE Mail ="'.$data["mail"].'" ';
        $result = $this->checkConnection()->query($sql);

    if (!empty($result->fetch())){
            echo "<script>alert(\"E-mail déjà enregistré\")</script>";
        }
        else if (strpos($data["mail"], "@") == false && (strpos($data["mail"], ".fr")== false || strpos($data["mail"], ".fr") == false)){
            echo "<script>alert(\"E-mail non conforme.\")</script>";
        }

        else{
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
            echo "<script>alert(\"Votre inscription est enregistrée\")</script>";
        }
        else {
            echo "<script>alert(\"Echec lors de l'inscription\")</script>";
        } 
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
            echo "<script>alert(\"la modification a bien été enregistrée\")</script>";
        }
        else {
            echo "<script>alert(\"Echec lors de la modification\")</script>";
        } 
    
       
    }

    public function delete(int $id)
    {
        
        $query = $this->createQuery(
       'DELETE FROM coach WHERE id = :id',
            ['id' => $id]);

            

        if ($query){
            echo "<script>alert(\"Votre compte a bien été supprimé\")</script>";
        }
        else {
            echo "<script>alert(\"erreur\")</script>";
        } 
        $url ="http://localhost/projetMuscu/index.php?route=home";
           
        header("Location: $url");
    
    }

    private function buildObject(array $row): Coach
    {
        $coach = new Coach;
        $coach->setId((int) $row['id']);
        $coach->setNom( $row['nom']);
        $coach->setPrenom( $row['prenom']);
        $coach->setNrue( $row['nRue']);
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