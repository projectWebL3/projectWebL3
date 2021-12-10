<?php

namespace App\repository;

use App\Database;
use App\model\Client;


class ClientRepository extends Database
{
    public function getClient()
    {
        $connection = (new Database())->getConnection();

        return $connection->query('SELECT * FROM client');
    }
    
    public function connexion(array $data = [])
    {  
        
        $sql='SELECT id FROM client WHERE Mail ="'.$data["mail"].'" AND mdp="'.$data["mdp"].'"';
        $result = $this->checkConnection()->query($sql);
        $t=$result->fetch() ;

        if (!empty($t)){
        
        echo "connecté";
        $url ="http://localhost/projetMuscu/index.php?route=client&action=read&id=".$t["id"];
           
           header("Location: $url");
        }
        else {
            echo "<script>alert(\"le mot de passe ou l'adresse mail est invalide , réessayez ou inscrivez vous!\")</script>";

        }
         
    }

    public function get(int $id)
    {
        $result = $this->createQuery(
            'SELECT * FROM client WHERE id = :id',
            ['id' => $id]
        );
        
    
        return $this->buildObject($result->fetch());
    }

    

    public function subcribe(array $data = [])
    {   $sql='SELECT Mail FROM client WHERE mail ="'.$data["mail"].'" ';
        $result = $this->checkConnection()->query($sql);

    if (!empty($result->fetch())){
            echo "E-mail déjà enregistré.";
        }
        else if (strpos($data["mail"], "@") == false && (strpos($data["mail"], ".fr")== false || strpos($data["mail"], ".fr") == false)){
            echo "E-mail non conforme.";
        }

        else{
        $query = $this->createQuery(
       'INSERT INTO client ( nom, prenom, nRue, Ville, voie, codeP, mdp, mail) VALUES (:nom, :prenom, :nRue, :Ville, :voie, :codeP, :mdp, :mail)',
            [
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'nRue' => $data['nRue'],
            'Ville' => $data['Ville'],
            'voie' => $data['voie'],
            'codeP' => $data['codeP'],
            'mdp' => $data['mdp'],  
            'mail' => $data['mail'],
            
            ]
        );

        

        if ($query){
            echo "Votre inscription est enregistrée";
        }
        else {
            "Echec lors de l'inscription";
        } 
    }
    
       
    }
        
    public function update( array $data = [])
    {     
        
        $query = $this->createQuery(
       'UPDATE client SET mail = :mail WHERE id = :id',
            ['mail' => $data['mail'],
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
       'DELETE FROM client WHERE id = :id',
            ['id' => $id]);

            

        if ($query){
            echo "Votre compte a bien été supprimé";
        }
        else {
            "erreur";
        } 
    
    }



private function buildObject(array $row): Client
    {
        $client = new Client;
        $client->setId((int) $row['id']);
        $client->setNom( $row['nom']);
        $client->setPrenom( $row['prenom']);
        $client->setNrue( $row['nRue']);
        $client->setVoie( $row['voie']);
        $client->setVille( $row['ville']);
        $client->setCodeP( $row['codeP']);
        $client->setMdp( $row['mdp']);
        $client->setMail( $row['mail']);

        
      
        return $client;
    }
}