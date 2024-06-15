<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Eventos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero">
        <input type="submit" value="Generar">

        <label for="numero">alfa:</label>
        <input type="number" id="alfa" name="alfa">
        <input type="submit" value="Generar">

        <label for="numero">omega:</label>
        <input type="number" id="omega" name="omega">
        <input type="submit" value="Generar">



    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Tiempo</th>";
        echo "<th>Evento</th>";
        echo "<th>Número de Clientes</th>";
        echo "<th>Siguiendo Cliente</th>";
        echo "<th>Siguiendo Bus</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        // Número total de eventos por ciclo
        $eventos_por_ciclo = 13;
        // Número de ciclos completos
        $ciclos_completos = floor($numero / $eventos_por_ciclo);
        // Número de eventos en el último ciclo
        $eventos_ultimo_ciclo = $numero % $eventos_por_ciclo;

        for ($ciclo = 0; $ciclo < $ciclos_completos; $ciclo++) {
            generarEventos($eventos_por_ciclo, $ciclo);
        }

        if ($eventos_ultimo_ciclo > 0) {
            generarEventos($eventos_ultimo_ciclo, $ciclos_completos);
        }

        echo "</tbody>";
        echo "</table>";
    }

    function generarEventos($cantidad, $inicio) {
        $cliente_count = 1; // Contador de clientes
        for ($i = 0; $i < $cantidad; $i++) {
            echo "<tr>";
            echo "<td>" . ($inicio * 13 + $i + 1) . "</td>";
            if ($i == 0) {
                echo "<td></td>"; // Primer evento en blanco
                echo "<td></td>"; // Primer evento en blanco
                echo "<td>" . number_format(rand(0, 999) / 1000, 3) . "</td>"; 
                echo "<td>" . number_format(rand(0, 999) / 1000, 3) . "</td>"; 
            } else if ($i == 7) {
                echo "<td>Bus</td>"; // Bus cada 7 eventos
                echo "<td>0</td>"; // Número de clientes en el evento de bus
                $cliente_count = 1; // Reiniciar contador de clientes cuando llegamos al bus
                echo "<td>" . number_format(rand(0, 999) / 1000, 3) . "</td>"; 
                echo "<td>" . number_format(rand(0, 999) / 1000, 3) . "</td>"; 
            } else {
                echo "<td>Cliente</td>"; // Todos los demás eventos son clientes
                echo "<td>Cliente " . $cliente_count . "</td>"; // Número de cliente
                if ($inicio == 0 || $i == 7) {
                    echo "<td>" . number_format(rand(0, 999) / 1000, 3) . "</td>"; // Número aleatorio entre 0 y 1 con tres decimales
                     echo "<td>" . number_format(rand(0, 999) / 1000, 3) . "</td>"; 
                } else {
                    echo "<td></td>"; // En otras filas, dejamos la celda vacía
                }
                $cliente_count++;
            }
           
            echo "</tr>";
        }
    }
    ?>
</body>
</html>
