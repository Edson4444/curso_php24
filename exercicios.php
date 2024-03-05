<?php
/*
Escreva um programa que imprima uma tabuada
de um numero fornecido pelo usuario
*/

// informado pelo usuario.
$num= 4;

$tabuada = "";
$i=0;
while ($i <= 10) {
    $tabuada = $num * $i;

    // if ($i == 10) {
    //     echo "{$num} x {$i} = {$tabuada}\n";
    // } else {
    //     echo "{$num} x {$i} = {$tabuada},\n";
    // }

    $i++;
}

/*
$c = celsius
$k = kelvin
$f = farenheit
*/
$tipoTemperatura = 'c';
$c = 16;

if ($tipoTemperatura == 'c')  {
    $f = $c * 1.8 + 32;
    $k = $c + 273;
    // echo "A temperatura em farenheit é: {$f} e, a temperatura em Kelvin é: {$k}." ;
} else if ($tipoTemperatura == 'f')  {
    $c = $f * 1.8 - 32;
    $k = $f + 273;
    echo "A temperatura em farenheit é: {$c} e, a temperatura em Kelvin é: {$k}." ;
} else if ($tipoTemperatura == 'k')  {
    $f = $k * 1.8 + 32;
    $c = $k + 273;
    echo "A temperatura em farenheit é: {$f} e, a temperatura em Kelvin é: {$c}." ;
}

/*
    calcular o IMC
*/
$peso = 90;
$altura = 1.88;
$imc = $peso / ($altura * $altura);

$imc = round($imc, 2);

if ($imc <= 18){
    echo "O seu IMC é: {$imc} e é considerado magreza";
}
else if ($imc > 18 && $imc <= 25) {
    // normal
}
else if ($imc > 25 && $imc <= 30) {
    // sobrepeso
}
else if ($imc > 30 && $imc <= 40) {
    // obesidade
}

