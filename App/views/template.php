<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Mvc</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



</head>
<body>


   
    <!--
    <img src="<?php echo URL_BASE;?>images/mvc.png";>
    -->

    <nav class = "blue">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo">SCF</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/">Tarefas</a></li>
        <?php
        if(isset($_SESSION['logado'])):
    ?>
    
                <li> <a href="/notes/criar">Criar Tarefa</a></li>  
                
                
               <?php
                  if($_SESSION['level'] == 2 ):
               ?>
<!---------------------------------------------------------------------------------------------- Bloco de Funcionario------------------------------------------------------------------------->
                <li> <a href="/users/cadastrar" hidden='true'>Cadastrar usuário</a></li> 
                <li><a class="dropdown-trigger" href="" data-target="dropdown1">Funcionario<i class="material-icons right">arrow_drop_down</i></a></li>
                <ul id="dropdown1" class="dropdown-content">
  <div class = "nav-wrapper container">
  <li><a href="/user/cadastrar">Cadastrar</a></li>
  <li class="divider"></li>
  <li><a href="/user/listar">Listar</a></li>
  <li class="divider"></li>
  
  
</ul>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
      




               <?php
                   endif;
               ?>
             
              
                  
            
                  
               




               
             <?php endif; ?>

    <?php
        if(!isset($_SESSION['logado'])):
        
    ?>
    
            

             <li> <a href="/home/login">Login</a></li> 
    <?php else: ?>  
              Olá <?php echo $_SESSION['userNome'];  ?>
             <li>  <a href="/home/logout">Logout</a></li>

    <?php endif; ?>

      </ul>
    </div>
  </nav>
  <?php echo var_dump($_SESSION['level']); ?>




  <!-- <button><//?php// echo var_dump($_SESSION['level'])?></button> -->
    
    

    


    <?php
        require_once '../App/views/'.$view.'.php';
    ?>
    <script>
        M.AutoInit(); // incia o javascripiti automaticamente 

    </script>

</body>

</html>