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
        $this->view->render('/coach/readAll',[
        'coach' => $this->coachRepository->getCoach() ]);
     

    }

    public function connexion()
    {  
        
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            if (empty($_POST["mail"])||empty($_POST["mdp"])){
        echo "<script>alert(\"les informations entrées ne sont pas suffisants!\")</script>";
        die;
        }
            $this->coachRepository->connexion($_POST);
            
        }
        
        $this->view->render('/coach/connexion');
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


   

   