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
<br><br>
<h1><center>"TIENDA DE VIDEOS"</center></h1>

<table border="1">
  <tr>
  <th rowspan="2">Dia</th>
  <th rowspan="2">Numero Aleatorio</th>
  <th rowspan="2">Demanda</th>

  <th colspan="4"> <center>Ingreso </center> </th>
    
    

    
  </tr>
  <tr>
   
    <th>1 copias</th>
    <th>2 copias</th>
    <th>3 copias</th>
    <th>4 copias</th>
   
   
  </tr>
  <?php
$numa = array(
rand(0, 100) / 100,rand(0, 100) / 100, 
rand(0, 100) / 100,rand(0, 100) / 100,
rand(0, 100) / 100,rand(0, 100) / 100,
rand(0, 100) / 100,rand(0, 100) / 100,
rand(0, 100) / 100,rand(0, 100) / 100,
rand(0, 100) / 100,rand(0, 100) / 100, 
rand(0, 100) / 100,rand(0, 100) / 100,
rand(0, 100) / 100,rand(0, 100) / 100,
rand(0, 100) / 100,rand(0, 100) / 100,
rand(0, 100) / 100,rand(0, 100) / 100,
rand(0, 100) / 100,rand(0, 100) / 100, 
rand(0, 100) / 100,rand(0, 100) / 100,
rand(0, 100) / 100,rand(0, 100) / 100,
rand(0, 100) / 100,rand(0, 100) / 100,
rand(0, 100) / 100,rand(0, 100) / 100 );







  echo '<button id="btnActualizar">Actualizar Nro Aleatorio</button> ';
  $cont =1;
  $suma =0;
  $suma1 =0;
  $suma2 =0;
  $suma3 =0;
  $suma4 =0;
  $suma5 =0;
  $suma6 =0;
  $suma7 =0;
  $suma8 =0;
  $suma9 =0;
for ($i=0; $i < 29 ; $i++){

     echo "<tr>";
    echo "<td>$cont</td>";
$cont++;
 echo "<td>". $numa[$i]."</td>";
if ($numa[$i]>=0.4 && $numa[$i]<=0.85) {
    $s=2;
    echo "<td>$s</td>";
  
}else { 
    if ($numa[$i]>=0 && $numa[$i]<=0.15) {
        $s=0;
       echo "<td>$s</td>";
    }else {
        if ($numa[$i]>=0.85 && $numa[$i]<=0.95) {
            $s=3;
            echo "<td>$s</td>";
         }else {
            if ($numa[$i]>=0.95 && $numa[$i]<=1) {
                $s=4;
                echo "<td>$s</td>";  
            }else {
            $s=1;
            echo "<td>$s</td>";  
            }
        }
    }
}

/*copia 1*/
$n1=3;
if ($s==0) {
  echo "<td>0</td>";
  
}else {
echo "<td>$n1</td>";
$suma = $suma + $n1;

}
/*copia 2*/
$n1=3;
$n2=6;
if ($s==1) {
  echo "<td>$n1</td>";
  $suma1 = $suma1 + $n1;
}else {
  if ($s==0) {
    echo "<td>0</td>";
    
  }else {
    
        echo "<td>$n2</td>";
        $suma2 = $suma2 + $n2;
    }
  }


/*copia 3*/
$n2=6;
$n1=3;
$n3=9;
if ($s==0) {
  echo "<td>0</td>";
  
}else {
  if ($s==1) {
    echo "<td>$n1</td>";
    $suma3 = $suma3 + $n1;
  }else {
    if ($s==2) {
      echo "<td>$n2</td>";
      $suma4 = $suma4 + $n2;
    }else {
        echo "<td>$n3</td>";   
        $suma5 = $suma5 + $n3;
      }
    }
  }

/*copia 4 */
$n2=6;
$n1=3;
$n3=9;
$n4=12;

if ($s==0) {
  echo "<td>0</td>";
  
}else {
  if ($s==1) {
    echo "<td>$n1</td>";
    $suma6 = $suma6 + $n1;
  }else {
    if ($s==2) {
        echo "<td>$n2</td>"; 
        $suma7 = $suma7 + $n2;
    } else {
      if ($s==3) {
       echo "<td>$n3</td>";  
       $suma8 = $suma8 + $n3;
    } else {
        echo "<td>$n4</td>";  
        $suma9 = $suma9 + $n4;
    }
    }
  }
}






echo "</tr>";
} 


      
       
   
  
   
   
    
    
  
  echo "<tr><td colspan='3'>Ganancia esperada:</td>";

  echo "<td>$suma</td>";
$st= $suma1+$suma2;
  echo "<td>$st</td>";
$st1= $suma3+$suma4+$suma5;  
  echo "<td>$st1</td>";
$st2= $suma6+$suma7+$suma8+$suma9;  
  echo "<td>$st2</td>";
 
  $sumas = array($suma,$st,$st1,$st2);
  
  echo "</tr>";

  echo "</table>";

  echo "<br>";
  echo "<br>";
  echo "<br>";




  echo "<table>";
  echo "<tr>";
  echo "<th>Numero de copias</th>";
  echo "<th>ingreso por flete por mes </th>";
  echo "<th>ingreso reventa de videos</th>";
  echo "<th>costo de compra</th>";
  echo "<th>ganancia mensual</th>";
  echo "</tr>";

  $m=5;
  $m1=5;
  $f=0;
  $mayor=0;
$r=0;

for ($i=0; $i < 5; $i++) { 
    echo "<tr>";
    
     echo "<td>$i</td>";
     if ($i == 0) {
      echo "<td>0</td>";
     }else {
      echo "<td>".$sumas[$i-1] ."</td>";
     }
     /**/ 
     
    
      echo "<td>".$i*$m ."</td>";
    
      echo "<td>".($i*$m1)*5 ."</td>";

      if ($i == 0) {
        echo "<td>0</td>";
       }else {
       $f= $sumas[$i-1]+($i*$m )-($i*$m1)*5 ;
        echo "<td>$f</td>";
         if ($f>$mayor) {
          $mayor=$f;
          $r=$i;

         }

       }
  }
  

  
  echo "</tr>";





  echo "</table>";
  echo "<br>";
  echo "<br>";

echo "mayor es : <b>".$mayor."</b><br>";
echo "Por lo tanto el gerente de First run videos tiene que comprar ".$r." copias de cada video.";



  ?>

<br><br><br><br>



<script>
   
    document.getElementById('btnActualizar').addEventListener('click', function() {
        location.reload();
    });
</script>
</body>
</html>