<?php

echo "<h1> cadastrado </h1>";

$serv="localhost";
$user="root";
$pass="";
$db="atividade";

$conexao=mysqli_connect($serv,$user,$pass,$db);

if(!$conexao) 
    echo "conexão falhou.";
else
    echo "conexão teve sucesso";



echo "cadastrado";
$nome=$_POST["nome"];
$email=$_POST["email"];
$cpf=$_POST["cpf"];
$sql="INSERT INTO aluno(Nome,Email,CPF) values ('$nome','$email','$cpf')";
$res= mysqli_query($conexao,$sql);
if($res)
    echo "usuario $nome incluido com sucesso";
else
    echo "Ocorreu um erro";
mysqli_close($conexao);
?>