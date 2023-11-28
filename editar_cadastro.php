<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>
    <h1>MARAVILHA!!</h1>
    <?php
    include "../conexao.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $extraviado = $_POST['extraviado'];
    $data = $_POST['data']; 

$sql = "UPDATE `bebidas`
 set `id` = '$id' , `nome`='$nome',`quantidade`='$quantidade',`extraviado`='$extraviado',`data`='$data' WHERE id = $id";

    if(mysqli_query($conn , $sql)){
        echo "<h2>Bebida alterada com sucesso!</h2>";
    }else{
        echo "<h2>Bebida não alterada</h2>";
    };

    ?>
    <section>
        <a  href="../pesquisa.php">Pesquisa</a>
        <a  href="../cadastros/index.php">Cadastro</a>
    </section>
</body>
</html>