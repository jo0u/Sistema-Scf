<?php
    use App\Core\Model;

    class Users extends Model
    {

        public $nome;
        public $usuario;
        public $level;
        public $senha;

        public function save(){

            $sql = "INSERT INTO user(nome,usuario,senha) VALUES (?,?,?)";
            $stmt = Model::getConn()->prepare($sql);
            $stmt->bindValue(1,$this->nome);
            $stmt->bindValue(2,$this->usuario);
            $stmt->bindValue(3,$this->senha);

            if($stmt->execute()):
                return "M.toast({html: 'Atualizado com sucesso!', classes: 'rounded, green'});";
            else:
                return "M.toast({html: 'Falha ao atualizar', classes: 'rounded ,red'});";
            endif;


        }


        public function update($id){

            $sql = "UPDATE user SET nome = ? , usuario = ? , `level`= ? WHERE id =? ";
            $stmt = Model::getConn()->prepare($sql); 
            $stmt->bindValue(1,$this->nome);
            $stmt->bindValue(2,$this->usuario);
            $stmt->bindValue(3,$this->level);
            $stmt->bindValue(4,$id);

            if($stmt->execute()):
                return "M.toast({html: 'Atualizado com sucesso!', classes: 'rounded, green'});";
            else:
                return "M.toast({html: 'Falha ao atualizar', classes: 'rounded ,red'});";
            endif;
        }



        public function updatePassowrd($id){

            $sql = "UPDATE user SET senha = ? WHERE id =? ";
            $stmt = Model::getConn()->prepare($sql); 
            
            $stmt->bindValue(1,$this->senha);
            $stmt->bindValue(2,$id);

            if($stmt->execute()):
                return "M.toast({html: 'Atualizado com sucesso!', classes: 'rounded, green'});";
            else:
                return "M.toast({html: 'Falha ao atualizar', classes: 'rounded ,red'});";
            endif;
        }



        public function getAll(){

            $sql = "SELECT * FROM user";
            $stmt = Model::getConn()->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0):
                    $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                    return $resultado; 

            else:
                return[];

            endif;

        }


        public function findId($id){
            $sql = "SELECT * FROM user WHERE id = ?";
            $stmt = Model::getConn()->prepare($sql);
            $stmt->bindValue(1,$id);
            $stmt->execute();

            if($stmt->rowCount() > 0):
                $resultado = $stmt->fetch(\PDO::FETCH_ASSOC); 
                return $resultado;

            else:
                return[];
            endif;
        }

        


        public function delete($id){
            $sql = "DELETE FROM user WHERE id = ?";
            $stmt = Model::getConn()->prepare($sql);
            $stmt->bindValue(1,$id);
            if($stmt->execute()):
                return "M.toast({html: 'Excluido com sucesso!', classes: 'rounded, green'});";
            else:
                return "M.toast({html: 'Falha ao Excluir', classes: 'rounded ,red'});";
            endif;
        }


        public function search($search){
            $sql = "SELECT * FROM user WHERE nome LIKE ? COLLATE utf8_general_ci";
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