<?php

namespace App\controller;

use App\repository\coachRepository;
use App\View\view;

class CoachController
{

    private $view;
    private $coachRepository;

    public function __construct()
    {
        $this->view = new View();
        $this->coachRepository = new CoachRepository();
    }
    public function subcribe()
    {
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->coachRepository->subcribe($_POST);
            
        }
        
        $this->view->render('/coach/subcribe');
    
    }

    public function read(int $id)
    {
        $coachRepository = new CoachRepository();
        $coach = $coachRepository->get($id);

        var_dump($coach);
    }
    
}


   

   