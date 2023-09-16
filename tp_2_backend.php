<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2_backend</title>
</head>
<body>
    <?php
/* Crear un archivo “tp2_backend.php” y realizar los siguientes 
ejercicios: */
/* 1. Crear una variable n y validar que sea un número positivo. */
$n=2;
if($n<0){
    echo "$n es un número negativo";
} elseif($n>0){
    echo "$n es un número positivo";
} else {
    echo "$n es 0 (Cero)";
}
echo "<br>";
/* 2. Crear una variable n y validar que sea un número mayor 
a 1 y menor a 10. */
$n=3;
if($n<10 && $n>1){
    echo "$n es mayor que 1 y menor que 10";
} else {
    echo "No cumple la condición";
}
echo "<br>";
/* 3. Crear una variable n y validar que sea un número mayor 
a 10 o menor a 2. */
$n=11;
if($n>10 || $n<2){
    echo "$n es mayor a 10 o menor que 2";
} else {
    echo "No cumple la condición";
}
echo "<br>";
/* 4. Crear dos variables, una con nombre numero1 y otra con el 
nombre de numero2. Si numero1 es mayor a numero2, mostrar por 
pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el 
resto de la división. Si numero1 y numero2 son iguales, mostrar 
el siguiente mensaje “Los números ingresados son iguales”. */
$numero1=1;
$numero2=2;
if($numero1>$numero2){
    echo "$numero1+$numero2=";
    echo $numero1+$numero2;
    echo "<br>";
    echo "$numero1-$numero2=";
    echo $numero1-$numero2;
    echo "<br>";
} elseif($numero1<$numero2){
    echo "$numero1*$numero2=";
    echo $numero1*$numero2;
    echo "<br>";
    echo "$numero2/$numero1=";
    echo round($numero2/$numero1);
    echo "<br>";
    echo "EL resto de la división entre $numero2 y $numero1 es: ";
    echo $numero2%$numero1;
    echo "<br>";
} else{
    echo "Los números $numero1 y $numero2 son iguales";
}
   ?>
    
</body>
</html>