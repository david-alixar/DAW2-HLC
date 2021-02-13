<?php

#@author David González Conejero

# asignemos precios a los tres productos
$langosta = 30;
$angula = 61;
$caviar = 900;



if (($langosta > 50 || $angula > 60) && $caviar > 500) {
	print "cierto<br>";
} else {
	print "falso<br>";
}