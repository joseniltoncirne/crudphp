<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>

<?php 
include "../conexao.php";

$id = $_GET['id'] ?? '';
$sql = "SELECT * FROM `bebidas` WHERE id = $id";

$dados = mysqli_query($conn , $sql);

$linha = mysqli_fetch_assoc($dados);


?>
    <h1>Editar Bebida</h1>
    <main>
        <form action="editar_cadastro.php" method="POST">
            <p>
                <label for="nome">Nome da Bebida:</label>
                <input type="text" name="nome" required value="<?php echo $linha ['nome']?>">
            </p>
            <p>
                <label for="quantidade">Quantidade Adicionada:</label>
                <input type="int" name="quantidade" required value="<?php echo $linha ['quantidade']?>">
            </p>
            <p>
                <label for="extraviado">extraviado:</label>
                <input type="int" name="extraviado" required value="<?php echo $linha ['extraviado']?>">>
            </p>
            <p>
                <label for="data">Data de Resposição:</label>
                <input type="date" name="data" required value="<?php echo $linha ['data']?>">
            </p>
            <p>
                <input type="submit" value="Salvar Alterações">
                <input type = "hidden" name = "id" value = "<?php echo $linha ['id']?>">
            </p>
        </form>
    </main>
</body>
</html>