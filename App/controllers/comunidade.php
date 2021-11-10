<?php
    use App\Core\Controller;
    use App\Auth;

    class Comunidade extends Controller{
        

        public function painel($nome = ''){
            $mensagem = array();

             Auth::checkLogin();
            
            
            $comunidades = $this->model('Comunidades');
            $dados = $comunidades->getAll();

        $this->view('comunidade/painel' , $dados = ['registros' => $dados]);
        }
      

        public function cadastrar(){
            $mensagem = array();
            Auth::checkLogin();

            if(isset($_POST['cadastrar'])):
            
            $municipio = addslashes($_POST['municipio']);
            $nmComunidade = addslashes($_POST['nmComunidade']);
            $destritoSede = addslashes($_POST['destrito']);
            $responsavel = addslashes($_POST['responsavel']);
            $responsavelCda = addslashes($_POST['responsavelCda']);

            $comunidades = $this->model('Comunidades');

            $comunidades->municipio = $municipio;
            $comunidades->nmComunidade = $nmComunidade;
            $comunidades->distSede = $destritoSede;
            $comunidades->responsavel = $responsavel;
            $comunidades->responsavelCda = $responsavelCda;

            $mensagem[] = $comunidades->save();

            
        
        endif;

        $this->view('comunidade/cadastrar', $dados = ['mensagem' => $mensagem]);


        }

    }



?>