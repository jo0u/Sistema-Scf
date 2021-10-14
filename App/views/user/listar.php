<nav>
    <div class="nav-wrapper">
      <form method="POST" action="/user/buscar">
        <div class="input-field">
          <input id="search" name='buscar' type="search" placeholder="Faça a busca do usuário aqui">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>

<br>

<?php
    if(!empty($data['mensagem'])):
        
        foreach($data['mensagem'] as $m):
           echo "<script>";
            echo $m;
        endforeach;
        echo "</script>";
    endif;
?>





<div class = "row container"> 
<table  border = '1px' ><tr> <th> Nome </th> <th> Usuario </th><th> Perfil </th> <th>Ações</th> </tr><br><br>
<?php

   foreach ($data['registros'] as $user):
?>

 <?php  echo "<tr><th>".$user['nome'];?>
<?php
   echo  "<th>".$user['usuario'];
?>

     <th><?php echo $user['level'];?>
     
     <th> <a class ='waves-effect waves-light btn modal-trigger orange' href="/user/editar/<?php echo $user['id'];?>">Editar</a>
     
     <a class ='waves-effect waves-light btn modal-trigger red' href="/user/excluir/<?php
         echo $user['id'];
     ?>">Excluir</a>
    <th> <a class ='waves-effect waves-light btn modal-trigger black' href="/user/editarSenha/<?php echo $user['id'];?>">Editar Senha</a> 
    </th>
     


<?php endforeach; ?>
   </div>