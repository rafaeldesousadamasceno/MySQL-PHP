<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão do PHP com MySQL</title>
</head>

<body>
    <h1>Cadastrar Usuário</h1>
    <form action="conexao.php" method="post">
        <div>
            <label for="name">Nome: </label>
            <input type="text" name="name" id="name" placeholder="Digite seu Nome Completo">
        </div>
        <div>
            <label for="name">Email: </label>
            <input type="email" name="email" id="email" placeholder="Digite seu melhor email">
        </div>
        <div>
            <input type="submit" value="Cadastrar">
        </div>
    </form>

</body>

</html>