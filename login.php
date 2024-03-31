<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Login</h1>
    <?php if(isset($error)) { ?>
        <div><?php echo $error; ?></div>
    <?php } ?>
    <form method="post" action="new.php">
        LOGIN: <input type="text" name="name" required><br>
        SENHA: <input type="password" name="password" required><br>
        <input type="submit" value="Logar">
    </form>
    <br>
    <a href="cadastro.php">Ainda não é Cadastrado?</a>
</body>
</html>
