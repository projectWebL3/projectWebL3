<?php

namespace App\controller;

use App\repository\ClientRepository;
use App\View\view;

class ClientController
{
    private $view;
    private $clientRepository;
    public function __construct()
    {
        $this->view = new View();
        $this->clientRepository = new ClientRepository();
    }

    public function subcribe()
    {
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->clientRepository->subcribe($_POST);
            
        }
        
        $this->view->render('/client/subcribe');
    }
    public function connexion()
    {
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->clientRepository->connexion($_POST);
            
        }
        
        $this->view->render('/client/connexion');
    }

    
    public function read(int $id)
    {
       
        $this->view->render('/client/read',
        ['client' => $this->clientRepository->get($id) ]);
     

    }

    public function update(int $id)
    {
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->clientRepository->update($_POST);
        }
        
        $this->view->render('/client/update',[
            'client' => $this->clientRepository->get($id) ]);
    }

    public function delete(int $id)
    {
            $this->clientRepository->delete($id);
            $url ="http://localhost/projetMuscu/index.php?route=home";
           
            header("Location: $url");


    }
}