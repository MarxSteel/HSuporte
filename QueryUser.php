<?php 
 $query = $PDO->prepare("SELECT * FROM login WHERE login='$login'");
 $query->execute();
  $row = $query->fetch();
  $NomeUserLogado = $row['Nome'];
  $MetaPrevista = $row['MetaPrevista']; 		// META PREVISTA DO USUÁRIO
  $MetaRealizada = $row['MetaRealizada']; 	// META ALCANÇADA
  $NomeUserLogado = $row['Nome'];				    // NOME DO USUÁRIO
  $PermMontagem = $row['P2Montagem'];			  // PERMISSÃO PARA MONTAR RELOGIO
  $PermReteste = $row['P2Reteste'];				  // PERMISSÃO PARA RETESTAR RELÓGIO
  $PermAdm = $row['P2Adm'];						      // PERMISSÃO PARA ADMINISTRAR USUÁRIOS
  $Catraca = $row['CadCat'];					      // PERMISSÃO PARA ADICIONAR CATRACAS
  $Plaudo = $row['PrivLaudo'];					    // PERMISSÃO PARA ADICIONAR LAUDOS
  $Cclaudo = $row['CadLaudo'];               // PERMISSÃO PARA CADASTRAR PEDIDO DE LAUDO
  $RLaudo = $row['RecLog'];
  $pedido = $row['pedido'];

?>