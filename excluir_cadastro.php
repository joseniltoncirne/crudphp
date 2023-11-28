<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Cadastro</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>
    <h1>Deletado</h1>
    <?php
    include "../conexao.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $extraviado = $_POST['extraviado'];
    $data = $_POST['data']; 

$sql = "DELETE FROM `bebidas` WHERE 0";

    if(mysqli_query($conn , $sql)){
        echo "<h2>Bebida excluida com sucesso!</h2>";
    }else{
        echo "<h2>Bebida não excluida</h2>";
    };

    ?>

<section>
        <a  href="../pesquisa.php">Pesquisa</a>
        <a  href="../cadastros/index.php">Cadastro</a>
    </section>
</body>
</html>