<?php

#@author David González Conejero

$array1 = [
	0 => "Domingo",
	1 => "Lunes",
	2 => "Martes",
	3 => "Miércoles",
	4 => "Jueves",
	5 => "Viernes",
	6 => "Sábado",
];

$array2 = [
	"Primero" => "Domingo",
	"Segundo" => "Lunes",
	"Tercero" => "Martes",
	"Cuarto" => "Miércoles",
	"Quinto" => "Jueves",
	"Sexto" => "Viernes",
	"Séptimo" => "Sábado",
];

//print_r($array1);

echo ("Tablas unidimensionalres<br>");
echo ("Array escalar");
echo ("Array asociativo<br>");
echo ("Variable     Índice     Valor      Variable   Índice    Valor<br><br>");

for ($i = 0; $i < 6; $i++) {
	print_r("array1[" . $i . "] " . $i . $array1[$i]);
	print_r("     array2[" . $i . "] " . $i . $array2[$i . "br"]);
};