<?php

#@author David González Conejero

# aquí utilizamos solo unas comillas
print_r("Este texto solo lleva las comillas de la instrucción<br>");
# aquí anidaremos comillas de distinto tipo
print_r("La palabra 'comillas' aparecerá entrecomillada<br>");
# esta es otra posibilidad invirtiendo el orden de las comillas
print_r('La palabra "comillas" aparecerá entrecomillada<br>');
# una tercera posibilidad en la que utilizamos un mismo
# tipo de comillas. Para diferenciar unas de otras anteponemos
# la barra invertida, pero esta opción no podríamos utilizarla
# al revés. 
# No podríamos poner \" el las comillas exteriores.
print_r("La palabra \"comillas\" usando la barra invertida<br>");
//Imprimiendo varias cadenas
print_r('Hola' . ' ' . 'Hola de nuevo<br><br>');
print_r("Las diferencias entre el \"echo\" y el \"print_r\" son pocas. Ambos son construcciones del lenguaje, pero la primera muestra cadenas separadas por comas (en la segunda habría que concatenar con puntos), mientras que la segunda también acepta arreglos y objetos formateándolos para ser visualizados de una forma más entendible y puede devolver su valor de salida como un valor de retorno si le pasa true como su segundo argumento. Además es útil para la depuración");