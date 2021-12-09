<?php

namespace App;
use App\controller\ClientController;
use App\controller\CoachController;
use App\view\View;
class Router
{
    public function run()
    {
        if (isset($_GET['route'])) {
            $action = $_GET['action'] ?? null;
            $route = $_GET['route'];
            if ('home'=== $route){
                $this->view = new View();
                $this->view->render('/home');
            }
            if ('coach'=== $route && $action) {
                 $coachController = new CoachController();
                if ('create' === $action){
                  
                return $coachController->subcribe();
                }
                else if ('update' === $action && isset($_GET['id'])){
                    return $coachController->update((int) $_GET['id']);
                    
                }
                else if ('read' === $action && isset($_GET['id'])){
                    return $coachController->read((int) $_GET['id']);
                    
                }
                else if ('connexion' === $action )  {
                  
                    return $coachController->connexion();

                }
                else if ('read' === $action && !isset($_GET['id'])){
                    return $coachController->readAll();
                    
                }
                else if ('delete' === $action && isset($_GET['id'])){
                    return $coachController->delete((int) $_GET['id']);
                    
                }
                
            }
            else if ('client' == $route){
                $clientController = new ClientController();
                if ('read' === $action && isset($_GET['id']))  {
                  
                  return $clientController->read((int) $_GET['id']);
                } 
                else if ('create' === $action )  {
                  
                    return $clientController->subcribe();

                }
                else if ('connexion' === $action )  {
                  
                    return $clientController->connexion();

                }
                else if ('update' === $action && isset($_GET['id']) )  {
              
                    return $clientController->update((int) $_GET['id']);
                } 
                else if ('delete' === $action && isset($_GET['id'])){
                    return $clientController->delete((int) $_GET['id']);
                    
                }

            } 
            else {
                require_once 'index.php';
            }
        }
     }
}
?>
