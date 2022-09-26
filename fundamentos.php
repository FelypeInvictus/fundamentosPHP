<?php

$nome = $_REQUEST('nome');
$altura = $_REQUEST('altura');
$idade = $_REQUEST('idade');
$peso = $_REQUEST('peso');


// printf("Seu nome é %s ",$nome);

//$imc = calcularIMC($peso,$altura);

//Versão em função anonimo
// $imc = function($nome, $peso, $altura){
//     $ret = $peso / pow($altura,2);
//     return sprintf("%s tem IMC = %8.2f",$nome,$ret);
// };

function calcularIMC($peso, $altura){
    return $peso / pow($altura,2);
}

$imc = calcularIMC();
$classificao = classificarIMC($imc);

function classificarIMC($imc){
    $ret = 0.0;

    if ($imc < 18.5) {
        $ret = "baixo peso";
    } else if ($imc > 18.5 && $imc < 24.9){
        $ret = "peso normal";
    } else if ($imc > 24.9 && $imc < 29.9){
        $ret = "Excesso de peso";
    } else if ($imc > 29.9 && $imc < 34.9){
        $ret = "Obesidade classe 1";
    } else if ($imc > 34.9 && $imc < 39.9){
        $ret = "Obesidade classe 2";
} else if ($imc >= 40){
    $ret = "Obesidade classe 3";
}
return $ret;
}

printf("Seu nome é %s, sua idade é %d seu IMC é %8.2f, sua classificação %s",$nome,$idade,$imc, $classificao);
//$imc("Felype",70.5, 1.64);
//printf("Nome: %s  tem  IMC = %8.2f",$nome,$imc);

//Outro modo mais simples
// printf("%s\n", $imc("Felype", $peso, $altura));

