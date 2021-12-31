			<?PHP include 'painel.php'; 
			session_start(); 
			?>
                                                        <head>
                                                        <title>USUARIOS</title>
                                                        </head>
                                                        <!-- BEGIN PAGE BAR -->
                                                        <div class="page-bar">
                                                        <ul class="page-breadcrumb">
                                                        <li>
                                                        <a href="index">Home</a>
                                                        <i class="fa fa-circle"></i>
                                                        </li>
                                                        <li>
                                                        <span>Usuarios</span>
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
                                                        <!-- END PAGE BAR -->
                                                        <!-- BEGIN PAGE TITLE-->
                                                        <h1 class="page-title"> Painel Usuários </h1>
                                                        
                                                        <?php if($_SESSION['nivelAcesso'] >= "3" ){?>
                                                        <div class="row">
                                                        <div class="col-lg-12 col-xs-12 col-sm-12">
                                                         <div class="portlet light bordered"><!-- 1-->
                                                        <div class="portlet-title"><!-- 2-->
                                                        <div class="caption">
                                                        <i class="icon-bubble font-dark hide"></i>
                                                        <span class="caption-subject font-hide bold uppercase">Recent Users</span>
                                                        </div>
                                                         </div><!-- 2-->
                                                        <div class="portlet-body"><!-- 3-->
                                                        <div class="row"> <!-- 4 -->
                                                         <?php 
                                                        require 'bdLogin/select.class.php';
                                                        $d = new selectoi();
                                                        $todosusuarios= $d->usuarios ();//envia para a function
                                                        foreach ($todosusuarios as $usuarios) :
                                                        ?>
                                                        <div class="col-md-4"><!-- 5 -->                                           
                                                        <!--begin: widget 1-1 -->
                                                        <div class="mt-widget-1"><!-- 6 -->
                                                        <div class="mt-img 2"><!-- 7-->
                                                        <img class="media-object" src="imagens/<?php echo $usuarios['diretorioFoto']; ?>" alt="..." style="width: 100px;">
                                                        </div><!-- 7 -->
                                                        <div class="mt-body"><!-- 8-->
                                                        <h3 class="mt-username"><?php echo strtoupper(recortaNome($usuarios['Nome'])); ?></h3>
                                                        <p class="mt-user-title"><?php echo strtoupper($usuarios['Cargo']).' / Usu: '.$usuarios['usuario'].' / PWD ' .$usuarios['pwd']?></p>
                                                        <p class="mt-user-title">Ultimo acesso as <?php echo format_data(strtoupper($usuarios['ultimoAcesso']))?></p>
                                                        <div class="mt-stats"><!-- 9-->
                                                        <div class="btn-group btn-group btn-group-justified"><!-- 10-->
                                                        <a href="resetsenha?matricula=<?php echo $usuarios['matricula']; ?>" class="btn font-red">
                                                        <i class="icon-key"></i> RESET </a>
                                                        <a href="editarusuario?matricula=<?php echo $usuarios['matricula']; ?>" class="btn font-green">
                                                        <i class="icon-settings"></i> EDITAR </a>
                                                        <a href="editar_usuario?matricula=<?php echo $usuarios['matricula']; ?>" class="btn font-green">
                                                        <i class="icon-lock-open"></i><?php echo $usuarios['status']; ?></a>
                                                         
                                                        </div><!-- 10-->
                                                        </div><!-- 9-->
                                                        </div><!-- 8-->
                                                        </div><!-- 6-->
                                                        <!--end: widget 1-1 -->
                                                        </div><!-- 5-->
                                                        <?php endforeach; ?>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        </div> <!-- 4-->
                                                         <br>
                                                        </div> <!-- 3 -->
                                                        
                                                        </div>  <!-- 1--> 
                                                        <br>
                                                        <?php } ?>
                                                        <br>       
                                                       <?PHP include 'fechacodigo.php' ?> 