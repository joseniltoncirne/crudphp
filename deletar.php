<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>

<?php 
include "../conexao.php";

$id = $_GET['id'] ?? '';
$sql = "DELETE FROM `bebidas` WHERE id = $id";

$dados = mysqli_query($conn , $sql);

?>
    <h1>Bebida deletada</h1>
    <br>
    <h2>Volte para o local que deseja, clicando abaixo:</h2>
        <section>
        <a  href="../pesquisa.php">Pesquisa</a>
        <a  href="../cadastros/index.php">Cadastro</a>
        </section>
</body>
</html>