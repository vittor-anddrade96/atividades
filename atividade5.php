<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <input type="submit" value="Login">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        if ($usuario === "admin" && $senha === "1234") {
            echo "Login bem-sucedido!";
        } else {
            echo "Login ou senha incorretos.";
        }
    }
    ?>
</body>
</html>