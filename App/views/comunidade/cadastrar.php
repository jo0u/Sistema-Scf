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

<form action="/comunidade/cadastrar" method="POST" id="formulario">

<div class="input-field col s6">

<select name="municipios" >
      <option value="" disabled selected>Municipio</option>
        
    


    </select>


</div>



<div class="input-field col s6">
    <input id="municipio" type="text" name="municipio" class="validate" required>
          <label for="last_name">Municipio</label>

</div>

<div class="input-field col s6">
    <input id="nmComunidade" type="text" name="nmComunidade" class="validate" required>
          <label for="last_name">Nome da Comunidade</label>

</div>

<div class="input-field col s6">
    <input id="destrito" type="text" name="destrito" class="validate" required>
          <label for="last_name">Distrito Sede</label>

</div>

<div class="input-field col s6">
    <input id="responsavel" type="text" name="responsavel" class="validate" required>
          <label for="last_name">Responsável</label>

</div>

<div class="input-field col s6">
    <input id="responsavelCda" type="text" name="responsavelCda" class="validate" required>
          <label for="last_name">Responsável da CDA</label>

</div>
<button name="cadastrar" class="waves-effect waves-light btn modal-trigger green" style="float:right"> Cadastrar</button>


</div>
</form>