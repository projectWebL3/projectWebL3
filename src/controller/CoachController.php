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
        
        $this->view->render('/coach/read',[
        'coach' => $this->coachRepository->get($id) ]);
     

    }

    public function readAll()
    {
        $this->view->render('/coach/read',[
        'coach' => $this->coachRepository->getCoach() ]);
     

    }

    public function update(int $id)
    {
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->coachRepository->update($_POST);
        }
        
        $this->view->render('/coach/update', [
            'coach' => $this->coachRepository->get($id) ]);;
        

    }

    public function delete(int $id)
    {
            $this->coachRepository->delete($id);


    }
    
}


   

   