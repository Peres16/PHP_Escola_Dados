<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Mensalidade</title>
</head>
<body>
    <h1>Cadastro de Mensalidade</h1>
    <form action="" method="POST">
        <label for="CodMen">Código da Mensalidade:</label>
        <input type="text" id="CodMen" name="CodMen"><br><br>
        
        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso"><br><br>
        
        <label for="valor">Valor:</label>
        <input type="text" id="valor" name="valor"><br><br>
        
        <label for="aumento">Aumento (%):</label>
        <input type="text" id="aumento" name="aumento"><br><br>

        <input type="submit" value="Calcular e Cadastrar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $valor = floatval($_POST['valor']);
        $aumento = floatval($_POST['aumento']);
        $total = $valor + ($valor * ($aumento / 100));

        echo "<p>Valor Original: R$ " . number_format($valor, 2, ',', '.') . "</p>";
        echo "<p>Percentual de Aumento: " . number_format($aumento, 2, ',', '.') . "%</p>";
        echo "<p>Valor Total com Aumento: R$ " . number_format($total, 2, ',', '.') . "</p>";
    }
    ?>

    <footer>
        <?php include 'desenvolvedor.php'; ?>
    </footer>
</body>
</html>