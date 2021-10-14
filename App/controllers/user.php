<?php
    use App\Core\Controller;
    use App\Auth;


    class User extends Controller {
        public function cadastrar(){
            $mensagem = array();

            Auth::checkLogin();
            Auth::checkLoginAdmin();
            
            

            if(isset($_POST['cadastro'])):
                $nome = ucwords($_POST['nome']);
                $senha =password_hash($_POST['senha'], PASSWORD_DEFAULT);
                $usuario = strtolower($_POST['usuario']);

                $users = $this->model('Users');
                $users->nome = $nome;
                $users->usuario = $usuario;
                $users->senha = $senha;
                
                $mensagem[] = $users->save();

            endif;

           $this->view('user/cadastrar', $dados =['mensagem'=> $mensagem]);
        }

        public function listar($nome = ''){
          $users = $this->model('Users');
          $dados = $users->getAll();
            

            $this->view('user/listar', $dados = ['registros' => $dados]);
        }

        public function editar($id){
            $mensagem = array();
            $users = $this->model('Users');
            if(isset($_POST['atualizar'])):
                $nome = ucwords($_POST['nome']);
                //$senha =password_hash($_POST['senha'], PASSWORD_DEFAULT);
                $usuario = strtolower($_POST['usuario']);
                $level = $_POST['level'];
                
                $users->nome = $nome;
                $users->usuario = $usuario;
                $users->level = $level;
                
                
                $mensagem[] = $users->update($id);

            endif;
           $dados = $users->findId($id);
            $this->view('user/editar', $dados = ['mensagem' => $mensagem, 'registros' => $dados]);

        }





        public function editarSenha($id){
            $mensagem = array();
            $users = $this->model('Users');
            if(isset($_POST['atualizar'])):
              //  $nome = $_POST['nome'];
               // $usuario = $_POST['usuario'];
               // $level = $_POST['level'];
                $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
                
               // $users->nome = $nome;
                //$users->usuario = $usuario;
               // $users->level = $level;
                $users->senha = $senha;
                
                
                
                $mensagem[] = $users->updatePassowrd($id);

            endif;
           $dados = $users->findId($id);
            $this->view('user/editarSenha', $dados = ['mensagem' => $mensagem, 'registros' => $dados]);
           
        }



            public function excluir($id = ''){
                $mensagem = array();

                $user = $this->model('Users');
               $mensagem[] = $user->delete($id);

               $dados = $user->getAll();


               $this->view('user/listar', $dados = ['registros' => $dados ,'mensagem' => $mensagem]);

            }

            public function buscar(){
          
                $busca = isset($_POST['buscar']) ? $_POST['buscar'] : $_SESSION['buscar'];
                $_SESSION['buscar'] = $busca;

                $user = $this->model('Users');
                $dados= $user->search($busca);
                
              
                   $this->view('user/listar', $dados=['registros' => $dados]);
              }

    }

?>
