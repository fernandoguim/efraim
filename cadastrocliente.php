<?PHP include 'painel.php';
require 'bdLogin/select.class.php';

$d = new selectoi();
 

?>
<title>Cadastro de Cliente </title>
                
                <!-- BEGIN PAGE BAR -->
                <div class="page-bar">
                <ul class="page-breadcrumb">
                <li>
                <a href="dash">Home</a>
                <i class="fa fa-circle"></i>
                </li>
                <li>
                <span>Cadastro</span>
                </li>
                </ul>
                <div class="page-toolbar">
                <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                <i class="icon-calendar"></i>&nbsp;
                <span class="thin uppercase hidden-xs"></span>&nbsp;
                <i class="fa fa-angle-down"></i>
                </div>
                </div>
                </div>
                <br>
                <div class="portlet box green">
                <div class="portlet-title">
                <div class="caption">
                <i class="fa fa-user-plus"></i> Cadastro de Cliente </div>
                <div class="tools">
                <a href="" class="collapse" data-original-title="" title=""> </a>
                </div>
                </div>
                <div class="portlet-body form">
                <form class="form-horizontal" role="form" method="post" name="registro" id="registro">
                <div class="form-body">
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>CLIENTE:</strong></label>
                <div class="col-md-7">
                <input type="text" class="form-control" placeholder="Nome Cliente" name="cliente" id="cliente" value="<?php echo $REQUEST['cliente']?>" required> </div>
                </div>
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>CPF/CNPJ:</strong></label>
                <div class="col-md-3">
                <input type="number" class="form-control" placeholder="CPF/CNPJ, apenas numeros" name="cpf" id="cpf" value="<?php echo $REQUEST['cpf']?>" required> 
                </div>
                <label class="col-md-2 control-label"><strong>RG:</strong></label>
                <div class="col-md-2">
                <input type="text" class="form-control" placeholder="RG" name="rg" id="rg" value="<?php echo $REQUEST['rg']?>"> 
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>CONTATO 1:</strong></label>
                <div class="col-md-3">
                <input type="text" class="form-control" placeholder="whatsapp DDD+TELEFONE" name="contato1" id="contato1" maxlength="11" value="<?php echo $REQUEST['contato1']?>" required> 
                </div>
                <label class="col-md-2 control-label"><strong>CONTATO 2:</strong></label>
                <div class="col-md-3">
                <input type="text" class="form-control" placeholder="CONTATO" name="contato2" id="contato2" maxlength="11" value="<?php echo $REQUEST['contato2']?>"> 
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>EMAIL</strong></label>
                <div class="col-md-3">
                <input type="text" class="form-control" placeholder="EMAIL" name="email" id="email" value="<?php echo $REQUEST['email']?>"> 
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>ENDEREÇO:</strong></label>
                <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Endereço" name="endereco" id="endereco" value="<?php echo $REQUEST['endereco']?>">
                </div>
                <label class="col-md-2 control-label"><strong> Nº:</strong></label>
                <div class="col-md-2">
                <input type="text" class="form-control" placeholder="Numero Casa" name="NUM" id="NUM" value="<?php echo $REQUEST['NUM']?>" >
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>CEP:</strong></label>
                <div class="col-md-3">
                <input type="text" class="form-control" placeholder="CEP" name="CEP" id="CEP" value="<?php echo $REQUEST['CEP']?>">
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>BAIRRO:</strong></label>
                <div class="col-md-3">
                <input type="text" class="form-control" placeholder="BAIRRO" name="BAIRRO" id="BAIRRO" value="<?php echo $REQUEST['BAIRRO']?>">
                </div>
                <label class="col-md-2 control-label"><strong>CIDADE:</strong></label>
                <div class="col-md-3">
                <input type="text" class="form-control" placeholder="CIDADE" name="CIDADE" id="CIDADE" value="<?php echo $REQUEST['CIDADE']?>">
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>RESPONSAVEL:</strong></label>
                <div class="col-md-4">
                <input type="hidden" class="form-control" name="vendedor" id="vendedor" value="<?php echo $_SESSION['Nome']?>" > <input type="text" class="form-control" name="vendedorx" id="vendedorx" value="<?php echo $_SESSION['Nome']?>" disabled>
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>OBSERVAÇÃO:</strong></label>
                <div class="col-md-5">
                <textarea name="obs" id="obs" cols="88" rows="5" value=""><?php echo $REQUEST['obs']?></textarea>
                </div>
                </div>
                <div class="form-group">
                 
              
                </div>
                <?php 
                 if ($_SESSION['parceiro'] == "" ){
	
                 echo  "<script>alert('Você deve logar no Sistema para prosseguir com o registro, Caso contrario, registro sem vendedor!');</script>"; 
                  	
                    }
                $l = new selectoi();
                if ($_POST['cliente']!="") {
                $cliente= addslashes($_POST['cliente']);
                $cpf= addslashes($_POST['cpf']);
                $contato1= addslashes($_POST['contato1']);
                $contato2= addslashes($_POST['contato2']);
                $rg= addslashes($_POST['rg']);
                $vendedor= addslashes($_POST['vendedor']);
                $email= addslashes($_POST['email']);
                $logradouro = addslashes($_POST['endereco']);
                $numfachada = addslashes($_POST['NUM']);
                $cep = addslashes($_POST['CEP']);
                $bairro = addslashes($_POST['BAIRRO']);
                $cidade = addslashes($_POST['CIDADE']);
                $obs = addslashes($_POST['obs']);
                
                $l->registrocliente($cliente,$cpf,$contato1,$contato2,$rg,$vendedor,$email,$logradouro,$numfachada,$cep,$bairro,$cidade,$obs);// está enviando para a classe 
                
                
                $msgg= "<div class='alert alert-success'>Cadastro realizado com sucesso!!!</div>";
                ?>
                
                <script>
                window.setTimeout(function() {
                ;
                }, 2000);
                </script>
                <?php // depois de 3 segundo redireciona
                echo $msgg; //posta a ensagem
                }
                ?>
                
                </div>
                <div class="form-actions right1">
                <button type="submit" class="btn default">Limpar</button>
                <button type="submit" class="btn green" name="regvenda" id= "regvenda">Registrar</button>
                </div>
                </form>
                </div>
                </div>
                <?PHP include 'fechacodigo.php' ?> 
