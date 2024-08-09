<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <h1>Cadastro de Aluno</h1>
    <form action="processa_aluno.php" method="POST">
        <label for="CodAluno">Código do Aluno:</label>
        <input type="text" id="CodAluno" name="CodAluno"><br><br>
        
        <label for="aluno">Nome do Aluno:</label>
        <input type="text" id="aluno" name="aluno"><br><br>
        
        <label for="rg">RG:</label>
        <input type="text" id="rg" name="rg"><br><br>
        
        <label for="DtNascimento">Data de Nascimento:</label>
        <input type="date" id="DtNascimento" name="DtNascimento"><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>

    <footer>
        <?php include 'desenvolvedor.php'; ?>
    </footer>
</body>
</html>