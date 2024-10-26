
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Acesse sua conta</h1>
    <form action="" method="POST">
        <p>
            <label>E-mail</label>
            <input type="text" name="email" required>
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha" required>
        </p>
        <button type="submit">Entrar</button>
    </form>

    <?php if (!empty($erro)): ?>
        <p style="color:red;"><?= htmlspecialchars($erro) ?></p>
    <?php endif; ?>
</body>
</html>
