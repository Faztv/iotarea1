
<html>
<style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

form {
    max-width: 400px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
}

input,
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
</style>

<br><br>
<h1><center>"PARADA DE AUTOBUS"</center></h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        λ:<br>
        <input type="float" name="lambda" pattern="[0-9]+(\.[0-9]+)?" title="Por favor, introduzca solo números" required>
        <br>
        µ:<br>
        <input type="text" name="media" pattern="[0-9]+(\.[0-9]+)?" title="Por favor, introduzca solo números" required>
        <br>
        σ:<br>
        <input type="text" name="omega" pattern="[0-9]+(\.[0-9]+)?" title="Por favor, introduzca solo números" required>
        <br>
        tiempo de espera (bus):<br>
        <input type="text" name="tiempo" pattern="[0-9]+(\.[0-9]+)?" title="Por favor, introduzca solo números" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

</html>


    







<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


$lambda = $_POST['lambda'];
$tiempo = $_POST['tiempo'];
$media = $_POST['media'];
$omega = $_POST['omega'];



echo"<br>";
echo"<center>";

echo"Datos:";
echo"<br>";echo"<br>";

echo" λ:     ".$lambda;
echo"<br>";echo"<br>";
echo" µ:     ".$media;
echo"<br>";echo"<br>";
echo" σ:     ".$omega;
echo"<br>";echo"<br>";
echo" t:     ".$tiempo;
echo"<br>";echo"<br>";

echo '<button id="btnActualizar">Actualizar Nro Aleatorio</button> ';
echo"<br>";echo"<br>";
echo"</center>";

$t_esp1 = $tiempo*1; 
$t_esp2 = $tiempo*2; 
$t_esp3 = $tiempo*3; 
$t_esp4 = $tiempo*4; 



$aleatorio0 =number_format(rand(0, 999) / 1000, 3);
$aleatorio =number_format(rand(0, 999) / 1000, 3);
$aleatorio1 =number_format(rand(0, 999) / 1000, 3);
$aleatorio2 =number_format(rand(0, 999) / 1000, 3);
$aleatorio3 =number_format(rand(0, 999) / 1000, 3);
$aleatorio4 =number_format(rand(0, 999) / 1000, 3);
$aleatorio5 =number_format(rand(0, 999) / 1000, 3);
$aleatorio6 =number_format(rand(0, 999) / 1000, 3);
$aleatorio7 =number_format(rand(0, 999) / 1000, 3);
$aleatorio8 =number_format(rand(0, 999) / 1000, 3);
$aleatorio9 =number_format(rand(0, 999) / 1000, 3);
$aleatorio10 =number_format(rand(0, 999) / 1000, 3);
$aleatorio11 =number_format(rand(0, 999) / 1000, 3);
$aleatorio12 =number_format(rand(0, 999) / 1000, 3);
$aleatorio13 =number_format(rand(0, 999) / 1000, 3);
$aleatorio14 =number_format(rand(0, 999) / 1000, 3);
$aleatorio15 =number_format(rand(0, 999) / 1000, 3);
$aleatorio16 =number_format(rand(0, 999) / 1000, 3);
$aleatorio17 =number_format(rand(0, 999) / 1000, 3);
$aleatorio18 =number_format(rand(0, 999) / 1000, 3);
$aleatorio19 =number_format(rand(0, 999) / 1000, 3);
$aleatorio20 =number_format(rand(0, 999) / 1000, 3);
$aleatorio21 =number_format(rand(0, 999) / 1000, 3);
$aleatorio22 =number_format(rand(0, 999) / 1000, 3);
$aleatorio23 =number_format(rand(0, 999) / 1000, 3);
$aleatorio24 =number_format(rand(0, 999) / 1000, 3);
$aleatorio25 =number_format(rand(0, 999) / 1000, 3);
$aleatorio26 =number_format(rand(0, 999) / 1000, 3);
$aleatorio27 =number_format(rand(0, 999) / 1000, 3);


$t0 = -log(1 - 0.894206) / $lambda;
$t_0 = number_format($t0, 2); 

$t1 = -log(1 - $aleatorio1) / $lambda;
$t_1 = number_format($t1, 2); 

$t2 = -log(1 - $aleatorio2) / $lambda;
$t_2 = number_format($t2, 2); 

$t3 = -log(1 - $aleatorio3) / $lambda;
$t_3 = number_format($t3, 2); 

$t4 = -log(1 - $aleatorio4) / $lambda;
$t_4 = number_format($t4, 2); 

$t5 = -log(1 - $aleatorio5) / $lambda;
$t_5 = number_format($t5, 2); 

$t6 = -log(1 - $aleatorio6) / $lambda;
$t_6 = number_format($t6, 2);

$t7 = -log(1 - $aleatorio7) / $lambda;
$t_7 = number_format($t7, 2);



$tb1 = $media+($omega*-1.85)+$t_esp1; 
$tb_1 = number_format($tb1, 2);

$tb2 = $media+($omega*-2.09)+$t_esp2;
$tb_2 = number_format($tb2, 2);

$tb3 = $media+($omega*-1.15+$t_esp3); 
$tb_3 = number_format($tb3, 2);

$tb4 = $media+($omega*-1.68+$t_esp4);
$tb_4 = number_format($tb4, 2);




$t8 = -log(1 - $aleatorio8) / $lambda;
$t_8 = number_format($t8, 2);

$t9 = -log(1 - $aleatorio9) / $lambda;
$t_9 = number_format($t9, 2);

$t10 = -log(1 - $aleatorio10) / $lambda;
$t_10 = number_format($t10, 2);

$t11 = -log(1 - $aleatorio11) / $lambda;
$t_11 = number_format($t1, 2); 


$t12 = -log(1 - $aleatorio12) / $lambda;
$t_12 = number_format($t12, 2); 

$t13 = -log(1 - $aleatorio13) / $lambda;
$t_13 = number_format($t13, 2); 

$t14 = -log(1 - $aleatorio14) / $lambda;
$t_14 = number_format($t14, 2); 

$t15 = -log(1 - $aleatorio15) / $lambda;
$t_15 = number_format($t15, 2); 

$t16 = -log(1 - $aleatorio16) / $lambda;
$t_16 = number_format($t16, 2); 

$t17 = -log(1 - $aleatorio17) / $lambda;
$t_17 = number_format($t17, 2); 

$t18 = -log(1 - $aleatorio18) / $lambda;
$t_18 = number_format($t18, 2); 

$t19 = -log(1 - $aleatorio19) / $lambda;
$t_19 = number_format($t19, 2); 

$t20= -log(1 - $aleatorio20) / $lambda;
$t_20 = number_format($t20, 2);

$t21 = -log(1 - $aleatorio21) / $lambda;
$t_21= number_format($t21, 2); 

$t22= -log(1 - $aleatorio22) / $lambda;
$t_22 = number_format($t22, 2); 

$t23 = -log(1 - $aleatorio23) / $lambda;
$t_23 = number_format($t23, 2); 

$t24 = -log(1 - $aleatorio24) / $lambda;
$t_24 = number_format($t24, 2); 

$t25 = -log(1 - $aleatorio25) / $lambda;
$t_25 = number_format($t25, 2); 

$t26 = -log(1 - $aleatorio26) / $lambda;
$t_26 = number_format($t26, 2); 

$t27 = -log(1 - $aleatorio27) / $lambda;
$t_27 = number_format($t27, 2); 


$tabla = array(
    
    array("-",0.00, "-", 0, $t_0,  $tb_1),
    array($aleatorio1,4.49, "Cliente", 1,  $t_1+ $t_0,  $tb_1),
    array($aleatorio2,$t_1+4.49, "Cliente", 2,  $t_2+$t_1+ $t_0,  $tb_1),
    array($aleatorio3,$t_2+$t_1+4.49, "Cliente", 3, $t_2+$t_3+$t_1+ $t_0,  $tb_1),
    array($aleatorio4,$t_2+$t_3+$t_1+4.49, "Cliente", 4, $t_2+$t_1+$t_3+$t_4+ $t_0,  $tb_1),
    array($aleatorio5,$t_2+$t_1+$t_3+$t_4+4.49, "Cliente", 5, $t_2+$t_1+$t_3+$t_4+$t_5+ $t_0,  $tb_1),
    array($aleatorio6,$t_2+$t_1+$t_3+$t_4+$t_5+4.49, "Cliente", 6, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+ $t_0,  $tb_1),
    array($aleatorio7, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_0+4.49, "Cliente", 7,  $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+ $t_0,  $tb_1),
    
    array(0.0183,$tb_1, "Autobús", 0,  $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+4.49, $tb_2 ),
    array($aleatorio8, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+4.49, "Cliente", 1, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+4.49+$t_8,$tb_2),
    array($aleatorio9,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+4.49, "Cliente", 2, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+4.49, $tb_2),
    array($aleatorio10,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+4.49, "Cliente", 3, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+4.49,$tb_2),
    array($aleatorio11,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+4.49, "Cliente", 4, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+4.49,$tb_2),
    array($aleatorio12,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+4.49, "Cliente", 5, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+4.49,$tb_2),
    array($aleatorio13,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+4.49, "Cliente", 6, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+4.49,$tb_2),


    array(0.1251,$tb_2, "Autobús", 0,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+4.49, $tb_3 ),
    array($aleatorio14,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+4.49, "Cliente", 1, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+4.49, $tb_3),
    array($aleatorio15,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+4.49, "Cliente", 2, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+4.49, $tb_3),
    array($aleatorio16,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+4.49, "Cliente", 3, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+4.49, $tb_3),
    array($aleatorio17,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+4.49, "Cliente", 4, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+4.49, $tb_3),
    array($aleatorio18,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+4.49, "Cliente", 5, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+4.49, $tb_3),
    array($aleatorio19,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+4.49, "Cliente", 6, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+$t_19+4.49, $tb_3),
    array($aleatorio20,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+$t_19+4.49, "Cliente", 7, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+$t_19+$t_20+4.49, $tb_3),
    array($aleatorio21,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+$t_19+$t_20+4.49, "Cliente", 8, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+$t_19+$t_20+$t_21+4.49, $tb_3),
    array($aleatorio22,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+$t_19+$t_20+$t_21+4.49, "Cliente", 9, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+$t_19+$t_20+$t_21+$t_22+4.49, $tb_3),
    
    array(0.0465,$tb_3, "Autobús", 0,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+$t_19+$t_20+$t_21+$t_22+4.49,$tb_4),
    array($aleatorio23,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+$t_19+$t_20+$t_21+$t_22+4.49, "Cliente", 1, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+$t_19+$t_20+$t_21+$t_22+$t_23+4.49, $tb_4),
    array($aleatorio24,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+$t_19+$t_20+$t_21+$t_22+$t_23+4.49, "Cliente", 2, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+$t_19+$t_20+$t_21+$t_22+$t_23+$t_24+4.49, $tb_4),
    array($aleatorio25,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+$t_19+$t_20+$t_21+$t_22+$t_23+$t_24+4.49, "Cliente", 3, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+$t_19+$t_20+$t_21+$t_22+$t_23+$t_24+$t_25+4.49,$tb_4),
    array($aleatorio26,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+$t_19+$t_20+$t_21+$t_22+$t_23+$t_24+$t_25+4.49, "Cliente", 4, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+$t_19+$t_20+$t_21+$t_22+$t_23+$t_24+$t_25+$t_26+4.49,$tb_4),
    array($aleatorio27,$t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+$t_19+$t_20+$t_21+$t_22+$t_23+$t_24+$t_25+$t_26+4.49, "Cliente", 5, $t_2+$t_1+$t_3+$t_4+$t_5+$t_6+$t_7+$t_8+$t_9+$t_10+$t_11+$t_12+$t_13+$t_14+$t_15+$t_16+$t_17+$t_18+$t_19+$t_20+$t_21+$t_22+$t_23+$t_24+$t_25+$t_26+$t_27+4.49, $tb_4)
);

echo "<table>";
echo "<th>ALEATORIO<th>TIEMPO</th><th>EVENTO</th><th>CLIENTES</th><th>SIGUIENTE CLIENTE</th><th>SIGUIENTE AUTOBÚS</th></tr>";
foreach ($tabla as $fila) {
    echo "<tr>";
    foreach ($fila as $celda) {
        echo "<td>$celda</td>";
    }
    echo "</tr>";
}
echo "</table>";

}else {
    echo ".....Llene los campos";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabla</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>


<script>
    // JavaScript para manejar el evento de clic en el botón de actualización
    document.getElementById('btnActualizar').addEventListener('click', function() {
        // Aquí puedes colocar el código que se ejecutará cuando se haga clic en el botón de actualización
        // Por ejemplo, puedes recargar la página actual:
        location.reload();
    });
</script>
</body>
</html>