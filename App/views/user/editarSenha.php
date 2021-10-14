<div class = "row container">
<h1>Edição do Funcionário</h1>

<?php
    if(!empty($data['mensagem'])):

        foreach($data['mensagem'] as $m):
                echo "<script>";
                echo $m;
            endforeach;
            echo "</script>";
    endif;


    
?>

<form action="/user/editarSenha/<?php echo $data['registros']['id'];?>" method="POST">

Nome: <input type="text" name="nome" value="<?php echo $data['registros']['nome'];?>" disabled="true"><br><br>
    Usuario: <input type="text" name="usuario" value="<?php echo $data['registros']['usuario'];?>"  disabled="true"><br><br>
    Perfil: <input type="text" value="<?php echo $data['registros']['level'];?>" name="level"  disabled="true"><br><br>
      Senha: <input type="password" name="senha"  value="<?php echo $data['registros']['senha'];?>" ><br><br>
   
    <br>
    <button name="atualizar" class ='waves-effect waves-light btn modal-trigger black'> Atualizar</button>


</form>
</div>