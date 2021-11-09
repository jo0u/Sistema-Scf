<div class ='row container'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<h2>Cadastrar Comunidade</h2>

<?php
    if(!empty($data['mensagem'])):
        
        foreach($data['mensagem'] as $m):
           echo "<script>";
            echo $m;
        endforeach;
        echo "</script>";
    endif;
?>

<form action="/requerente/cadastrar" method="POST" id="formulario">




<div class="input-field col s6">
    <input id="municipio" type="text" name="municipio" class="validate" required>
          <label for="last_name">Municipio</label>

</div>

<div class="input-field col s6">
    <input id="nmComunidade" type="text" name="nmComunidade" class="validate" required>
          <label for="last_name">Nome da Comunidade</label>

</div>

<div class="input-field col s6">
    <input id="" type="text" name="" class="validate" required>
          <label for="last_name">Distrito Sede</label>

</div>

<div class="input-field col s6">
    <input id="" type="text" name="" class="validate" required>
          <label for="last_name">Responsável</label>

</div>

<div class="input-field col s6">
    <input id="" type="text" name="" class="validate" required>
          <label for="last_name">Responsável da CDA</label>

</div>


</div>