<?php

namespace App;

use App\controller\CoachController;
use App\view\View;
class Router
{
    public function run()
    {
        if (isset($_GET['route'])) {
            $action = $_GET['action'] ?? null;
            $route = $_GET['route'];
            if ('coach'=== $route && $action) {
                 $coachController = new CoachController();
                if ('create' === $action){
                  
                return $coachController->subcribe();
                }
                else if ('read' === $action && isset($_GET['id'])){
                    return $coachController->read((int) $_GET['id']);
                    
                }
                
            }
            else if ('client' == $route){
                $clientController = new ClientController();
                if ('read' === $action && isset($_GET['id']))  {
                  var_dump('client'); die;
               //   return $clientController->subcribe();
                } 
            }

        } else {
            require_once 'index.php';
        }
    }
}
?>
