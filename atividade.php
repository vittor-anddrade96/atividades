<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADES</title>  

</head>
<body>  

    <?php
    if (isset($_POST['acao'])) {
        $nome = $_POST['nome'];
        $idade = (int)$_POST['idade'];

        if ($idade >= 18) {
            echo "Cadastro realizado com sucesso!";
        } else if ($idade < 0) {
            echo "Idade inválida.";
        } else {
            echo "Você precisa ter 18 anos ou mais para se cadastrar.";
        }
    }
    ?>
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade">
        <input type="submit" 
 name="acao" value="Enviar">
    </form>
</body>
</html>