<?php
    use App\Core\Model;

    
    class Requerentes extends Model {

        public $cpf;
        public $pessoa;
        public $nome;
        public $sexo;
        public $profissao;
        public $dt_nascimento;
        public $nacionalidade;
        public $nome_social;
        public $rg;
        public $estado;
        public $telefone;
        public $est_civil;
        public $nm_pai;
        public $nm_mae;
        public $endereco;
        public $email;


        public function getAll(){
            $sql = "SELECT * FROM requerente";
            $stmt = Model::getConn()->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0):
                $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $resultado;
            else:
                return [];
            endif;
            
        }


        public function findId($id){
            $sql = "SELECT * FROM requerente WHERE id = ?";
            $stmt = Model::getConn()->prepare($sql);
            $stmt->bindValue(1,$id);
            $stmt->execute();

            if($stmt->rowCount()> 0):
                $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
                return $resultado;
            else:
                return[];
            endif;
        }


        public function save(){

            $sql = "INSERT INTO requerente(cpf, pessoa, nome, sexo, profissao, dt_nascimento, nacionalidade,nome_social,rg,estado,telefone,est_civil,nm_pai,nm_mae,endereco,email) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = Model::getConn()->prepare($sql);
            $stmt->bindValue(1,$this->cpf);
            $stmt->bindValue(2,$this->pessoa);
            $stmt->bindValue(3,$this->nome);
            $stmt->bindValue(4,$this->sexo);
            $stmt->bindValue(5,$this->profissao);
            $stmt->bindValue(6,$this->dt_nascimento);
            $stmt->bindValue(7,$this->nacionalidade);
            $stmt->bindValue(8,$this->nome_social);
            $stmt->bindValue(9,$this->rg);
            $stmt->bindValue(10,$this->estado);
            $stmt->bindValue(11,$this->telefone);
            $stmt->bindValue(12,$this->est_civil);
            $stmt->bindValue(13,$this->nm_pai);
            $stmt->bindValue(14,$this->nm_mae);
            $stmt->bindValue(15,$this->endereco);
            $stmt->bindValue(16,$this->email);

            if($stmt->execute()):
                return "M.toast({html: 'Cadastrado com sucesso!', classes: 'rounded, green'});";
            else:
                return "M.toast({html: 'Falha ao cadastrar', classes: 'rounded ,red'});";
            endif;
            
            
        }


        public function update($id){

            $sql = "UPDATE requerente SET cpf = ? , pessoa = ? , nome = ? , sexo = ? , profissao = ? , dt_nascimento = ? , nacionalidade = ? , nome_social = ? , rg = ? , estado = ?, telefone = ? , est_civil = ? ,nm_pai = ? ,nm_mae = ? ,endereco = ? , email = ? WHERE id = ?";
            $stmt = Model::getConn()->prepare($sql);
            $stmt->bindValue(1,$this->cpf);
            $stmt->bindValue(2,$this->pessoa);
            $stmt->bindValue(3,$this->nome);
            $stmt->bindValue(4,$this->sexo);
            $stmt->bindValue(5,$this->profissao);
            $stmt->bindValue(6,$this->dt_nascimento);
            $stmt->bindValue(7,$this->nacionalidade);
            $stmt->bindValue(8,$this->nome_social);
            $stmt->bindValue(9,$this->rg);
            $stmt->bindValue(10,$this->estado);
            $stmt->bindValue(11,$this->telefone);
            $stmt->bindValue(12,$this->est_civil);
            $stmt->bindValue(13,$this->nm_pai);
            $stmt->bindValue(14,$this->nm_mae);
            $stmt->bindValue(15,$this->endereco);
            $stmt->bindValue(16,$this->email);
            $stmt->bindValue(17,$id);

            if($stmt->execute()):
                return "M.toast({html: 'Atualizado com sucesso!', classes: 'rounded, green'});";
            else:
                return "M.toast({html: 'Falha ao atualizar', classes: 'rounded ,red'});";
            endif;
            
            
        }

        public function delete($id){
            $sql = "DELETE FROM requerente WHERE id = ?";
            $stmt = Model::getConn()->prepare($sql);

            $stmt->bindValue(1,$id);

            if($stmt->execute()):
                return "M.toast({html: 'Excluido com sucesso!', classes: 'rounded, green'});";
            else:
                return "M.toast({html: 'Falha ao Excluir', classes: 'rounded ,red'});";
            endif;
            
        }


        public function search($search){
            $sql = "SELECT * FROM requerente WHERE nome LIKE ? COLLATE utf8_general_ci";
            $stmt = Model::getConn()->prepare($sql);
            $stmt->bindValue(1,"%{$search}%");
            $stmt->execute();

            if($stmt->rowCount() > 0):
                $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC); 
                return $resultado;

            else:
                return[];
            endif;
        }


    }

?>


<!--



        