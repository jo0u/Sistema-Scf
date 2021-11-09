<?php
    use App\Core\Controller;
    use App\Auth;

    class Comunidade extends Controller{

        public function painel($nome = ''){
            $mensagem = array();

             Auth::checkLogin();
            
            
            $comunidade = $this->model('Comunidades');
            $dados = $comunidade->getAll();

        $this->view('comunidade/painel' , $dados = ['registros' => $dados]);
        }
      

        public function cadastrar(){


            $this->view('comunidade/cadastrar');
        }

    }



?>