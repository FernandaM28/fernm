<h3> EJERCICIO VENTA</h3>
<?php
  $cliente= "PEPITO";
  $producto= "ATÚN LOMITOS";
  $canti=5;
  $precio=7;
  $subTot=$canti*$precio;
  $iva=$subTot*0.12;
  if($subTot>20){
    $desc=$subTot*0.05;
  }
  $totpagar=$subTot+$iva-$desc;

?>
<label>RESULTADOS</label> <br>
<label>Cliente:</label> <?php echo $cliente; ?> <br>
<label>producto:</label> <?php echo $producto; ?> <br>
