<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Simples</title>
</head>
<body>
    <form method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1">
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2">
        <label for="operacao">Operação:</label>
        <select name="operacao" id="operacao">
            <option value="+">Soma</option>
            <option value="-">Subtração</option>
            <option value="*">Multiplicação</option>
            <option value="/">Divisão</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacao'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacao = $_POST['operacao'];
    
        switch ($operacao) {
            case '+':
                $resultado = $num1 + $num2;
                break;
            case '-':
                $resultado = $num1 - $num2;
                break;
            case '*':
                $resultado = $num1 * $num2;
                break;
            case '/':
                if ($num2 == 0) {
                    $resultado = "Divisão por zero não é permitida.";
                } else {
                    $resultado = $num1 / $num2;
                }
                break;
            default:
                $resultado = "Operação inválida.";
        }
    
        echo "O resultado é: $resultado";
    }
    ?>
</body>
</html>