<div class ='row container'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<h2>Cadastrar Requerente</h2>

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
    <input id="cpf" type="text" name="cpf" class="validate" maxlength="14" required>
          <label for="last_name">CPF</label>

</div>
     
<div class="input-field col s6">

<select name="pessoa" required>
      <option value="" disabled selected>Pessoa</option>
      <option value="F">Fisica</option>
      <option value="J">Juridico</option>
    </select>


</div>



<div class="input-field col s6">
    <input id="nome" type="text" name="nome" class="validate" required>
          <label for="last_name">Requerente</label>      
</div>

<div class="input-field col s6">

<select name="sexo" required>
      <option value="" disabled selected>Sexo</option>
      <option value="M">Masculino</option>
      <option value="F">Feminino</option>
    </select>
</div>






<div class="input-field col s6">
    <input id="profissao" type="text" name="profissao" class="validate" required>
          <label for="last_name">Profissão</label>

</div>

<div class="input-field col s6">
    <input id="data" type="date" name="data" class="validate" required>
          <label>Data de Nascimento</label>      
</div>


<div class="input-field col s6">
    <input id="" type="text" name="nacionalidade" class="validate" required>
          <label for="last_name">Nacionalidade</label>      
</div>

<div class="input-field col s6">
    <input id="" type="text" name="nmSocial" class="validate">
          <label for="last_name">Nome Social</label>      
</div>

<div class="input-field col s6">
    <input id="" type="text" name="rg" class="validate" required> 
          <label for="last_name">RG</label>      
</div>


<div class="input-field col s6">
<select name = "estado" required>
      <option value="" disabled selected>Selecione o Estado</option>
      <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espirito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MT">Mato Grosso</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
    </select>
    </div>


    <div class="input-field col s6">
    <input id="telefone" type="text" name="telefone"  class="validate" maxlength="15" required>
          <label for="last_name">Telefone</label>   

    </div>

    <div class="input-field col s6">
<select name="estCivil" id="list" onchange="getSelectValue();" required>
      <option value="" disabled selected>Est.Civil</option>
      <option value="Solteiro">Solteiro(a)</option>
    <option value="Casado">Casado(a)</option>
    <option value="Divorciado">Divorciado(a)</option>
    <option value="União Estavel">União Estavél </option>
    <option value="Viuvo">Viúvo(a)</option>
   
</select>
</div>

    <div class="input-field col s6">
    <input id="nomePai" type="text" name="nomePai" class="validate" required>
          <label for="last_name">Nome do Pai</label>      
</div>


<div class="input-field col s6">
    <input id="nomeMae" type="text" name="nomeMae" class="validate" required>
          <label for="last_name">Nome da Mãe</label>      
</div>


<div class="input-field col s6">
    <input id="" type="text" name="endereco" class="validate" required>
          <label for="last_name">Endereço</label>      
</div>


<div class="input-field col s6">
    <input id="" type="email" name="email" class="validate" required>
          <label for="last_name">E-mail</label>      
</div>






<div id="container" class="card-panel" style="display: none;">



<div class="input-field col s6">
    <input id="nomeConjugue" type="text" name="nomeConjugue" class="validate" >
          <label for="last_name">Nome do Cônjugue</label>      
</div>

<div class="input-field col s6">
    <input id="cpfConjugue" type="text" name="cpfConjugue" class="validate" >
          <label for="last_name">CPF</label>

</div>

<div class="input-field col s6">
    <input id="" type="text" name="rgConjugue" class="validate" > 
          <label for="last_name">RG</label>      
</div>


<div class="input-field col s6">
<select name = "estadoConjugue" >
      <option value="">Selecione o Estado</option>
      <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espirito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MT">Mato Grosso</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
    </select>
    </div>

    





</div>


<button name="cadastrar" class="waves-effect waves-light btn modal-trigger green" style="float:right"> Cadastrar</button>


</form>







<script>
// biblioteca de mascara em javascript
// mascara de cpf
new Cleave('#cpf', {
blocks: [3, 3, 3, 2],
delimiters: ['.', '.', '-'],
numericOnly: true
});


//mascara de telefone
new Cleave('#telefone', {
blocks: [0, 2, 5, 4],
delimiters: ['(',')', '-'],
numericOnly: true
});
//*************************************** */

        // função que faz aparece novos campos para se a pessoa for casada

    function getSelectValue(){
        var setSelectValue = document.getElementById("list").value;
           if((setSelectValue === "Casado") ){
            if(container.style.display === "none"){
        container.style.display = "block";
            }else{
                container.style.display = "block";
            }
            

           }else{
               
               container.style.display = "none";
           }

    }

//mascara cpf


// mascara do telefone

   


  
</script>





