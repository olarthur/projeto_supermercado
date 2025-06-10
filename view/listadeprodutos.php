<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            background-color: white;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
            font-size: 14px;
        }

        table th {
            background-color: #d32f2f; 
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        a button, table a {
            display: inline-block;
            padding: 8px 12px;
            margin: 4px 2px;
            text-decoration: none;
            color: white;
            background-color: #4caf50;
            border-radius: 4px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        a button:hover, table a:hover {
            background-color: #388e3c;
        }

        table a {
            padding: 6px 10px;
        }

        table a[href*="paginaalterar"] {
            background-color: #1976d2;
        }

        table a[href*="paginaalterar"]:hover {
            background-color: #1565c0;
        }

        table a[href*="excluir"] {
            background-color: #d32f2f;
        }

        table a[href*="excluir"]:hover {
            background-color: #c62828;
        }
    </style>
</head>
<body>

    <h1>Lista de Produtos</h1>

    <a href="index.php?acao=paginacadastrar"><button>Cadastrar Produto</button></a><br><br>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Quantidade em Estoque</th>
            <th>Preço Unitário</th>
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