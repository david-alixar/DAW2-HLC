<?php
#@author David González Conejero

# Defino las variables $Pepe y $Pepa (ojo con mayúsculas y minúsculas)
$Pepe = "Me llamo Pepe";
echo "El valor de la variable Pepe es: ", $Pepe;
$Pepe = "Ahora me llamo Manolo";
echo "<br>El valor de la variable Pepe es: ", $Pepe;


function vervariable()
{
	echo "<br> Ahora tengo una nueva variable";
	echo "<br>me aparecerá en blanco";
	echo "<br>El valor de la variable Pepe es: ", $Pepe;
}
vervariable();