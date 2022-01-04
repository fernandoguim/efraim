<?PHP include 'painel.php';
 

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
               
                </div>
                </div>
                <br>
                
                 <?php if($_REQUEST['id'] != "2") {?>
                
                <div class="portlet box green">
                <div class="portlet-title">
                <div class="caption">
                <i class="fa fa-user-plus"></i> Cadastro de Orçamento </div>
                <div class="tools">
                <a href="" class="collapse" data-original-title="" title=""> </a>
                </div>
                </div>
                <div class="portlet-body form">
                <form class="form-horizontal" role="form" method="post" name="registro" id="registro" action="cadastroorcamento">
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
                <input type="hidden" class="form-control" name="id" id="id" value = "2">
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
                <input type="text" class="form-control" placeholder="Descrição do Demanda" name="demanda" id="demanda" required> 
                </div>
                </div>
                 <div class="form-group">
                <label class="col-md-2 control-label"><strong>SERVIÇO:</strong></label>
                <div class="col-md-3">
                 <textarea name="servico" id="servico" cols="88" rows="5" required></textarea>  
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
                 <textarea name="telha" id="telha" cols="88" rows="5" required></textarea>  
                 </div>
                </div>
                
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>CALHAS:</strong></label>
                <div class="col-md-4">
               <textarea name="calhas" id="calhas" cols="88" rows="5" required></textarea>  
                </div>
                </div>
                
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>PINTURAS:</strong></label>
                <div class="col-md-4">
                <textarea name="pinturas" id="pinturas" cols="88" rows="5" required></textarea>  
                </div>
                </div>
                
                <hr>
                 
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>RESPONSAVEL:</strong></label>
                <div class="col-md-4">
                <input type="hidden" class="form-control" name="responsavel" id="responsavel" value="<?php echo $_SESSION['Nome']?>" > <input type="text" class="form-control" name="vendedorx" id="vendedorx" value="<?php echo $_SESSION['Nome']?>" disabled>
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>OBSERVAÇÃO:</strong></label>
                <div class="col-md-5">
                <textarea name="obs" id="obs" cols="88" rows="5" value="" required><?php echo $REQUEST['obs']?></textarea>
                </div>
                </div>
                 
               
                </div>
    
                <div class="form-actions right1">
                <button type="submit" class="btn default">Limpar</button>
                <button type="submit" class="btn green" name="regvenda" id= "regvenda" value ="regvenda">Registrar</button>
                </div>
                </form>
                </div>
                </div>
                 <?php } ?> 
                 
                 <?php 
                
                $l = new selectoi();
                if ($_POST['regvenda']!="") {
                $cliente= addslashes($_POST['cliente']);
                $orcamento= addslashes($_POST['orcamento']);
                $proposta= addslashes($_POST['proposta']);
                $demanda= addslashes($_POST['demanda']);
                $servico = addslashes($_POST['servico']);
                $areaprojecao= addslashes($_POST['areaprojecao']);
                $telha= addslashes($_POST['telha']);
                $calhas= addslashes($_POST['calhas']);
                $pinturas = addslashes($_POST['pinturas']);
                $responsavelr = addslashes($_POST['responsavel']);
                $obs = addslashes($_POST['obs']);
                $l->registroorcamento($cliente,$orcamento,$proposta,$demanda,$servico,$areaprojecao,$telha,$calhas,$pinturas,$responsavelr,$obs);// está enviando para a classe 
                
                $msgg= "<div class='alert alert-success'>Cadastro realizado com sucesso!!!</div>";
                ?>
                
                <script>
                window.setTimeout(function() {
                 },  );
                </script>
                <?php // depois de 3 segundo redireciona
                echo $msgg; //posta a ensagem
                }
                ?>
               
                
                   <?php if($_REQUEST['id'] == "2"){?>
                
                <div class="portlet box green">
                <div class="portlet-title">
                <div class="caption">
                <i class="fa fa-user-plus"></i> Cadastro de Orçamento </div>
                <?php  
                 
                $d = new selectoi();
                $matricula = $_SESSION['Nome'];
                $cliente = $_REQUEST['cliente'];
                
                $sqlultimoorcamento = $d->ultimoorcamento($matricula,$cliente);//envia para a function
                foreach ($sqlultimoorcamento as $orcamento) :?>
                <div class="tools">
                  <?php if($orcamento['registroid'] != "") {?><a href="imprimir?registroid=<?php echo $orcamento['registroid'] ?>" ><img src="Logo-PDF-PNG.png" alt="mspantanal" width="30" height="30"></a><?php } ?> 
                </div>
                </div>
                <div class="portlet-body form">
                
                <form class="form-horizontal" role="form" method="post" name="registro2" id="registro2" action="cadastroorcamento">
                <div class="form-body">
                                    
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>CLIENTE:</strong></label>
                <div class="col-md-3">                                                                                 
                <input type="text" class="form-control" placeholder="Cliente" name="cliente" id="cliente" value = "<?php echo $orcamento['cliente'] ?>" > 
                <input type="hidden" class="form-control" name="id" id="id" value = "2">
                <input type="hidden" class="form-control" placeholder="proposta" name="registroid" id="registroid" value = "<?php echo $orcamento['registroid'] ?>">
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>ORÇAMENTO</strong></label>
                <div class="col-md-5">
                <input type="text" class="form-control" placeholder="Descrição orçamento" name="orcamento" id="orcamento" value = "<?php echo $orcamento['orcamento'] ?>"> 
                </div>
                 
                </div>
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>PROPOSTA:</strong></label>
                <div class="col-md-3">
                <input type="text" class="form-control" placeholder="proposta" name="proposta" id="proposta" value = "<?php echo $orcamento['proposta'] ?>">
                </div>
                </div>
                <hr>
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>DEMANDA:</strong></label>
                <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Descrição do Demanda" name="demanda" id="demanda" required> 
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
                 <textarea name="telha" id="telha" cols="88" rows="5" required></textarea>  
                 </div>
                </div>
                
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>CALHAS:</strong></label>
                <div class="col-md-4">
               <textarea name="calhas" id="calhas" cols="88" rows="5" required></textarea>  
                </div>
                </div>
                
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>PINTURAS:</strong></label>
                <div class="col-md-4">
                <textarea name="pinturas" id="pinturas" cols="88" rows="5" required></textarea>  
                </div>
                </div>
                
                <hr>
                 
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>RESPONSAVEL:</strong></label>
                <div class="col-md-4">
                <input type="hidden" class="form-control" name="responsavel" id="responsavel" value="<?php echo $_SESSION['Nome']?>" > <input type="text" class="form-control" name="vendedorx" id="vendedorx" value="<?php echo $_SESSION['Nome']?>" disabled>
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-2 control-label"><strong>OBSERVAÇÃO:</strong></label>
                <div class="col-md-5">
                <textarea name="obs" id="obs" cols="88" rows="5" value="" required> </textarea>
                </div>
                </div>
             
               
                
                </div>
    
                <div class="form-actions right1">
                <button type="submit" class="btn default">Limpar</button>
                <button type="submit" class="btn green" name="regvenda2" id= "regvenda2" value= "regvenda2">Registrar</button>
                </div>
                </form>
                 <?php endforeach; ?> 
                </div>
                </div>
                 <?php } ?> 
                
                <?php 
                
                $l = new selectoi();
                if ($_POST['regvenda2']!="") {
                $cliente= addslashes($_POST['cliente']);
                $orcamento= addslashes($_POST['orcamento']);
                $proposta= addslashes($_POST['proposta']);
                $demanda= addslashes($_POST['demanda']);
                $servico = addslashes($_POST['servico']);
                $areaprojecao= addslashes($_POST['areaprojecao']);
                $telha= addslashes($_POST['telha']);
                $calhas= addslashes($_POST['calhas']);
                $pinturas = addslashes($_POST['pinturas']);
                $responsavelr = addslashes($_POST['responsavel']);
                $registroid = addslashes($_POST['registroid']);
                $obs = addslashes($_POST['obs']);
                
                $l->registroorcamento2($cliente,$orcamento,$proposta,$demanda,$servico,$areaprojecao,$telha,$calhas,$pinturas,$responsavelr,$registroid,$obs);// está enviando para a classe 
                
                $msgg= "<div class='alert alert-success'>Cadastro realizado com sucesso!!!</div>";
                ?>
                
                
                
                <script>
                window.setTimeout(function() {
              
                }, );
                </script>
                <?php // depois de 3 segundo redireciona
                echo $msgg; //posta a ensagem
                }
                ?>
                   
                <?PHP include 'fechacodigo.php' ?> 
