<div class = 'row container'>
<h1>Cadastrar usuário</h1>

<?php
    if(!empty($data['mensagem'])):
        
        foreach($data['mensagem'] as $m):
           echo "<script>";
            echo $m;
        endforeach;
        echo "</script>";
    endif;
?>



<form action="/user/cadastrar" method="post">
    Nome: <input type="text" name="nome"><br><br>
    Usuario: <input type="text" name="usuario"><br><br>
   
    Senha: <input type="password" name="senha"><br><br>
   
    <br><br>
    <button name="cadastro"> Cadastrar</button>
</form>
</div>