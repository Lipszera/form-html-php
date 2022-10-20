<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Login</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form action="server.php" method="post">
        <h2>Entre com seu Login</h2>

        <div>
            <label>Usuário</label>
            <input type="text" name="username" id="username" />
        </div>

        <div>
            <label>Senha</label>
            <input type="password" name="password" id="password" />
        </div>

        <button type="submit" id="buttonSend">Enviar</button>
        <button type="reset" id="buttonCancel">Limpar</button>
    </form>
</body>

</html>
