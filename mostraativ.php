<?php
include 'ativconecta.php';
$sql="SELECT * FROM aluno";
$resultado = mysqli_query($conexao, $sql);
$linhas = mysqli_num_rows($resultado);

for ($i = 0; $i < $linhas; $i++){
    $user= mysqli_fetch_array($resultado);
    echo $user['Nome'] . "<br />";
    echo $user['Email']. "<br />";
    echo $user['CPF'] . "<br />";}
?>