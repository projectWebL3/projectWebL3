<?php

namespace App;

use App\controller\CoachController;

class Router
{
    public function run()
    {
        if (isset($_GET['route'])) {
            $action = $_GET['action'] ?? null;
            $route = $_GET['route'];
            if ('coach'=== $route && $action) {
                if ('create' === $action){
                  
               //   return (new Coachcontroller())->subcribe();
                }
                else if ('read' === $action){
                    return (new CoachController())->read((int) $_GET['id']);
                    
                }
                
            }
            else if ('client' == $route){
                if ('read' === $action){
                  var_dump('client'); die;
               //   return (new Coachcontroller())->subcribe();
                } 
            }

        } else {
            require_once 'index.php';
        }
    }
}
?>
