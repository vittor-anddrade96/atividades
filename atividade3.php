<!DOCTYPE html>
<html>
<head>
    <title>Par ou Ímpar</title>
</head>
<body>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Verificar">
    </form>

    <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        if ($numero % 2 == 0) {
            echo "$numero é par.";
        } else {
            echo "$numero é ímpar.";
        }
    }
    ?>
</body>
</html>