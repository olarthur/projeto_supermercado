<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>

    <h1>Lista de Produtos</h1>

    <a href="index.php?acao=paginacadastrar"><button>Cadastrar Produto</button></a><br><br>

    <table border="1" style="width: 70%;text-align: center;">
        <tr style="color:white;background-color: firebrick;">
            <th>Código</th>
            <th>Produto</th>
            <th>QTD-Estoque</th>
            <th>Preço</th>
            <th>Categoria</th>
            <th colspan="2">Ação</th>
        </tr>
        <?php foreach($produtos as $produto): ?>
            <tr>
                <td><?php echo $produto['codigo'] ?></td>
                <td><?php echo $produto['produto'] ?></td>
                <td><?php echo number_format($produto['qtd_estoque']) ?></td>
                <td><?php echo number_format($produto['preco_unitario'],2,',','.'); ?></td>
                <td><?php echo $produto['categoria'] ?></td>

                <td><a href="index.php?acao=paginaalterar&codigo=<?php echo $produto['codigo'] ?>">ALTERAR</a></td>
                <td><a href="index.php?acao=excluir&codigo=<?php echo $produto['codigo'] ?>">EXCLUIR</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>