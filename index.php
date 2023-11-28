<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<style>
    #index {
        color: black;
        text-align: center;
    }
</style>
<body>
    <h1>Cadastre seu estoque</h1>
    <main>
        <h2 id="index">Informações do produto</h2>
        <form action="cadastro.php" method="POST">
            <p>
                <label for="nome">Nome da Bebida:</label>
                <input type="text" name="nome" required>
            </p>
            <p>
                <label for="quantidade">Quantidade Adicionada:</label>
                <input type="number" name="quantidade" required>
            </p>
            <p>
                <label for="estoque">Extraviado:</label>
                <input type="number" name="extraviado" required>
            </p>
            <p>
                <label for="data">Data de Resposição:</label>
                <input type="date" name="data" required>
            </p>
            <p>
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </p>
        </form>
    </main>
</body>
</html>

