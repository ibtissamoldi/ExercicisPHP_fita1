
<!Doctype html>

<head>
  <style>
    .ej_table {
        border-collapse: collapse;
    }

    .ej_table td {
        width: 40px;
        height: 40px;
        border: 1px solid black;
        text-align: center;
    }

    .barco {
        background-color: yellow;
    }


  </style>
</head>

<body>
    
    <h1> Batalla Naval </h1>
    <table class="ej_table">
        <?php

        $n = 10;
        $letters = ['A','B','C','D','E','F','G','H','I','J'];
        $barcos = [['tipo' => 'fragata','fila' => 2,'columna' => 3,'direccion' => 'horizontal','longitud' => 1],
        ['tipo' => 'submarine','fila' => 4,'columna' => 2,'direccion' => 'horizontal','longitud' => 2],
        ['tipo' => 'destructor','fila' => 6,'columna' => 5,'direccion' => 'vertical','longitud' => 3],
        ['tipo' => 'portaavions','fila' => 8,'columna' => 7,'direccion' => 'horizontal','longitud' => 4]];

        for ($i=0; $i < 11; $i++) { 
            echo "<tr>";
            if ($i == 0) {
                echo "<td></td>";

            for ($j = 1; $j <= $n; $j++) {
                echo "<td>$j</td>";
            }
        }else {
             echo "<td>" . $letters[$i - 1] . "</td>";

             for ($j = 1; $j <= $n; $j++) {

                $ocupada = false;

                foreach ($barcos as $barco) {

                    $filaBarco = $barco['fila'];
                    $columnaBarco = $barco['columna'];
                    $longitud = $barco['longitud'];
                    $direccion = $barco['direccion'];

                    for ($k = 0; $k < $longitud; $k++) {

                        if ($direccion == 'horizontal') {
                            $filaOcupada = $filaBarco;
                            $columnaOcupada = $columnaBarco + $k;
                        } else {
                            $filaOcupada = $filaBarco + $k;
                            $columnaOcupada = $columnaBarco;
                        }

                        if ($i == $filaOcupada && $j == $columnaOcupada) {
                            $ocupada = true;
                        }
                    }
                }

                if ($ocupada) {
                    echo "<td class='barco'>X</td>";
                } else {
                    echo "<td></td>";
                }
            }
        }



        echo "</tr>";

        }


        ?>


    </table>

    
</body>

</html>