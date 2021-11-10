<?php
    
    use App\Core\Model;

    class Comunidades extends Model{

        public $municipios;
        public $nmComunidade;
        public $distSede;
        public $responsavel;
        public $responsavelCda;
        

        public function getAll(){
            $sql = "SELECT * FROM comunidade";
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
            $sql = "SELECT * FROM comunidade WHERE id = ?";
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

        public function save(){
            $sql = "INSERT INTO comunidade(municipio,nome_comunidade,dist_sede,responsavel,responsavel_cda)VALUES(?,?,?,?,?)";
       
           $stmt = Model::getConn()->prepare($sql);
           $stmt->bindValue(1,$this->municipios);
           $stmt->bindValue(2,$this->nmComunidade);
           $stmt->bindValue(3,$this->distSede);
           $stmt->bindValue(4,$this->responsavel);
           $stmt->bindValue(5,$this->responsavelCda);

            if($stmt->execute()):
                return "M.toast({html: 'Cadastrado com sucesso!', classes: 'rounded, green'});";
            else:
                return "M.toast({html: 'Falha ao cadastrar', classes: 'rounded ,red'});";

            endif;
       
       
        }


    }


?>