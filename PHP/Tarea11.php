<?php

#@author David González Conejero

$array1 = [
	0 => [0 => " ", 1 => "3-2", 2 => "5-3", 3 => "7-1", 4 => "0-2"],
	1 => [0 => "0-11", 1 => " ", 2 => "2-1", 3 => "1-0", 4 => "1-2"],
	2 => [0 => "0-0", 1 => "1-3", 2 => " ", 3 => "1-4", 4 => "2-0"],
	3 => [0 => "1-0", 1 => "6-3", 2 => "14-3", 3 => " ", 4 => "1-0"],
	4 => [0 => "1-1", 1 => "2-3", 2 => "0-1", 3 => "1-1", 4 => " "],
];

$array2 = [
	0 => [0 => "Índice", 1 => "Juvencia", 2 => "Mosconia", 3 => "Canicas", 4 => "Condal", 5 => "Piloñesa"],
	1 => [0 => "Juvencia", 1 => " ", 2 => "3-2", 3 => "5-3", 4 => "7-1", 5 => "0-2"],
	2 => [0 => "Mosconia", 1 => "0-11", 2 => " ", 3 => "2-1", 4 => "1-0", 5 => "1-2"],
	3 => [0 => "Canicas", 1 => "0-0", 2 => "1-3", 3 => " ", 4 => "1-4", 5 => "2-0"],
	4 => [0 => "Condal", 1 => "1-0", 2 => "6-3", 3 => "14-3", 4 => " ", 5 => "1-0"],
	5 => [0 => "Piloñesa", 1 => "1-1", 2 => "2-3", 3 => "0-1", 4 => "1-1", 5 => " "],
];

print("<TABLE BORDER=2>");

for ($i = 0; $i < 4; $i++) {
	print("<tr>");
	for ($j = 0; $j < 5; $j++) {
		print("<td>" . $array1[$i][$j] . "</td>");
	}
}

print("</table>");


echo ("<br><br><br>");

print("<TABLE BORDER=2>");

for ($i = 0; $i < 5; $i++) {
	print("<tr>");
	for ($j = 0; $j < 5; $j++) {
		print("<td>" . $array2[$i][$j] . "</td>");
	}
}

print("</table>");