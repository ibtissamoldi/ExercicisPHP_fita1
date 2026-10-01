<!Doctype html>

<head>
  <style>
    .ej_table {
        border-collapse: collapse;
    }

    .ej_table td {
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }
  </style>
</head>

<body>

    <h1>Ejercicio 1 </h1>

    <table class="ej_table">
        <?php

        $n = 10;
        
        echo "<tr>";
        for ($j = 0; $j <= $n; $j++) {
            echo "<td>$j</td>";
        }
        echo "</tr>";
        ?>

    </table>


    <h2>Ejercicio 2 </h2>

    <table class="ej_table">
        <?php

        $n = 10;
        $letras = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        
        for ($i = 1; $i <= 2; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= $n; $j++) {
                if ($i == 1) {
                    echo "<td>$j</td>";
                }
                if ($i == 2) {
                    echo "<td>$letras[$j]</td>";
                }
            }
            echo "</tr>";
        }

        ?>

    </table>


    <h3>Ejercicio 3 </h3>

    <table class="ej_table">
        <?php

        $n = 10;
        $m = 5;
        
        for ($i = 0; $i <= $m ; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= $n; $j++) {
                echo "<td>".($i+$j). "</td>";
            }
            echo "</tr>";
        }

        ?>

    </table>





    <h4>Ejercicio 4 </h4>

    <table class="ej_table">
        <?php

        $n = 10;
        $letters = ['A','B','C','D'];

        
        for ($i=0; $i < 5; $i++) { 
            echo "<tr>";
            if ($i == 0) {
                echo "<td></td>";

            for ($j = 1; $j <= $n; $j++) {
                echo "<td>$j</td>";
            }
        }else {
             echo "<td>" . $letters[$i - 1] . "</td>";

             for ($j = 1; $j <= $n; $j++) {
                    echo "<td></td>";
                }
        }
        echo "</tr>";
            
        }


        ?>


    </table>


    <h5>Ejercicio 5 </h5>
    <table class="ej_table">
        <?php

        $n = 20;
        $m = 7;
        $letters = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

        
        for ($i=0; $i < $m - 1; $i++) { 
            echo "<tr>";

            for ($j = 0; $j < $n - 1; $j++) {
                if ($i % 2 == $j % 2) {
                    echo "<td>X</td>";
                }else{
                    echo "<td></td>";
                }

            }

            echo "<td>$letters[$i]</td>";            

            echo "</tr>";
        }

        echo "<tr>";
        for ($j = 1; $j <= $n - 1; $j++) {
            echo "<td>$j</td>";
        }
        echo "<td>X</td>";
        echo "</tr>";




        ?>


    </table>

   


</body>

</html>