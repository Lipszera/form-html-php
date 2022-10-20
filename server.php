<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário Logado</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div>
        <center>
            <?php if (isset($_POST['username'])) : ?>
                <h3>Login com sucesso!</h3>
                <h3>Bem vindo, <?= $_POST['username'] ?></h3>
            <?php endif; ?>
        </center>
    </div>

</body>

</html>
