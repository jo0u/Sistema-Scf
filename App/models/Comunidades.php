<?php
    
    use App\Core\Model;

    class Comunidades extends Model{

        public $municipio;
        public $comunidade;
        public $distSede;
        public $responsavel;
        public $respCda;
        

        public function getAll(){
            $sql = "SELECT * FROM comunidades";
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
            $sql = "SELECT * FROM comunidades WHERE id = ?";
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


    }


?>