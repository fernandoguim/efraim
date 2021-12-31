<?PHP include 'painel.php';
require 'bdLogin/select.class.php';

$d = new selectoi();
 

?>
<script src="main.js"></script>
<title>Cadastro de Orçamento </title>
                
                <!-- BEGIN PAGE BAR -->
                <div class="page-bar">
                <ul class="page-breadcrumb">
                <li>
                <a href="dash">Home</a>
                <i class="fa fa-circle"></i>
                </li>
                <li>
                <span>Orçamento</span>
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
                <i class="fa fa-user-plus"></i> Cadastro de Orçamento </div>
                <div class="tools">
                <a href="" class="collapse" data-original-title="" title=""> </a>
                </div>
                </div>
                <div class="portlet-body form">
                <form class="form-horizontal" role="form" method="post" name="registro" id="registro">
                <div class="form-body">
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>CLIENTE:</strong></label>
                <div class="col-md-3">
                <select class="form-control input-sm select2-multiple" name="cliente" id="cliente">
                <option>Selecionar Cliente</option>
                <?php   	
                $d = new selectoi();                        
                $sqlcliente= $d->buscarclientes();//envia para a function
                foreach ($sqlcliente as $cliente) :?>
                <option value="<?php echo strtoupper($cliente['cliente']) ?>"><?php echo strtoupper($cliente['cliente']);?></option>
                <?php endforeach; ?> 
                </select>
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>ORÇAMENTO</strong></label>
                <div class="col-md-5">
                <input type="text" class="form-control" placeholder="Descrição orçamento" name="orcamento" id="orcamento" required> 
                </div>
                 
                </div>
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>PROPOSTA:</strong></label>
                <div class="col-md-3">
                <input type="text" class="form-control" placeholder="proposta" name="proposta" id="proposta" required> 
                </div>
                </div>
                <hr>
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>DEMANDA:</strong></label>
                <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Descrição do Demanda" name="servico" id="servico" required> 
                </div>
                </div>
                 <div class="form-group">
                <label class="col-md-2 control-label"><strong>SERVIÇO:</strong></label>
                <div class="col-md-3">
                 <textarea name="servico" id="servico" cols="88" rows="5"></textarea>  
                 </div>
                </div>
                 <div class="form-group">
                <label class="col-md-2 control-label"><strong>ÁREA DE PROJEÇÃO:</strong></label>
                <div class="col-md-4">
                 <input type="text" class="form-control" placeholder="ÁREA DE PROJEÇÃO" name="areaprojecao" id="areaprojecao" required> 
                 </div>
                </div>
                
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>TELHA:</strong></label>
                <div class="col-md-4">
                 <textarea name="telha" id="telha" cols="88" rows="5"></textarea>  
                 </div>
                </div>
                
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>CALHAS:</strong></label>
                <div class="col-md-4">
               <textarea name="calhas" id="calhas" cols="88" rows="5"></textarea>  
                </div>
                </div>
                
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>PINTURAS:</strong></label>
                <div class="col-md-4">
                <textarea name="pinturas" id="pinturas" cols="88" rows="5"></textarea>  
                </div>
                </div>
                
                <hr>
                 
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
                
                #$l->registrocliente($cliente,$cpf,$contato1,$contato2,$rg,$vendedor,$email,$logradouro,$numfachada,$cep,$bairro,$cidade,$obs);// está enviando para a classe 
                
                
                $msgg= "<div class='alert alert-success'>Cadastro realizado com sucesso!!!</div>";
                ?>
                
                <script>
                window.setTimeout(function() {
                   if(confirm("Deseja cadastrar proxima demanda do orçamento?")){
                   window.location = 'cadastroorcamento2.php?cliente=<?php echo $_REQUEST['cliente']?>';
                  }
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
