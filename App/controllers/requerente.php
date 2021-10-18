<?php
    
    use App\Core\Controller;
    use App\Auth;

    class Requerente extends Controller{

        public function index($nome = ''){
            



            $this->view('/requerente/index');
        }


        public function cadastrar($nome = ''){

            $this->view('/requerente/cadastrar');
        }
        

    }




?>