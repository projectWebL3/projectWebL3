<?php

namespace App\controller;

use App\repository\coachRepository;

class CoachController
{
    public function subcribe()
    {
        var_dump('Création d\'un post');

        $coachRepository = new CoachRepository();
        $coach = $coachRepository->setCoach();

        var_dump($coach);
    }

    public function read(int $id)
    {
        $coachRepository = new CoachRepository();
        $coach = $coachRepository->get($id);

        var_dump($coach);
    }
    
}