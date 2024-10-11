<!DOCTYPE html>
<html>

<head>
    <title>Internet Banking</title>
</head>

<body>
    <form method="post">
        <label for="opcao">Escolha uma opção:</label>
        <select name="opcao" id="opcao">
            <option value="1">Ver Saldo</option>
            <option value="2">Depositar</option>
            <option value="3">Sacar</option>
            <option value="4">Sair</option>
        </select>

        <div id="valorInput" style="display: none;">
            <label for="valor">Valor:</label>
            <input type="number" name="valor" id="valor">
        </div>

        <input type="submit" value="Enviar">
    </form>

    <?php
    $saldo = 1000;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $opcao = $_POST['opcao'];

        switch ($opcao) {
            case '1':
                echo "Seu saldo atual é: R$ $saldo";
                break;
            case '2':
                $valor = $_POST['valor'];
                $saldo += $valor;
                echo "Depósito realizado com sucesso. Seu novo saldo é: R$ $saldo";
                break;
            case '3':
                $valor = $_POST['valor'];
                if ($valor <= $saldo) {
                    $saldo -= $valor;
                    echo "Saque realizado com sucesso. Seu novo saldo é: R$ $saldo";
                } else {
                    echo "Saldo insuficiente.";
                }
                break;
            case '4':
                echo "Obrigado por utilizar nossos serviços!";
                break;
            default:
                echo "Opção inválida.";
        }
    }
    ?>
    <script>
        const opcao = document.getElementById('opcao');
        const valorInput = document.getElementById('valorInput');

        opcao.addEventListener('change', () => {
            valorInput.style.display = opcao.value === '2' || opcao.value === '3' ? 'block' : 'none';
        });
    </script>
</body>

</html>