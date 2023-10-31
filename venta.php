<div>
<form method="post">
    <div>
        <label>Fecha venta:</label>
        <input type="date" name="txtfecha">

    </div>
    <div>
        <label>Cliente:</label>
        <select name="cboCliente">
            <option value="PEPITO">JOSE</option>
            <option value="ANITA">ANITA PEREZ</option>
            <option value="LUCHO">LUIS AGUIRRE</option>
            <option value="SHIRLEY">CHIRLEY</option>
        </select>
    </div>
<div>
    <label>Producto:</label>
    <select name="cboProducto">
        <option value="TALLARIN">TALLARIN SUMEZA</option>
        <option value="ATÚN">ATÚN LOMITOS</option>
        <option value="GELATINA">GELATINA ROYAL</option>
        <option value="GALLETAS">GALLETAS AMOR</option>
    </select>
</div>
<div>
    <label>Cantidad:</label>
    <input type="number" name="txtCanti">
</div>
<div>
    <label>Precio:</label>
    <input type="text" name="txtPrecio">
</div>
<div>
    <button type="submit" name="btnCalcular">Calcular</button>
</div>
</form>
</div>

<hr>
<h1>RESULTADO</h1>
<?php
if(isset($_POST['bntCalcular'])){
    $fecha-$_POST['txtFecha'];
    $cliente-$_POST['cboCliente'];
    $producto-$_POST['cboProducto'];
    $cantidad-$_POST['txtPrecio'];
    $subTot-$cantidad*$cantidad*$precio;
    $iva=$subTot*0.12;
    $desc=0;
    if($subTot<50){
        $des-$subTot*0.50;
        $regalo="No tiene regalo";
    }else{
        if($subTot>=50 && $subTot<100){

            $des-$subTot*0.07;
            $regalo="Pelota";
    }else{
        if($subTot>=100 && $subTot<200){ 
            $des-$subTot*0.1;
            $regalo="Licuadora";
        
    }else{
        if($subTot>=50 && $subTot<100){
            $des-$subTot*0.07;
            $regalo="Viaje a Venezuela";

    }
 }
} 
}
}
$totalPagar=$subTot+$iva-$desc;
//****Mostrar resultados****/
echo "Fecha:" .$fecha. " <br>";
echo "Cliente:" .$cliente. " <br>";
echo "producto:" .$producto. " <br>";
echo "subTotal:" .$subTot. " <br>";
echo "Iva:" .$iva. " <br>";
echo "Descuento:" .$des. " <br>";
echo "TotalPagar:" .$totalPagar. " <br>";
echo "Regalo:" .$regalo. " <br>";
 
 ?>

 

