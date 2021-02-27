<?php
#@author David González Conejero

$array = [];

while (sizeof($array) < 6) {
    $nuevo_numero = rand(1, 49);
    if (!in_array($nuevo_numero, $array)) {
        array_push($array, $nuevo_numero);
    }
}

print("<table width=300 border=2>");
print("<tr>");
for ($i = 0; $i < 6; $i++) {
    echo "<td align=center>";
    print_r($array[$i]);
    print("</td>");
}
print("</tr>");
# cerremos la etiqueta table
print "</table>";