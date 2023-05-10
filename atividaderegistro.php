<!DOCTYPE html>
<html>
    <head>
        <title>atividade</title>
        <meta charset="utf-8">
        <meta http-equiv="="X-UA-Compatible content="IE=edge">
        <meta name="viewport" content="width=device-widthm, initial-scale=1.0">
        <!-- <link rel="stylesheet" type="text/css" href="estiloatividade.css"> -->
    </head>
<body>
<form method="post" action="cadastrado.php">
       <!--  <fieldset>
            <legend>Identificação do usuário</legend> -->
            <label>Nome: <input type="text" name="nome" placeholder="Nome completo" id="nome"/> </label>
            <label>Email:<input type="text" name="email" placeholder="Digite se Email" id="email"/> </label>
            <label>cpf:  <input type="text" name="cpf" placeholder="8 dígitos" id="cpf"/> </label>
            <input type="submit" name="btn" value="cadastrar">
            <input type="reset" name="reset" value="Limpar">
        <!-- </fieldset>  -->
</form>
</body>
</html>