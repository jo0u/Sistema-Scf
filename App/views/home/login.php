<?php
    if(!empty($data['mensagem'])):
        
        foreach($data['mensagem'] as $m):
            echo $m."<br>";
        endforeach;
    endif;
?>

<div class = "row container">
<h1>Fazer login</h1>

<form action="/home/login" method="POST">

<div class="row">
        <div class="input-field col s12">
          <input id="usuario" name="usuario" type="text" class="validate">
          <label for="usuario">Usuario</label>
        </div>


        <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="senha" class="validate">
          <label for="password">Password</label>
        </div>

        <button class="waves-effect waves-light btn" name="entrar">Entrar </button>

</form>
</div>