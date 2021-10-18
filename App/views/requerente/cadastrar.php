<div class ='row container'>

<h2>Cadastrar Requerente</h2>

<form action="">




<div class="input-field col s6">
    <input id="cpf" type="text" name="cpf" class="validate">
          <label for="last_name">CPF</label>

</div>
     
<div class="input-field col s6">

<select name="pessoa">
      <option value="" disabled selected>Pessoa</option>
      <option value="F">Fisica</option>
      <option value="J">Juridico</option>
    </select>


</div>



<div class="input-field col s6">
    <input id="requerente" type="text" name="requerente" class="validate">
          <label for="last_name">Requerente</label>      
</div>




<div class="input-field col s6">

<select name="Sexo">
      <option value="" disabled selected>Sexo</option>
      <option value="M">Masculino</option>
      <option value="F">Feminino</option>
    </select>
</div>


<div class="input-field col s6">
    <input id="profissao" type="text" name="profissao" class="validate">
          <label for="last_name">Profissão</label>

</div>

<div class="input-field col s6">
    <input id="data" type="date" name="data" class="validate">
          <label>Data</label>      
</div>


<div class="input-field col s6">
    <input id="" type="text" name="" class="validate">
          <label for="last_name">Nacionalidade</label>      
</div>

<div class="input-field col s6">
    <input id="" type="text" name="" class="validate">
          <label for="last_name">Nome Social</label>      
</div>

<div class="input-field col s6">
    <input id="" type="text" name="" class="validate">
          <label for="last_name">RG</label>      
</div>


<div class="input-field col s6">
<select>
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
    <input id="telefone" type="text" name="telefone" class="validate">
          <label for="last_name">Telefone</label>   

    </div>

    <div class="input-field col s6">
<select>
      <option value="" disabled selected>Est.Civil</option>
      <option value="solteiro">Solteiro(a)</option>
    <option value="casado">Casado(a)</option>
    <option value="divorciado">Divorciado(a)</option>
    <option value="uniaoEstavel">União Estavél </option>
    <option value="viuvo">Viúvo(a)</option>
</select>
</div>
    <div class="input-field col s6">
    <input id="nomePai" type="text" name="nomePai" class="validate">
          <label for="last_name">Nome do Pai</label>      
</div>


<div class="input-field col s6">
    <input id="nomeMae" type="text" name="nomeMae" class="validate">
          <label for="last_name">Nome da Mãe</label>      
</div>


<div class="input-field col s6">
    <input id="" type="text" name="" class="validate">
          <label for="last_name">Endereço</label>      
</div>


<div class="input-field col s6">
    <input id="" type="email" name="" class="validate">
          <label for="last_name">E-mail</label>      
</div>

<button name="cadastro" class="waves-effect waves-light btn modal-trigger green" style="float:right"> Cadastrar</button>


</form>
<script type="text/javascript">
$("#cpf").mask("000.000.000-00");
$("#telefone").mask("(00)0 0000-0000");

</script>