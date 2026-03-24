<?php

echo "<p> IMC </P>";

$peso = 70;
$altura = 1.70;

$imc = $peso / $altura ** 2; 


$imc = 39;

echo "O IMC é: $imc";


if ($imc < 16) {
echo " Magreza grau III";
}
else if ($imc >= 16 && $imc <= 16.9 ) {
echo " Magreza grau II";
}

else if ($imc >= 17 && $imc <= 18.4 ) {
echo " Magreza grau I";
}

else if ($imc >= 18.5 && $imc <= 24.9 ) {
echo " Eutrofia";
}

else if ($imc >= 25 && $imc <= 29.9 ) {
echo " Pré-obesidade";
}

else if ($imc >= 30 && $imc <= 34.9 ) {
echo " Obesidade moderada (grau I)";
}

else if ($imc >= 35 && $imc <= 39.9 ) {
echo " Obesidade severa (grau II)";
}

else{
echo " Obesidade muito severa (grau III)";

}

?>
