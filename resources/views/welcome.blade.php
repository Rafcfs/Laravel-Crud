<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud em Laravel</title>
</head>
<body background="#a1a1a1" >
    <h1 align="center">Cadastro de Pessoa</h1>
    <form action="/insert" method="post">
    @csrf
        <label>Nome:</label>
        <input type="text" name="nome" margin-left="300">
        <br><label>Sobrenome:</label>
        <input type="text" name="sobrenome">
        <br><label>Data de Nascimento:</label>
        <input type="date" name="dtnascimento">
        <br><label>Naturalidade:</label>
        <input type="text" name="naturalidade">
        <br><label>Hobby:</label>
        <input type="text" name="hobby">
        <br><button>Enviar</button>
    </form>

</body>
</html>