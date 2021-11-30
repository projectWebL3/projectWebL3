<?php
namespace App\repository;

use App\Database; 
use App\modele\ModelCoach as ModelCoach;

class coachRepository extends Database
{
 /*    public function getCoach()
    {
        $connection = (new Database())->getConnection();

        return $connection->query('SELECT * FROM coach');
    }
*/
    public function get(int $id)
    {
        $result = $this->createQuery(
            'SELECT * FROM coach WHERE id = :coachId',
            ['coachId' => $id]
        );
        
        return $this->buildObject($result->fetch());
    }

    private function buildObject(array $row): ModelCoach
    {
        $coach = new ModelCoach;
        $coach->setId((int) $row['id']);
        $coach->setTitle($row['title']);
        $coach->setContent($row['content']);
        $coach->setCreatedAt(new \DateTime($row['createdAt']));
        $coach->setUpdatedAt(isset($row['updatedAt']) ? new \DateTime($row['updatedAt']) : null);
        $coach->setDeletedAt(isset($row['deletedAt']) ? new \DateTime($row['deletedAt']) : null);
        $coach->setAuthorId($row['authorId']);

        return $coach;
    }
}