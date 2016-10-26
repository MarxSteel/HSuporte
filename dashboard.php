<?php
require("restritos.php"); 
require_once 'init.php';
$cHome = "active";

$PDO = db_connect();
require_once 'QueryUser.php';
require_once 'queryDashboard.php';
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title><?php echo $titulo; ?></title>
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
 <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
 <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
</head>
<body class="hold-transition skin-blue-light fixed sidebar-mini">
<div class="wrapper">
 <header class="main-header">
  <a href="#" class="logo">
   <span class="logo-mini"><img src="dist/img/logo/logoWhite.png" width="50"/></span>
   <span class="logo-lg"><img src="dist/img/logo/logoWhite.png" width="180" /></span>
  </a>
  <nav class="navbar navbar-static-top">
   <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Minizar Navegação</span>
   </a>
   <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
     <li class="dropdown user user-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
       <span class="hidden-xs"><?php echo $NomeUserLogado; ?></span>
      </a>
      <ul class="dropdown-menu">
       <li class="user-header">
        <p><?php echo $NomeUserLogado; ?></p>
       </li>
       <li class="user-footer">
        <div class="pull-left">
         <a href="user/perfil.php" class="btn btn-info">Dados de Perfil</a>
        </div>
        <div class="pull-right">
         <a href="logout.php" class="btn btn-danger">Sair</a>
        </div>
       </li>
      </ul>
     </li>
     <li>
       <a href="logout.php" class="btn btn-danger btn-flat">Sair</a>
     </li>
    </ul>
    </div>
    </nav>
  </header>
  <aside class="main-sidebar">
   <section class="sidebar">
    <?php include_once 'menuLateral.php'; ?>
    </section>
  </aside>
<div class="content-wrapper">
 <section class="content-header">
  <h1>Página Inicial<small><?php echo $titulo; ?></small></h1>
 </section>
 <section class="content">
  <div class="row">
  <?php if ($PermMontagem == "9") { ?> 
   <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="box box-widget widget-user">
     <div class="info-box">
      <a href="P2/Montagem.php" >
       <span class="info-box-icon btn-primary"><i class="fa fa-wrench"></i></span>
      </a>
      <div class="info-box-content"><h4>NOVO EQUIPAMENTO</h4></div>
     </div>
     <div class="box-footer no-padding">
      <ul class="nav nav-stacked">
       <li>
        <a>Meta Prevista <span class="pull-right badge bg-blue"><?php echo $MetaPrevista; ?></span></a>
       </li>
       <li>
        <a>Meta Alacançada <span class="pull-right badge bg-red"><?php echo $MetaRealizada; ?></span></a>
       </li>
       <?php 
        echo '<li><div class="progress progress active">';
        echo '<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:' . porcentagem_nnx ( $MetaRealizada, $MetaPrevista) . '%">';
       ?>  
      </ul>               
     </div><!-- box-footer no-padding -->
    </div><!-- box box-widget widget-user -->
   </div><!-- col-md-3 col-sm-6 col-xs-12 -->
   <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="box box-widget widget-user">
     <div class="info-box">
      <a href="P2/Pendentes.php" >
       <span class="info-box-icon btn-danger">
        <i class="fa fa-exclamation-triangle"></i>
       </span>
      </a>
      <div class="info-box-content"><h4>EQUIPAMENTOS PENDENTES</h4></div>
     </div>
     <div class="box-footer no-padding">
      <ul class="nav nav-stacked">
       <li>
        <a>Pendentes Acesso<span class="pull-right badge bg-green">
         <?php echo $QntPendentesAcesso; ?></span></a>
       </li>
       <li>
        <a>Pendentes 1510<span class="pull-right badge bg-red">
         <?php echo $QntPendentes1510; ?></span></a>
       </li>
       <li>
        <a>Pendentes 373 <span class="pull-right badge bg-blue">
         <?php echo $QntPendentes373; ?></span></a>
       </li>
      </ul>
     </div>                   
    </div>
   </div>
   <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="box box-widget widget-user">
     <div class="info-box">
      <a href="P2/MeusEquips.php" >
       <span class="info-box-icon bg-olive">
        <i class="fa fa-child"></i>
       </span>
      </a>
      <div class="info-box-content"><h4>MEUS EQUIPAMENTOS</h4></div>
     </div>
     <div class="box-footer no-padding">
      <ul class="nav nav-stacked">
       <li>
        <a>Acesso<span class="pull-right badge bg-green">
         <?php echo $QntMontadosAcesso; ?></span></a>
       </li>
       <li>
        <a>Ponto 1510/INMETRO<span class="pull-right badge bg-red">
        <?php echo $QntMontados1510; ?></span></a>
       </li>
       <li>
        <a>Ponto 373 <span class="pull-right badge bg-blue">
         <?php echo $QntMontados373; ?>
        </span></a>
       </li>
      </ul>
     </div>                   
    </div>
   </div>
   <?php } else{ } if ($PermReteste === "9") { ?>
   <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="box box-widget widget-user">
     <div class="info-box">
      <a href="P2/Reteste.php" >
       <span class="info-box-icon btn-warning">
        <i class="fa fa-refresh"></i>
       </span>
      </a>
      <div class="info-box-content"><h4>CONTROLE DE RETESTE</h4></div>
     </div>
     <div class="box-footer no-padding">
      <ul class="nav nav-stacked">
       <li>
        <a>Pendentes Acesso<span class="pull-right badge bg-green">
         <?php echo $QntRetesteAcesso; ?></span></a>
       </li>
       <li>
        <a>Pendentes 1510<span class="pull-right badge bg-red">
        <?php echo $QntReteste1510; ?></span></a>
       </li>
       <li>
        <a>Pendentes 373 <span class="pull-right badge bg-blue">
        <?php echo $QntReteste373; ?>
        </span></a>
       </li>
      </ul>
     </div>                   
    </div>
   </div>
   <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="box box-widget widget-user">
     <div class="info-box">
      <a href="P2/QuantGeral.php" >
       <span class="info-box-icon bg-navy">
        <i class="fa fa-server"></i>
       </span>
      </a>
      <div class="info-box-content"><h4>QUANTIDADE GERAL</h4></div>
     </div>
     <div class="box-footer no-padding">
      <ul class="nav nav-stacked">
       <li>
        <a>Acesso<span class="pull-right badge bg-green">
         <?php echo $QntGeralAcesso; ?></span></a>
       </li>
        <li>
        <a>Ponto 1510/INMETRO<span class="pull-right badge bg-red">
        <?php echo $QntGeral1510; ?></span></a>
       </li>
        <li>
        <a>Ponto 373 <span class="pull-right badge bg-blue">
         <?php echo $QntGeral373; ?>
        </span></a>
        </li>
      </ul>
     </div>                   
    </div>
   </div>
   <div class="col-md-3">
    <div class="box box-widget widget-user">
     <div class="info-box">
      <a href="Imprime/dashboard.php" >
       <span class="info-box-icon bg-olive">
        <i class="fa fa-print"></i>
       </span>
      </a>
      <div class="info-box-content"><h4>IMPRIMIR</h4></div>
     </div>                  
    </div>
   </div>
   <?php } else{ } if ($Catraca === "9") { ?>
   <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
     <a href="Cat/dashboard.php" >
      <span class="info-box-icon btn-danger">
       <i class="fa fa-map-signs"></i></span>
     </a>
     <div class="info-box-content"><h4>Catracas</h4></div>
    </div>
   </div><!-- CLASS ROW -->
   <?php } else{ } if ($PermAdm === "9") { ?>
   <div class="col-md-3">
    <div class="box box-widget widget-user">
     <div class="info-box">
      <a href="adm/usuarios.php" >
       <span class="info-box-icon bg-purple">
        <i class="fa fa-users"></i>
       </span>
      </a>
      <div class="info-box-content"><h4>USUÁRIOS</h4></div>
     </div>                  
    </div>
   </div>
   <?php } else{ } if ($Plaudo === "9") { ?>
   <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
     <a href="almox/dashboard.php" >
      <span class="info-box-icon btn-danger">
       <i class="fa fa-clipboard"></i></span>
     </a>
     <div class="info-box-content"><h4>Laudos de teste</h4></div>
    </div>
   </div><!-- CLASS ROW -->
   <?php } else{ } ?>
   <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="box box-widget widget-user">
     <div class="info-box">
      <a href="pedidos/dashboard.php" >
       <span class="info-box-icon bg-aqua">
        <i class="fa fa-newspaper-o"></i>
       </span>
      </a>
      <div class="info-box-content"><h4>PEDIDOS</h4></div>
     </div>                  
    </div>
   </div> 
 </section>
</div><!-- CONTENT-WRAPPER -->
<?php include_once 'footer.php'; ?>

</div>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
