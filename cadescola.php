<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Escola</title>
</head>
<body>
    <h1>Cadastro de Escola</h1>
    <form action="processa_escola.php" method="POST">
        <label for="CodEscola">Código da Escola:</label>
        <input type="text" id="CodEscola" name="CodEscola"><br><br>
        
        <label for="NomeEscola">Nome da Escola:</label>
        <input type="text" id="NomeEscola" name="NomeEscola"><br><br>
        
        <label for="cnpj">CNPJ:</label>
        <input type="text" id="cnpj" name="cnpj"><br><br>
        
        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade"><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>

    <footer>
        <?php include 'desenvolvedor.php'; ?>
    </footer>
</body>
</html>