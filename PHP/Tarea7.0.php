<?php

#@author David González Conejero
# determinando el tipo de variable
$a1 = 347;
$a2 = 2147483647;
$a3 = -2147483647;
$a4 = 23.7678;
$a6 = "347";
$a8 = "Solo literal";
$a9 = "12.3 Literal con número";
$a10 = "";

#forzando los tipos
echo ((float)$a1 . "<br><br>No pasa nada porque ya es un número real"), "<br><br>";
echo ((float)$a2 . "<br><br>No pasa nada porque sigue siendo un número double, aunque sea no tenga decimales"), "<br><br>";
echo ((float)$a3 . "<br><br>Ocurre lo mismo que arriba, el número se queda igual aunque no tenga decimales, puede ser perfactamente un float"), "<br><br>";
echo ((int)$a4 . "<br><br>En este caso, puesto que le pedimos que parsee a entereo y hay decimales, nos elimina los decimales y se queda con la parte entera (redondeo a la baja)"), "<br><br>";
echo ((int)$a6) . "<br><br>Nuevamente le pedimos que parsee a entero, y como es un string, se queda con el número y lo pasa a entero", "<br><br>";
echo ((int)$a8) . ("<br><br>Aquí como le pedimos que parsee a entero un string y no son número, nos pone un 0"), "<br><br>";
echo ((float)$a9), "<br><br>Aquí, como pedimos un float, nos parsea la primera parte, hasta que llega a la que no es numérica, y ahí para.<br><br>";
echo ((int)$a10), "<br><br>Aquí, como tenemos un string vacío, no es posible parsearlo a entero, por lo que nos pone un 0<br><br>";