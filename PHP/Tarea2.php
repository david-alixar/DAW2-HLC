<?php
#@author David González Conejero

// Este comentario no se verá en la página
echo "Esto se leerá <BR> "; // Esto no se leerá
/* Este es un comentario de
múltiples líneas y no se acabará
hasta que no cerremos así.... */
echo "Este es el segundo comentario que se leerá<BR>";
# Este es un comentario tipo shell que tampoco se leerá
# Este, tampoco
echo ("Aquí el tercer texto visible<br>"); #comentario invisible
/* Cuidado con anidar
/* comentarios
multilinea con estos
al PHP no le gustan */

//Comentando con print
print "Esto es un comentario con print<br>";
/*Comentario de tipo
función print()*/
print("Esto es un comentario con la función print()<br>");
#Comentario de tipo función print_r()
print_r("Esto es un comentario con la función print_r()<br>");
//Comentario hecho con un echo normal y corriente
echo "Esto es un comentario con un echo normal<br>";