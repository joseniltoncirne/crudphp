<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="estilos/styletabela.css">
</head>

<body>

  <?php

  $pesquisa = $_POST['busca'] ?? '';
  include "conexao.php";

  $sql = "SELECT * FROM `bebidas` WHERE 1";
  $dados = mysqli_query($conn, $sql);
  ?>
  <br><br>
  <h1>Confira seus Cadastros</h1>
  <br>
  <section>
    <a id="nav" href="cadastros/index.php">Cadastro</a>
  </section>
  <br><br>

  <table>
    <thead>
      <tr>
        <th>Ordem</th>
        <th>Nome</th>
        <th>Quantidade</th>
        <th>extraviado</th>
        <th>Data</th>
        <th>Funções</th>
      </tr>
    </thead>
    <tbody>
      <?php

      while ($linha = mysqli_fetch_assoc($dados)) {
        $id = $linha['id'];
        $nome = $linha['nome'];
        $quantidade = $linha['quantidade'];
        $extraviado = $linha['extraviado'];
        $data = $linha['data'];
        echo "<tr>
                  <td> $id </td>
                  <td>$nome</td>
                  <td>$quantidade</td>
                  <td>$extraviado</td>
                  <td>$data</td>
                  <td class='acoes'>
                  <a href = 'read.php?id=$id'> <button id='read'> Ler Mais </button>
                  <a href ='edit_cadastro/editar.php?id=$id'> <button id='editar'> Editar </button> 
                  <a href ='excluir_cadastro/deletar.php?id=$id'> <button onclick='carDelete(event)' id='deletar'> Deletar </button> 
                  
                  </td>
              </tr>";
      }
      ?>
    </tbody>
  </table>
  <script>
    function carDelete(event) {
      let confirmacao = confirm("Deseja realmente excluir este produto?!");

      if (confirmacao === false) {
        console.log("Produto excluído!");
        event.preventDefault(); // Impede o link de ser seguido
      }
      // Se confirmacao for true, o link será seguido normalmente
    }
  </script>
</body>

</html>