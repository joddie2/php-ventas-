
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
    

<div>
    <div class="row"></div>
<form method="post">
        <div>
            <div>
                <label>Fecha Venta</label>
                <input type="date" name="txtFecha">
            </div>
            <label>Cliente :</label>
            <select name="cboCliente">
                <option value="JUAN">JOSE</option>
                <option value="ANITA">ANITA PEREZ</option>
                <option value="LUCHO">LUIS AGUIRRE</option>
                <option value="SHIRLEY">SHIRELY</option>
            </select>
        </div>
        <div>
            <label>Producto :</label>
            <select name="cboProducto">
                <option value="TALLARIN">TALLARIN SUMESA</option>
                <option value="ATUN">ATUN LOMITOS</option>
                <option value="ARROZ">ARROZ FLOR</option>
                <option value="AZUCAR">AZUCAR</option>
                <option value="JABON">JABON LAVATODO</option>

            </select>
        </div>
        <div>
            <label>Cantidad :</label>
            <input type="number" name="txtCanti">
        </div>
        <div>
            <label>Precio :</label>
            <input type="text" name="txtPrecio">
        </div>
        <div>
            <button type="submit" name="btnCalcular"> Calcular :</button>
        </div>
    </form>
</div>
<hr>
<h1>RESULTADO</h1>
<?php 
if(isset($_POST['btnCalcular'])){
    $fecha=$_POST['txtFecha'];
    $cliente=$_POST['cboCliente'];
    $producto=$_POST['cboProducto'];
    $cantidad=$_POST['txtCanti'];
    $precio=$_POST['txtPrecio'];
    $subTotal=$cantidad*$precio;
    $iva=$subTotal*0.12;
    $desc=0;
    if($subTotal<50){
        $desc=$subTotal*0.05;
        $regalo="NO TIENE REGALO";
    }else {
        if($subTotal>=50 && $subTotal<100){
            $desc=$subTotal*0.07;
            $regalo="MOCHILA";
        }else{
            if($subTotal>=100 && $subTotal<200){
                $desc=$subTotal*0.1;
                $regalo="LICUADORA";
            }else{
                $desc=$subTotal*0.15;
                $regalo="VIAJE A VENEZUELA";
            }
        }
    }
$totPagar= $subTotal + $iva - $desc;
    //**** mostrar resultados*/
    echo "Fecha   :".$fecha."<br>";
    echo "Cliente   :".$cliente."<br>";
    echo "Producto   :".$producto."<br>";
    echo "SubTotal   :".$subTotal."<br>";
    echo "IVA 12%   :".$iva."<br>";
    echo "Descuento    :".$desc."<br>";
    echo "Total Pagar  :".$totPagar."<br>";
    echo "Regalo   :".$regalo."<br>";

}



?>


<script src="js/bootstrap.bundle.min.js" ></script>

</body>
</html>