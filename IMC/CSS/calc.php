<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exemplo de Calculadora</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE">
</head>

<body>
    <div class="resultado">
<?php 
$a=$_POST["alt"];
$p=$_POST["peso"];
$imc=$p/$a**2;
if ($imc <16) echo " O seu IMC é: $imc ,Magreza grave";
elseif($imc>=16 and $imc<17) echo" O seu IMC é:$imc ,Magreza Moderada";
elseif($imc>=17 and $imc<18.5) echo" O seu IMC é:$imc ,Magreza Leve";
elseif($imc>=18.5 and $imc<25) echo" O seu IMC é:$imc , Saúdavel";
elseif($imc>=25 and $imc<30) echo" O seu IMC é:$imc ,Sobrepeso";
elseif($imc>=30 and $imc<35) echo" O seu IMC é:$imc ,Obesidade Grau 1";
elseif($imc>=35 and $imc<40) echo" O seu IMC é:$imc ,Obesidade Grau 2(severa)";
elseif($imc>=40) echo " O seu IMC é:$imc ,Obesidade Grau 3(morbida)"
?>
</html>