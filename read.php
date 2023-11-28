<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saiba Mais</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<style>
    div{
        text-align: center;
    }
    div > p{
        text-align: center;
        color: white;
    }
    h1, h2, h3, h4 {
        color: white;
        text-shadow: 3px 3px 0px black;
    }
</style>
<body>

    <?php
    include "conexao.php";

    if (isset($_GET["id"])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM bebidas WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        $dados = mysqli_fetch_assoc($result);
    };
    ?>
    <br><br><br>
    <div>
        <h1 class="read"> Nome da bebida </h1>
        <p> <?php echo $dados["nome"] ?>
        <h2 class="read"> Quantidade Adicionada </h2>
        <p> <?php echo $dados["quantidade"] ?>
        <h3 class="read"> extraviado </h3>
        <p> <?php echo $dados["extraviado"] ?>
        <h4 class="read"> Data de Resposição </h4>
        <p> <?php echo $dados["data"] ?>
    </div>
    <section>
        <a href="pesquisa.php">Pesquisa</a>
        <a href="cadastros/index.php">Cadastro</a>
    </section>
</body>

</html>