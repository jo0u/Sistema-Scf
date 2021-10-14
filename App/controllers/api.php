<?php


use App\Core\Controller;

  



  class Api extends Controller{
        
    
    public function notes(){
          
          $note = $this->model('Note');
          $dados= $note->getAll();

          header('Content-Type: application/json; charset:utf-8');
            echo json_encode($dados);
          
        
           
        }

     
    }
?>