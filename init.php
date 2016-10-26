<?php

// constantes com as credenciais de acesso ao banco MySQL
$host = "localhost:8889";
$user = "root";
$pass = "root";
$banco = "producao";
$versao = "3.3.5";
define('DB_HOST', $host);
define('DB_USER', $user);
define('DB_PASS', $pass);
define('DB_NAME', $banco);



//AQUI EU DECLARO A FUNÇÃO DE CHAMAR PORCENTAGEM
// Y É X% DE Z
function porcentagem_nnx ($parcial, $porcentagem ) {
 return ($parcial / $porcentagem) * 100;
}


// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);

date_default_timezone_set('America/Sao_Paulo');

$cor = "skin-blue";
$Titulo = "Henry Controle de Estoque";
// MENSAGENS DE PROTOCOLO
 //ERRO AO CRIAR SOCKET
 $M000 = ' <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-alert"></i> Atenção!</h4>
          NÃO FOI POSSÍVEL CRIAR SOCKET</div>';
 // ERRO AO ENVIAR EMPREGADOR
 $M001 = ' <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-alert"></i> Atenção!</h4>
          Não foi possível Empregador, o relógio não está na rede ou não responde.</div>';
  // ERRO AO ENVIAR INFORMAÇÃO AO DISPOSITIVO
  $M002 = ' <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-alert"></i> Atenção!</h4>
          Não foi possível enviar, o relógio não está na rede ou não responde.</div>';

  //ERRO AO ENVIAR DATA E HORA
  $M003 = ' <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-alert"></i> Atenção!</h4>
          Não foi possível Data/ Hora, o relógio não está na rede ou não responde.</div>';

 //ERRO AO ENVIAR DATA E HORA
  $M004 = ' <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-alert"></i> Atenção!</h4>
          Não foi possível Data/ Hora, o relógio não está na rede ou não responde.</div>';

  $M005 = ' <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-alert"></i> Atenção!</h4>
          Não foi possível cadastrar o equipamento.</div>';

  //ERRO AO CONECTAR COM O EQUIPAMENTO
  $M006 = ' <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-alert"></i> Atenção!</h4>
          Não foi possível comunicar com o equipamento.</div>';

  $SemPrivilegio = '
    <div class="col-md-12 col-sm-6 col-xs-12">
     <div class="info-box">
      <a data-toggle="modal" data-target="#myModal"">
       <span class="info-box-icon bg-red">
        <i class="fa fa-exclamation-triangle"></i>
       </span>
      </a>
      <div class="info-box-content">
       <h4><strong><i>Atenção!</i></strong></h4>
       <h4>Você não possui privilégios suficientes para abrir esta página. Contate o Administrador!</h4>
      </div>
     </div>
    </div>';

    $NAtAtend = '
    <div class="col-md-12 col-sm-6 col-xs-12">
     <div class="info-box">
      <a data-toggle="modal" data-target="#myModal"">
       <span class="info-box-icon bg-red">
        <i class="fa fa-exclamation-triangle"></i>
       </span>
      </a>
      <div class="info-box-content">
       <h4><strong><i>Atenção!</i></strong></h4>
       <h4>Você não pode editar esse atendimento pois ja foi finalizado!</h4>
      </div>
     </div>
    </div>';



require_once 'functions.php';
