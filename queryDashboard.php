<?php 
 //Chamando Quantidades de Reteste
  //1510-INMETRO
  $QtR1510 = "SELECT COUNT(*) AS total FROM cadastro_1510 WHERE Status='1'";
   $QntR1510 = $PDO->prepare($QtR1510);
   $QntR1510->execute();
   $QntReteste1510 = $QntR1510->fetchColumn();
  //373
  $QtR373 = "SELECT COUNT(*) AS total FROM cadastro_373 WHERE Status='1'";
   $QntR373 = $PDO->prepare($QtR373);
   $QntR373->execute();
   $QntReteste373 = $QntR373->fetchColumn();
  //ACESSO
  $QtRAcesso = "SELECT COUNT(*) AS total FROM cadastro_373 WHERE Status='1'";
   $QntRAcesso = $PDO->prepare($QtRAcesso);
   $QntRAcesso->execute();
   $QntRetesteAcesso = $QntRAcesso->fetchColumn();
 //CHAMANDO A QUANTIDADE DE EQUIPAMENTOS LIBERADOS
  //1510-INMETRO
  $QtA1510 = "SELECT COUNT(*) AS total FROM cadastro_1510 WHERE Status='3'";
   $QntA1510 = $PDO->prepare($QtA1510);
   $QntA1510->execute();
   $QntGeral1510 = $QntA1510->fetchColumn();
  //373
  $QtA373 = "SELECT COUNT(*) AS total FROM cadastro_373 WHERE Status='3'";
   $QntA373 = $PDO->prepare($QtA373);
   $QntA373->execute();
   $QntGeral373 = $QntA373->fetchColumn();
  //Acesso
  $QtAAcesso = "SELECT COUNT(*) AS total FROM cadastro_acesso WHERE Status='3'";
   $QntAAcesso = $PDO->prepare($QtAAcesso);
   $QntAAcesso->execute();
   $QntGeralAcesso = $QntAAcesso->fetchColumn();
 //CHAMANDO QUANTIDADE DE EQUIPAMENTOS PENDENTES PARA O USUÁRIO
  //1510-INMETRO
  $QtP1510 = "SELECT COUNT(*) AS total FROM cadastro_1510 WHERE Status='2' AND UserCadastro='$NomeUserLogado'";
   $QntP1510 = $PDO->prepare($QtP1510);
   $QntP1510->execute();
   $QntPendentes1510 = $QntP1510->fetchColumn();
  //373
  $QtP373 = "SELECT COUNT(*) AS total FROM cadastro_373 WHERE Status='2' AND UserCadastro='$NomeUserLogado'";
   $QntP373 = $PDO->prepare($QtP373);
   $QntP373->execute();
   $QntPendentes373 = $QntP373->fetchColumn();
  //ACESSO
  $QtPAcesso = "SELECT COUNT(*) AS total FROM cadastro_acesso WHERE Status='2' AND UserCadastro='$NomeUserLogado'";
   $QntPAcesso = $PDO->prepare($QtPAcesso);
   $QntPAcesso->execute();
   $QntPendentesAcesso = $QntPAcesso->fetchColumn();

 //CHAMANDO QUANTIDADE DE EQUIPAMENTOS MONTADOS PARA O USUÁRIO
  //1510-INMETRO
  $QtM1510 = "SELECT COUNT(*) AS total FROM cadastro_1510 WHERE UserCadastro='$NomeUserLogado'";
   $QntM1510 = $PDO->prepare($QtM1510);
   $QntM1510->execute();
   $QntMontados1510 = $QntM1510->fetchColumn();
  //373
  $QtM373 = "SELECT COUNT(*) AS total FROM cadastro_373 WHERE UserCadastro='$NomeUserLogado'";
   $QntM373 = $PDO->prepare($QtP373);
   $QntM373->execute();
   $QntMontados373 = $QntM373->fetchColumn();
  //ACESSO
  $QtMAcesso = "SELECT COUNT(*) AS total FROM cadastro_acesso WHERE UserCadastro='$NomeUserLogado'";
   $QntMAcesso = $PDO->prepare($QtMAcesso);
   $QntMAcesso->execute();
   $QntMontadosAcesso = $QntMAcesso->fetchColumn();

   ?>