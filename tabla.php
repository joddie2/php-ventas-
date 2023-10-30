<?php

echo "ciclo repetitivo FOR";
echo"<br>";
if(isset($_POST['btnProceso'])){
      $num=$_POST['txtNumero'];
      for($k=1;$k<=10;$k++){
        $resul= $num*$k;
        echo $num." x ".$k." = ".$resul."<br>";
} 
}
echo"<br>";

echo"ciclo repetitivo While";
echo"<br>";
$k=1;

while ($k <= 10) {
    $resul= $num*$k;
    echo $num." x ".$k." = ".$resul."<br>";
    $k++;
}

?>

<h1>Tabla de multiplicar</h1>
<hr>
<div>
    <form method="post">
        <label>Ingrese Número: </label>
        <input type="text" name="txtNumero"
        placeholder="un valor entero" 
        value="<?php if(isset($num)) echo $num ?>">

        <button type="submit" name="btnProceso">Proceso</button>
    </form>

</div>