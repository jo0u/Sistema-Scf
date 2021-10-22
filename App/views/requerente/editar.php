<div class='row container'> 

<?php
    if(!empty($data['mensagem'])):

        foreach($data['mensagem'] as $m):
                echo "<script>";
                echo $m;
            endforeach;
            echo "</script>";
    endif;


    
?>



<form action="/requerente/editar/<?php echo $data['registros']['id'];?>" method="POST">


<div class="input-field col s6">
    <input id="cpf" type="text" name="cpf" class="validate" value="<?php echo $data['registros']['cpf'];?>" required>
          <label for="last_name">CPF</label>

</div>
     
<div class="input-field col s6">


<!-- TO DO  Criar uma logica no input Pessoa para que ele apareça o nome certo não o value-->
<select name="pessoa" >
      <option value="<?php echo $data['registros']['pessoa'];?>" ><?php  if($data['registros']['pessoa']):
             echo "Fisica";
            else:
                echo "Jurídica";
            endif; ?>
        </option>
      <option value="F">Fisica</option>
      <option value="J">Juridico</option>
    </select>


</div>


<!-- TO DO  Criar uma logica no input sexo para que ele apareça o nome certo não o value-->
<div class="input-field col s6">
    <input id="nome" type="text" name="nome" class="validate" value="<?php echo $data['registros']['nome'];?>" required>
          <label for="last_name">Requerente</label>      
</div>




<div class="input-field col s6">

<select name="sexo">
      <option value="<?php echo $data['registros']['sexo'];?>" ><?php  if($data['registros']['sexo']):
             echo "Feminino";
            else:
                echo "Masculino";
            endif;
        
        
        
        ?></option>
      <option value="M">Masculino</option>
      <option value="F">Feminino</option>
    </select>
</div>


<div class="input-field col s6">
    <input id="profissao" type="text" name="profissao" class="validate" value="<?php echo $data['registros']['profissao'];?>" required>
          <label for="last_name">Profissão</label>

</div>

<div class="input-field col s6">
    <input id="data" type="date" name="data" class="validate" value="<?php echo $data['registros']['dt_nascimento'];?>" required>
          <label>Data de Nascimento</label>      
</div>


<div class="input-field col s6">
    <input id="" type="text" name="nacionalidade" class="validate" value="<?php echo $data['registros']['nacionalidade'];?>" required>
          <label for="last_name">Nacionalidade</label>      
</div>

<div class="input-field col s6">
    <input id="" type="text" name="nmSocial" class="validate" value="<?php echo $data['registros']['nome_social'];?>">
          <label for="last_name">Nome Social</label>      
</div>

<div class="input-field col s6">
    <input id="" type="text" name="rg" class="validate" value="<?php echo $data['registros']['rg'];?>" required> 
          <label for="last_name">RG</label>      
</div>


<div class="input-field col s6">
<select name = "estado" >
      <option value="<?php echo $data['registros']['estado'];?>"><?php echo $data['registros']['estado'];?></option>
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
    <input id="telefone" type="text" name="telefone" class="validate" value="<?php echo $data['registros']['telefone'];?>" required>
          <label for="last_name">Telefone</label>   

    </div>

    <div class="input-field col s6">
<select name="estCivil" >
      <option value="<?php echo $data['registros']['est_civil'];?>"> <?php echo $data['registros']['est_civil'];?></option>
      <option value="Solteiro">Solteiro(a)</option>
    <option value="Casado">Casado(a)</option>
    <option value="Divorciado">Divorciado(a)</option>
    <option value="Uniao Estavel">União Estavél </option>
    <option value="Viuvo">Viúvo(a)</option>
</select>
</div>
    <div class="input-field col s6">
    <input id="nomePai" type="text" name="nomePai" class="validate" value="<?php echo $data['registros']['nm_pai'];?>" required>
          <label for="last_name">Nome do Pai</label>      
</div>


<div class="input-field col s6">
    <input id="nomeMae" type="text" name="nomeMae" class="validate" value="<?php echo $data['registros']['nm_mae'];?>" required>
          <label for="last_name">Nome da Mãe</label>      
</div>


<div class="input-field col s6">
    <input id="" type="text" name="endereco" class="validate" value="<?php echo $data['registros']['endereco'];?>" required>
          <label for="last_name">Endereço</label>      
</div>


<div class="input-field col s6">
    <input id="" type="email" name="email" class="validate" value="<?php echo $data['registros']['email'];?>" required>
          <label for="last_name">E-mail</label>      
</div>

<button name="atualizar" class="waves-effect waves-light btn modal-trigger green" style="float:right"> Atualizar</button>


</form>
<script type="text/javascript">
$("#cpf").mask("000.000.000-00");
$("#telefone").mask("(00)0 0000-0000");

</script>











</div>