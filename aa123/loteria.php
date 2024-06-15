
<!DOCTYPE html>
<html>
<head>
  <title>Tabla</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      text-align: left;
      padding: 8px;
      border: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
<br>
<h1><center>"LOTERIA"</center></h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        limite :<br>
        <input type="float" name="limite" pattern="[0-9]+(\.[0-9]+)?" title="Por favor, introduzca solo números" required>
        <br>
        Premio Mayor:<br>
        <input type="text" name="vf" pattern="[0-9]+(\.[0-9]+)?" title="Por favor, introduzca solo números" required>
        <br>
        Premio Menor:<br>
        <input type="text" name="vs" pattern="[0-9]+(\.[0-9]+)?" title="Por favor, introduzca solo números" required>
        <br>
        <br>
        <input type="submit" value="Enviar">
        <br>
        <br>
    </form>









<table border="1">
  <tr>
  <th rowspan="2">nro.de tarjeta</th>
 
    <th colspan="2"> <center>fila 1 </center></th>
    <th colspan="2"> <center>fila 2 </center> </th>
    <th colspan="2"> <center>fila 3 </center> </th>
    <th rowspan="2">Ganancia</th>
    

    
  </tr>
  <tr>
   
    <th># aleatorio</th>
    <th>$1 / $5</th>
    <th># aleatorio</th>
    <th>$1 / $5</th>
    <th># aleatorio</th>
    <th>$1 / $5</th>
   
  </tr>
  <?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {


  $limite = $_POST['limite'];
  $vf = $_POST['vf'];
  $vs = $_POST['vs'];
  $total_ganancias = 0;
 


echo "Limite: ".$limite ;
echo"<br>";
echo "Premio Menor: ".$vf ;
echo"<br>";
echo "Premio Mayor:: ".$vs ;
echo"<br>";
echo"<br>";
echo"<br>";
echo '<button id="btnActualizar">Actualizar Nro Aleatorio</button> ';

  for ($i = 1; $i <= 10; $i++) {
    $numeroAleatorio1 = rand(0, 100) / 100;
    $numeroAleatorio2 = rand(0, 100) / 100;
    $numeroAleatorio3 = rand(0, 100) / 100;
    if ($numeroAleatorio1 < $limite ) {
      $ganancia1 = '$'.$vf;
    } else {
      $ganancia1 = '$'.$vs;
    }

    if ($numeroAleatorio2 < $limite) {
      $ganancia2 =  '$'.$vf;
    } else {
      $ganancia2 = '$'.$vs;
    }
    if ($numeroAleatorio3 < $limite) {
      $ganancia3 = '$'.$vf;
    } else {
      $ganancia3 = '$'.$vs;
    }if ($ganancia1 == $ganancia2 && $ganancia2 == $ganancia3 && $ganancia1 == $ganancia3) {
       $s1 =$ganancia1;
       $total_ganancias += (int)substr($ganancia1, 1);
    }else {
      $s1="0";
    }
   

    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>$numeroAleatorio1</td>";
    echo "<td>$ganancia1</td>";
    echo "<td>$numeroAleatorio2</td>";
    echo "<td>$ganancia2</td>";
    echo "<td>$numeroAleatorio3</td>";
    echo "<td>$ganancia3</td>";
    echo "<td> $s1</td>";
   
   
    
    echo "</tr>";

  }
  echo "<tr><td colspan='7'>Ganancia esperada:</td><td>$total_ganancias</td></tr>";
  echo "</table>";
}
  ?>

<br><br><br><br>

</table>

<script>
   
    document.getElementById('btnActualizar').addEventListener('click', function() {
        location.reload();
    });
</script>
</body>
</html>