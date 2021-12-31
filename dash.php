<?PHP include 'painel.php'; 
   require 'bdLogin/select.class.php';
  
   ?>

			  <title>DASH</title>
                        <!-- BEGIN PAGE BAR -->
                            <div class="page-bar">
                                <ul class="page-breadcrumb">
                                    <li>
                                    <a href="dash">Home</a>
                                    <i class="fa fa-circle"></i>
                                    </li>
                                    <li>
                                    <span>Dashboard</span>
                                    </li>
                                </ul>
                                <div class="page-toolbar">
                                         
                                </div>
                            </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> <?php echo $_SESSION['parceiro']; ?>    </h1>
                         <div class="row">
        
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                <div class="visual">
                                <i class="fa fa-comments"></i>
                                </div>
                                    <div class="details">
                                        <div class="number">
                                        <span data-counter="counterup" data-value="432">0</span>
                                        </div>
                                        <div class="desc"> Solicitações concluídas </div>
                                    </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                                <div class="visual">
                                <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                    <span data-counter="counterup" data-value="10">0</span>
                                    </div>
                                    <div class="desc"> Solicitações Pendentes </div>
                                </div>
                            </a>
                        </div>
                       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                                <div class="visual" >
                                <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details ">
                                    <div class="number">
                                    <span data-counter="counterup" data-value="60">0</span>
                                    </div>
                                    <div class="desc" > Solicitações em Andamento</div>
                                </div>
                            </a>
                        </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                                <div class="visual">
                                <i class="fa fa-globe"></i>
                                </div>
                                     <div class="details ">
                                    <div class="number">
                                    <span data-counter="counterup" data-value="10">0</span>
                                    </div>
                                    <div class="desc" > Aguardando material</div>
                                </div>
                                </a>
                            </div>
                                                                    <div class="col-lg-6 col-xs-12 col-sm-12"><!--99i-->
                                                                    <?php if($_SESSION['nivelAcesso'] == "3" ){?>
                                                                    
                                                                    <div class="portlet light bordered"><!--11i-->
                                                                    
                                                                    <div class="portlet-title tabbable-line">
                                                                    <div class="caption">
                                                                    <i class="icon-globe font-dark hide"></i>
                                                                    <span class="caption-subject font-dark bold uppercase">Alertas</span>
                                                                    </div>
                                                                    <ul class="nav nav-tabs">
                                                                    
                                                                    <li>
                                                                    <a href="#tab_1_2" data-toggle="tab"> ALERTAS DE LOGIN DIA</a>
                                                                    </li>
                                                                    </ul>
                                                                    </div>
                                                                    
                                                                    <div class="portlet-body"><!--0i-->
                                                                    <!--BEGIN TABS-->
                                                                    <div class="tab-content"><!--1i-->
                                                                    
                                                                    
                                                                    <div class="tab-pane active" id="tab_1_2"><!--3i-->
                                                                    <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1"><!--4i-->
                                                                    <ul class="feeds">
                                                                    <?php 
                                                                    $d = new selectoi();
                                                                    $login= $d->acessologin();//envia para a function
                                                                     
                                                                    foreach ($login as $log) :
                                                                    ?>
                                                                    <li>
                                                                    <div class="col1">
                                                                    <div class="cont">
                                                                    <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                    <i class="fa fa-bell-o"></i>
                                                                    </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                    <div class="desc"><?php echo recortaNome($log['nome'])." "; ?>Entrou.
                                                                    <span class="label label-sm label-info"> <?php echo strtoupper($log['cargo']); ?><i class="fa fa-share"></i>
                                                                    </span>
                                                                    </div>
                                                                    </div>
                                                                    </div>
                                                                    </div>
                                                                    
                                                                    <div class="col2">
                                                                    <div class="date"> <?php echo horas($log['data']); ?>
                                                                    </div>
                                                                    </div>
                                                                    </li>
                                                                    <?php endforeach; ?>
                                                                    </ul>
                                                                    </div><!--4i-->
                                                                    </div><!--3i-->
                                                                    
                                                                    </div><!--1i-->
                                                                    
                                                                    <!--END TABS-->
                                                                    </div><!--0i-->
                                                                    </div><!--11i-->
                                                                    <?php } ?>
                                                                        <!-- END PORTLET-->
                                                                        <!-- END PORTLET-->
                                                                    </div><!--99i-->
                    </div>
                 </div>
                 
                             
                       
                          <?PHP include 'fechacodigo.php' ?> 