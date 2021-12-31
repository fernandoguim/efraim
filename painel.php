<?php include 'iniciocodigo.php';
include("bdLogin/funcoes.php");


if ($_SESSION['matricula'] =="" ){
	
	header("location:../fechar");		
}
?>
 
                                <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
                                <div class="page-wrapper">
                                <div class="page-header navbar navbar-fixed-top">
                                <div class="page-header-inner ">
                                <div class="page-logo">
                                <a href="dash">
                                <img src="../assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
                                <div class="menu-toggler sidebar-toggler">
                                <span></span>
                                </div>
                                </div>
                                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                                <span></span>
                                </a>
                                <div class="top-menu">
                                <ul class="nav navbar-nav pull-right">
                                <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="imagens/<?php echo $_SESSION['diretorioFoto'] ?>" />
                                <span class="username username-hide-on-mobile"> <?php echo recortaNome($_SESSION['Nome']) ?> </span>
                                <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                <a href="meuusuario">
                                <i class="icon-user"></i> My Profile </a>
                                </li>
                                <li>
                                <a href="#">
                                <i class="icon-envelope-open"></i> My Inbox
                                </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                <a href="fechar.php">
                                <i class="icon-key"></i> Log Out </a>
                                </li>
                                </ul>
                                </li>
                                <li class="dropdown dropdown-quick-sidebar-toggler">
                                <a href="javascript:;" class="dropdown-toggle">
                                <i class="icon-logout"></i>
                                </a>
                                </li>
                                </ul>
                                </div>
                                </div>
                                </div>
                                <div class="clearfix"> </div>
                                <div class="page-container">
                                <div class="page-sidebar-wrapper">
                                <div class="page-sidebar navbar-collapse collapse">
                                <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                                <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                <span></span>
                                </div>
                                </li>
                                <li class="nav-item start active ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Início</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                <li class="nav-item start active open">
                                <a href="dash" class="nav-link ">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                                </a>
                                </li> 
                                <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-book-open"></i>
                                <span class="title">Relatorios</span>
                                <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                <li class="nav-item  ">
                                <a href="#" class="nav-link ">
                                <span class="title">Dashboards</span>
                                </a>
                                </li>
                                <li class="nav-item  ">
                                <a href="#" class="nav-link ">
                                <span class="title">Estoque atual</span>
                                </a>
                                </li>
                                </ul>
                                </li>
                                </ul>
                                </li>
                               
                                <li class="nav-item start active ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-users"></i>
                                <span class="title">Clientes</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-users"></i>
                                <span class="title">Clientes</span>
                                <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                <li class="nav-item  ">
                                <a href="cadastrocliente" class="nav-link ">
                                <i class="fa fa-user-plus"></i>
                                <span class="title">Cadastro Cliente</span>
                                </a>
                                </li>
                                 <li class="nav-item  ">
                                <a href="clientes" class="nav-link ">
                                <i class="icon-users"></i>
                                <span class="title">Localiza Cliente</span>
                                </a>
                                </li>
                                </li>
                                </ul>
                                </li>
                                </ul>
                                </li>
                                 
                                 
                                <li class="nav-item start active">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-building"></i>
                                <span class="title">ESTOQUE</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="fa fa-calendar-check-o"></i>Solicitação de Material</a>
                                </li>
                                <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="fa fa-pencil-square-o"></i>Cadatro de Material</a>
                                </li>
                                
                                </ul>
                                </li>
                                
                                <li class="nav-item start active">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-wrench"></i>
                                <span class="title">PROJETOS</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                <li class="nav-item">
                                <a href="cadastroorcamento.php" class="nav-link">
                                <i class="fa fa-gavel"></i>Solicitação de Orçamentos</a>
                                </li>
                                
                                
                                </ul>
                                </li>
                                
                                <?php if($_SESSION['nivelAcesso'] == "3" ){?>
                                <li class="nav-item start active ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Administrador</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Painel</span>
                                <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                <li class="nav-item  ">
                                <a href="usuarios" class="nav-link ">
                                <i class="icon-user"></i>
                                <span class="title">Usuarios</span>
                                </a>
                                </li>
                                
                                </li>
                                
                                </ul>
                                </li>
                                </ul>
                                 
                                <?php } ?>
                                
                                
                                </ul>
                                </li>
                                </ul>
                                </div>
                                </div>
                                <div class="page-content-wrapper">
                                <div class="page-content">
                                <div class="theme-panel hidden-xs hidden-sm">
                                <div class="theme-options">
                               
                                </div>
                                </div>
                                
                                <!-- END THEME PANEL -->
                                
