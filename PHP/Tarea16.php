<?php
#@author David González Conejero
$i = 0;
while ($i++ < 14) {


        echo "El valor de i es: ", $i, "<br>";


        if ($i % 3 != 0) {
                break;
        }
}

echo "El comando 'break' permite al programador forzar que termine y finalice un bucle, suele incorporarse en una cláusula if ";