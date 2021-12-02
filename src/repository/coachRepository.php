<?php

namespace App\repository;

use App\Database;
use App\model\Coach;

class CoachRepository extends Database
{
    public function getCoach()
    {
        $connection = (new Database())->getConnection();

        return $connection->query('SELECT * FROM coach');
    }

    public function get(int $id)
    {
        $result = $this->createQuery(
            'SELECT * FROM coach WHERE id = :id',
            ['id' => $id]
        );
    
        return $this->buildObject($result->fetch());
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
        $coach->setMail( $row['mail']);
        $coach->setBio( $row['bio']);
        $coach->setPrest( $row['prestation']);
        $coach->setLieu( $row['lieu']);
        $coach->setMdp( $row['mdp']);

       
        return $coach;
    }
}