<?php 

namespace App;
use App\Core\Model;
    

class Auth{
    public static function Login($usuario,$senha){
        $sql = "SELECT * FROM user WHERE usuario = ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1,$usuario);
        $stmt->execute();

        if($stmt->rowCount() >= 1):
           $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
            if(password_verify($senha,$resultado['senha'])):
                $_SESSION['logado'] = true;
                $_SESSION['userId'] = $resultado['id'];
                $_SESSION['userNome'] = $resultado['nome']; 
                $_SESSION['level'] = $resultado['level']; 
           header('Location: /home/index');
        else:
            return "Conta inválida";
        endif;
          
           return "encontrou";
       else:
           return "Conta inválido";
    endif;
    }


    public static function Logout(){
        session_destroy();
        header('Location: /home/login');
    }

    public static function checkLogin(){
        if(!isset($_SESSION['logado'])):
            header('Location: /home/login');
            die;
        endif;
    }

    public static function checkLoginAdmin(){
        if($_SESSION['level'] != 2):
            header('Location: /home/index');
            die;
        endif;
    }

}


















/* Login por email*/

   /*  public static function Login($email,$senha){
         $sql = "SELECT * FROM users WHERE email = ?";
         $stmt = Model::getConn()->prepare($sql);
         $stmt->bindValue(1,$email);
         $stmt->execute();

         if($stmt->rowCount() >= 1):
            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
             if(password_verify($senha,$resultado['senha'])):
                 $_SESSION['logado'] = true;
                 $_SESSION['userId'] = $resultado['id'];
                 $_SESSION['userNome'] = $resultado['nome']; 
                 $_SESSION['level'] = $resultado['level']; 
            header('Location: /home/index');
         else:
             return "Conta inválida";
         endif;
           
            return "encontrou";
        else:
            return "Conta inválido";
     endif;
     }


*/


?>