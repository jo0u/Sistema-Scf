<?php
    
    use App\Core\Controller;
    use App\Auth;

    class Requerente extends Controller{

        public function index($nome = ''){
            $mensagem = array();

            Auth::checkLogin();
            

            
           $requerentes = $this->model('Requerentes');
           $dados = $requerentes->getAll();


            $this->view('requerente/index',$dados = ['registros' => $dados]);
        }


        public function cadastrar(){
            $mensagem = array();
            Auth::checkLogin();
            
            
            if(isset($_POST['cadastrar'])):
                $cpf = addslashes($_POST['cpf']);
                $pessoa = addslashes($_POST['pessoa']);
                $requerente = addslashes($_POST['requerente']);
                $sexo = addslashes($_POST['sexo']);
                $profissao = addslashes($_POST['profissao']);
                $dt_nascimento = addslashes($_POST['data']);
                $nacionalidade = addslashes($_POST['nacionalidade']);
                $nome_social = addslashes($_POST['nmSocial']);
                $rg = addslashes($_POST['rg']);
                $estado = addslashes($_POST['estado']);
                $telefone = addslashes($_POST['telefone']);
                $est_civil = $_POST['estCivil'];
                $nm_pai = addslashes($_POST['nomePai']);
                $nm_mae = addslashes($_POST['nomeMae']);
                $enderco = addslashes($_POST['endereco']);
                $email = addslashes($_POST['email']);

                $requerentes = $this->model('Requerentes');

                $requerentes->cpf  = $cpf;
                $requerentes->pessoa  =  $pessoa;
                $requerentes->requerente  = $requerente;
                $requerentes->sexo  =  $sexo;
                $requerentes->profissao  =  $profissao;
                $requerentes->dt_nascimento  =  $dt_nascimento;
                $requerentes->nacionalidade  = $nacionalidade;
                $requerentes->nome_social  =  $nome_social;
                $requerentes->rg  =  $rg;
                $requerentes->estado  = $estado;
                $requerentes->telefone  =  $telefone;
                $requerentes->est_civil  =  $est_civil;
                $requerentes->nm_pai  = $nm_pai;
                $requerentes->nm_mae  =  $nm_mae;
                $requerentes->endereco  =  $enderco;
                $requerentes->email       = $email;

                $mensagem[] =  $requerentes->save();

            endif;
                
            $this->view('requerente/cadastrar', $dados = ['mensagem' => $mensagem]);
        }
        


        public function editar($id){
            $mensagem = array();
            $requerentes = $this->model('Requerentes');
            if(isset($_POST['atualizar'])):


                $cpf = addslashes($_POST['cpf']);
                $pessoa = addslashes($_POST['pessoa']);
                $requerente = addslashes($_POST['requerente']);
                $sexo = addslashes($_POST['sexo']);
                $profissao = addslashes($_POST['profissao']);
                $dt_nascimento = addslashes($_POST['data']);
                $nacionalidade = addslashes($_POST['nacionalidade']);
                $nome_social = addslashes($_POST['nmSocial']);
                $rg = addslashes($_POST['rg']);
                $estado = addslashes($_POST['estado']);
                $telefone = addslashes($_POST['telefone']);
                $est_civil = $_POST['estCivil'];
                $nm_pai = addslashes($_POST['nomePai']);
                $nm_mae = addslashes($_POST['nomeMae']);
                $enderco = addslashes($_POST['endereco']);
                $email = addslashes($_POST['email']);

                $requerentes = $this->model('Requerentes');

                $requerentes->cpf  = $cpf;
                $requerentes->pessoa  =  $pessoa;
                $requerentes->requerente  = $requerente;
                $requerentes->sexo  =  $sexo;
                $requerentes->profissao  =  $profissao;
                $requerentes->dt_nascimento  =  $dt_nascimento;
                $requerentes->nacionalidade  = $nacionalidade;
                $requerentes->nome_social  =  $nome_social;
                $requerentes->rg  =  $rg;
                $requerentes->estado  = $estado;
                $requerentes->telefone  =  $telefone;
                $requerentes->est_civil  =  $est_civil;
                $requerentes->nm_pai  = $nm_pai;
                $requerentes->nm_mae  =  $nm_mae;
                $requerentes->endereco  =  $enderco;
                $requerentes->email       = $email;

                $mensagem[] =  $requerentes->update($id);

            endif;

            $dados = $requerentes->findId($id);
            $this->view('requerente/editar', $dados = ['mensagem' => $mensagem, 'registros' => $dados]);
        }
    }




?>