<?php
#@author David González Conejero

$i = 1;

switch ($i) {
    case 0:
        echo "i es igual a 0 <br>";
        break;
    case 1:
        echo "i es igual a 1 <br>";
        break;
    case 2:
        echo "i es igual a 2 <br>";
        break;
}

echo "En este caso da igual el valor que tenga 'i', puesto que el switch está mal hecho y nos imprimiría todos los resultados en cascada una vez hubiese entrado por alguno.";
echo "<br>Para que esto no suceda, habría que incorporar un 'break' después de cada caso. Entonces tendríamos una aplicación que haría una función concreta dependiendo del valor de la variable 'i'.";