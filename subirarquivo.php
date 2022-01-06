<?php require 'painel.php'; 

$idf= $_REQUEST['id'];
$idresponsavel= $_SESSION['id'];

?>

                                     
                                    <div class="portlet box green">
                                    <div class="portlet-title">
                                    <div class="caption">
                                    <i class="fa fa-folder-open-o"></i> Update Arquivos</div>
                                    <div class="tools">
                                    <a href="" class="collapse" data-original-title="" title=""> </a>
                                    </div>
                                    </div>
                                    <div class="portlet-body form">
                                    
                                    <!-- Aqui começa a pagina-->
                                    <form method="post" enctype="multipart/form-data" action="recebexxxxxxxxxxxxxxxxxxxxxx">
                                    <br>
                                    <input name="arquivo" class="btn btn-success" type="file" />
                                    <br />
                                     <input type="submit" class="btn btn-success" value="Salvar" />
                                    </form>
                                    <h4><strong>Arquivos nos formatos:</h4><div><h6>.jpg/.jpeg/.gif/.png/.xls/.xlsx/.txt/.csv/.dwg/.pdf/.docx</strong></div></h6>
                                    <br>
                                    <br>
                                    <div id="msg" ></div>
                                    <br>
                                    
                                    
                                    <div class="portlet box green">
                                    
                                    </div>
                                    </div>
                                    

   <?PHP include 'fechacodigo.php' ?> 
