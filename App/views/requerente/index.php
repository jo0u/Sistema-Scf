<nav class ='brown lighten-4'>
    <div class="nav-wrapper">
      <form method="POST" action="/requerente/buscar">
        <div class="input-field">
          <input id="search" name='buscar' type="search" placeholder="Faça a busca do usuário aqui">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
  </nav>

  <br><br><br>

  <?php
    if(!empty($data['mensagem'])):
        
        foreach($data['mensagem'] as $m):
           echo "<script>";
            echo $m;
        endforeach;
        echo "</script>";
    endif;
?>


  <a href='/requerente/cadastrar' class="btn-floating btn-large waves-effect waves-light green" style="margin-left: 50px;" ><i class="material-icons" >add</i></a>



  <div class = "row container"> 
  <div class = "card-panel">
<table  border = '1px' ><tr> <th> Requerente </th> <th> Pessoa </th><th> CPF </th> <th>Est.Civil</th>  <th> Ações </th></tr><br><br>


<?php
    foreach ($data['registros'] as $requerente):
?>

<?php
    echo "<tr><th>".$requerente['nome'];
   echo "<th>".$requerente['pessoa'];
   echo "<th>".$requerente['cpf'];
   echo "<th>".$requerente['est_civil'];
  
?>
 <th> <a class ='waves-effect waves-light btn modal-trigger  green accent-3' href="/requerente/ver/<?php echo $requerente['id'];?>">Consultar</a>
 <th> <a class ='waves-effect waves-light btn modal-trigger orange' href="/requerente/editar/<?php echo $requerente['id'];?>">Editar</a>
 
    <?php
         if($_SESSION['level'] >= 2):
     ?>
     <a class ='waves-effect waves-light btn modal-trigger red' href="/requerente/excluir/<?php echo $requerente['id'];?>">Excluir</a>
    <?php
        endif;
    ?>
    </th>

<?php
    endforeach;
?>
</table>
    </div>
    </div>