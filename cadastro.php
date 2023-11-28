<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>

<body>
    <h1>EXCELENTE</h1>
    <?php
    include "../conexao.php";

    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $extraviado = $_POST['extraviado'];
    $data = $_POST['data'];

    $sql = "INSERT INTO `bebidas`(`nome`, `quantidade`, `extraviado`, `data`) 
    VALUES ('$nome','$quantidade','$extraviado','$data')";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Bebida cadastrada com sucesso!</h2>";
    } else {
        echo "Bebida não cadastrada";
    };

    ?>

    <section>
        <a  href="../pesquisa.php">Pesquisa</a>
        <a  href="index.php">Cadastro</a>
    </section>
    
</body>

</html>