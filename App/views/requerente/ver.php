<div class= 'row container'>


<h3 style="text-align:center"><?php echo $data['nome']; ?></h3>

<div class="row" style="margin-top:10px; text-align:center;">
<div class="col s4">
<h6>  CPF<br> <?php echo $data['cpf']; ?></h6>
</div>        
<div class="col s4">
<h6>  Profissão<br> <?php echo $data['profissao']; ?></h6>
</div>
<div class="col s4">
<h6>  Pessoa<br> <?php if($data['pessoa'] == 'F'):
                echo "Fisica";
                else:
                    echo "Jurídica";
                endif; ?></h6>
<br>
</div>




<div class="col s4">
<h6>  RG<br> <?php echo $data['rg']; ?></h6>
</div>        
<div class="col s4">
<h6>  Nacionalidade<br> <?php echo $data['nacionalidade']; ?></h6>
</div>
<div class="col s4">
<h6>  Sexo<br> <?php if($data['sexo'] == 'F'):
                echo "Feminino";
                else:
                    echo "Masculino";
                endif;
    
    ?></h6>
<br>
</div>

<div class="col s4">
<h6>  Nome do Pai<br> <?php echo $data['nm_pai']; ?></h6>
</div>        
<div class="col s4">
<h6>  Telefone<br> <?php echo $data['telefone']; ?></h6>
</div>
<div class="col s4">
<h6>  Estado Civil<br> <?php echo $data['est_civil']; ?></h6>
<br>
</div>


<div class="col s4">
<h6>  Nome da Mãe<br> <?php echo $data['nm_mae']; ?></h6>
</div>        
<div class="col s4">
<h6>  Endereço<br> <?php echo $data['endereco']; ?></h6>
</div>
<div class="col s4">
<h6>  Data de Nascimento<br> <?php 
$originalDate = $data['dt_nascimento'];
$newDate = date("d-m-Y",strtotime($originalDate));


echo $newDate; ?></h6>
<br>
</div>
<div class="col s4">
<h6>  Nome Social<br> <?php echo $data['nome_social']; ?></h6>
</div>        
<div class="col s4">
<h6 style="text-align: center;">  Email<br> <?php echo $data['email']; ?></h6>
</div>
<div class="col s4">
<h6>  Estado<br> <?php echo $data['estado']; ?></h6>
<br>
</div>

</div>

<th> <a class ='waves-effect waves-light btn modal-trigger green' href="/requerente/index">Voltar</a>
<th> <a class ='waves-effect waves-light btn modal-trigger orange' href="/requerente/editar/<?php echo $data['id'];?>">Editar</a>

</div>