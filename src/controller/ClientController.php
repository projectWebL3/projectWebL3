<?php

namespace App\controller;

use App\repository\clientRepository;

class ClientController
{
    public function subcribe()
    {
        var_dump('Création ');
    }

    public function read(int $id)
    {
        die;
        $clientRepository = new ClientRepository();
        $client = $clientRepository->get($id);

        var_dump($client);
    }
}