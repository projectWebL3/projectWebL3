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
            if ('POST' === $_SERVER['REQUEST_METHOD'] && $_POST['oui']) {
            $this->clientRepository->delete($id);
        }
        elseif('POST' === $_SERVER['REQUEST_METHOD'] && $_POST['non']){
            $this->view->render('/home');
        }
           $this->view->render('/client/delete');


    }
}