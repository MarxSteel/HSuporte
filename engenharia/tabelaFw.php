<?php

//CHAMANDO FIRMWARE
$chfw = "SELECT * FROM firmware WHERE Status='1' ORDER BY id DESC";
$fw = $PDO->prepare($chfw);
$fw->execute();
?>

       <table id="tabfw" class="table table-hover table-responsive">
        <thead>
         <tr>
          <td>#</td>
          <td>Modelo</td>
          <td>Versão</td>
          <td>Release</td>
          <td></td>
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
         echo '<td>';
         if ($edFw === "1") {
           # code...
         }
        echo '</td>';
        echo '</tr>';
          endwhile;
        ?>
        </tbody>
       </table>