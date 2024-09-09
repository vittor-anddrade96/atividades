<!DOCTYPE html>
<html>
<head>
    <title>Notas</title>
</head>
<body>
    <form method="post">
        <label for="nota">Digite sua nota (0 a 10):</label>
        <input type="number" name="nota" id="nota" min="0" max="10">
        <input type="submit" value="Classificar">
    </form>

    <?php
    if (isset($_POST['nota'])) {
        $nota = $_POST['nota'];

        switch ($nota) {
            case 10:
                $classificacao = 'A';
                break;
            case 9:
                $classificacao = 'B';
                break;
            case 8:
            case 7:
                $classificacao = 'C';
                break;
            case 6:
            case 5:
                $classificacao = 'D';
                break;
            default:
                $classificacao = 'E';
        }

        echo "Sua nota é: $classificacao";
    }
    ?>
</body>
</html>