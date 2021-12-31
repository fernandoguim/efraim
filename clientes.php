<?PHP include 'painel.php'; 
session_start(); 
require 'bdLogin/select.class.php';
$d = new selectoi();
 ?>
			 
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Clientes</span>
                                </li>
                            </ul>
                            
                        </div>
                        
                        <div class="row">
                            
                          <div class="portlet box green">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-cogs"></i>Responsive Flip Scroll Tables </div>
                                       
                                    </div>
                                    <div class="portlet-body flip-scroll" style="display: block;">
                                     
                                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                                            <thead class="flip-content">
                                                    <tr role="row" class="heading">
                                                    <th width="3%">**</th>
                                                    <th width="8%">Data </th>
                                                    <th width="15%"> Cliente </th>
                                                    <th width="20%"> Descrição </th>
                                                    <th width="5%">Download</th>
                                                     </tr>
                                            </thead>
                                            <tbody>
                        <?php 
                         
                        $sqlclientes = $d->buscarclientes();//envia para a function
                        foreach ($sqlclientes as $clientes ) :
                        ?>
                                     <tr>
                                    <td ><form method="post" action="editar_cliente" name="editar">
                                    <input type="hidden" name="id" id="id" value= "<?php echo $clientes['id'];?>"> 
                                    <button type="submit" class="btn green btn-outline sbold"><i class="fa fa-edit"> Editar </i></button></a> 
                                    </form></td>
                                    <td ><?php echo format_data($clientes['datacadastro']); ?></td>
                                    <td ><?php echo $clientes['cliente']; ?></td>
                                    <td ><?php echo $clientes['obs']; ?></td>
                                    <td style="text-align: center"> <img src="Logo-PDF-PNG.png" alt="mspantanal" width="30" height="30"></i></td>
                                    </tr>
                     <?php endforeach; ?>       
                                    </form>       
                                    </tbody>
                                    </table>
                                    </div>
                                    </div>                            
                                    </div>                       

             
                            
                          <?PHP include 'fechacodigo.php' ?> 
                           <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
     
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/table-datatables-colreorder.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        </body>
                        </html>