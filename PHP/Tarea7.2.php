<?php

#@author David González Conejero
# Determinando el valor de las variables
$a = 10;
$b = "10";
$c = 5;

echo "a = ", $a, "<br>";
echo "b = ", $b, "<br>";
echo "c = ", $c, "<br><br>";

echo "a==b: ";
# En este caso, la comparacion no es estricta, por lo que solo tomará el valor, y dirá que son iguales
if ($a == $b) {
    echo "son iguales<br>";
} else {
    echo "no son iguales<br>";
}

echo "a===b: ";
# En este caso, como a comparacion sí es estricta, dirá que NO son iguales, ya que los tipos son diferentes
if ($a === $b) {
    echo "son iguales<br>";
} else {
    echo "no son iguales<br>";
}

echo "a!=b: ";
# En este caso, es igual que en el primer caso, pero aplicando la inversa
if ($a != $b) {
    echo "no son iguales<br>";
} else {
    echo "son iguales<br>";
}

echo "<br>a es menor que c: ";
# Ahora revisamos si a es menor que c
if ($a < $c) {
    echo "a es menor que c<br>";
} else {
    echo "c es menor que a<br>";
}

echo "a es menor o igual que b: ";
# En este caso, también contemplamos la igualdad
if ($a <= $b) {
    echo "a es menor o igual que b<br>";
} else {
    echo "b es menor o igual que a<br>";
}

echo "<br>a es mayor que c: ";
# Ahora miramos si a es mayor que c
if ($a > $c) {
    echo "a es mayor que c<br>";
} else {
    echo "c es mayor que a<br>";
}

echo "a es mayor o igual que b: ";
# En este caso, también incluimos el supuesto de que sean iguales
if ($a >= $b) {
    echo "a es mayor o igaual que b<br>";
} else {
    echo "b es mayor o igual que a<br>";
}