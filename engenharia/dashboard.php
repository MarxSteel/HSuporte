<?php
require("../restritos.php"); 
require_once '../init.php';
$cMeus = "active";
$PDO = db_connect();
require_once '../QueryUser.php';
require_once '../queryDashboard.php';

//CHAMANDO FIRMWARE
$chfw = "SELECT * FROM firmware ORDER BY id DESC";
$fw = $PDO->prepare($chfw);
$fw->execute();


?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title><?php echo $titulo; ?></title>
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
 <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
 <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
</head>
<body class="hold-transition skin-blue-light fixed sidebar-mini">
<div class="wrapper">
 <header class="main-header">
  <a href="#" class="logo">
   <span class="logo-mini"><img src="../dist/img/logo/logoWhite.png" width="50"/></span>
   <span class="logo-lg"><img src="../dist/img/logo/logoWhite.png" width="180" /></span>
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
         <a href="../logout.php" class="btn btn-danger">Sair</a>
        </div>
       </li>
      </ul>
     </li>
     <li>
       <a href="../logout.php" class="btn btn-danger btn-flat">Sair</a>
     </li>
    </ul>
    </div>
    </nav>
  </header>
  <aside class="main-sidebar">
   <section class="sidebar">
    <?php include_once '../menuLateral.php'; ?>
    </section>
  </aside>
<div class="content-wrapper">
 <section class="content-header">
  <h1>Meus Equipamentos<small><?php echo $titulo; ?></small></h1>
 </section>
 <section class="content">
  <div class="row">
   <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
     <a data-toggle="modal" data-target="#nfw"">
      <span class="info-box-icon bg-purple">
       <i class="fa fa-plus"></i>
      </span>
     </a>
     <div class="info-box-content"><br /><h4>Adicionar Firmware</h4></div>
    </div>
   </div>
   <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
     <a data-toggle="modal" data-target="#nmanual"">
      <span class="info-box-icon bg-navy">
       <i class="fa fa-plus"></i>
      </span>
     </a>
     <div class="info-box-content"><br /><h4>Adicionar Manual</h4></div>
    </div>
   </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
     <div class="info-box">
      <a data-toggle="modal" data-target="#NovoProduto"">
       <span class="info-box-icon bg-purple">
        <i class="fa fa-plus"></i>
       </span>
      </a>
      <div class="info-box-content"><br /><h4>Novo Produto</h4></div>
     </div>
    </div>
   <div class="col-md-8">
    <div class="nav-tabs-custom">
     <ul class="nav nav-tabs pull-right">
      <li class="active"><a href="#pendente" data-toggle="tab">FIRMWARE</a></li>
      <li><a href="#final" data-toggle="tab">MANUAIS</a></li>
     </ul>
     <div class="tab-content">
      <div class="tab-pane active" id="pendente">
       <table id="tabFin" class="table table-hover table-responsive">
        <thead>
         <tr>
          <td>#</td>
          <td>Modelo</td>
          <td>Versão</td>
          <td>Release</td>
          <td></td>
         </tr>
        </thead>
        <tbody>
        <?php while ($f = $fw->fetch(PDO::FETCH_ASSOC)): 
        echo '<tr>';
         echo '<td>' . $f["id"] . '</td>';
         echo '<td>' . $f["Modelo"] . '</td>';
         echo '<td>' . $f["Versao"] . '</td>';
         echo '<td class="texto">' . $f["Obs"] . '</td>';
         echo '<td>';
         $Arquivo = $f["file"];
         echo '<a href="uploads/' . $Arquivo . ' " target="_blank" class="btn btn-default btn-xs"><i class="fa fa-download"></i> BAIXAR </a>';
         echo '</td>';

        echo '</tr>';
          endwhile;
        ?>
        </tbody>
       </table>
      </div>
      <div class="tab-pane" id="final">
       <table id="tabPen" class="table table-hover table-responsive">
        <thead>
         <tr>
          <td>User</td>
          <td>Data pedido</td>
          <td>Prazo</td>
          <td>Modelo</td>
          <td>Quant</td>
          <td>Obs</td>
         </tr>
        </thead>
        <tbody>
        <?php while ($f = $fw->fetch(PDO::FETCH_ASSOC)): 
         echo '<tr>';
          echo '<td>' . $f["id"] . '</td>';
           echo '<td>' . $f["Modelo"] . '</td>';
           echo '<td>' . $f["id"] . '</td>';
           echo '<td>' . $f["id"] . '</td>';
           echo '<td>' . $f["id"] . '</td>';
           echo '<td class="texto">' . $f["id"] . '</td>';
            if ($PermReteste === "9") {
             echo '<td><a class="btn btn-success btn-block btn-xs" href="';
             echo "javascript:abrir('Finaliza.php?ID=" . $f["id"] . "');";
             echo '"><i class="fa fa-search"> </i></a></td>';           
            } else
            {
              echo '<td></td>';
            }
              echo '</tr>';
            endwhile;
        ?>
           </tbody>
          </table>
         </div>
        </div>
       </div>
      </div>
      <div class="col-md-4">
       <div class="nav-tabs-custom">
        <div class="box-header with-border">
         <i class="fa fa-warning"></i>
         <h3 class="box-title">Lista de Produtos</h3>
        </div>
        <?php include_once 'tabelaProduto.php'; ?>
       </div>
      </div>
      <?php include_once 'modalEng.php'; ?>
<!-- MODAL DE CADASTRO DE FIRMWARE DE LINHA -->

<!-- FINAL DO MODAL DE CADASTRO DE FIRMWARE DE LINHA -->
  
  </div><!-- CLASS ROW -->
 </section>
</div><!-- CONTENT-WRAPPER -->
<?php include_once '../footer.php'; ?>
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../plugins/fastclick/fastclick.js"></script>
<script src="../dist/js/app.min.js"></script>
<script src="../dist/js/demo.js"></script>
<script>
  $(function () {
    $('#cadREP').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true
    });
    $("#cad373").DataTable();
    $("#cadACESSO").DataTable();
    $("#carto").DataTable();
  });
</script>
<script language="JavaScript">
function abrir(URL) { 
  var width = 1200;
  var height = 650;
  var left = 99;
  var top = 99;
  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');
}
</script>
<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
</html>
