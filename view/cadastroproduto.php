<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($produtoData['codigo'])?"Alteração de Produto":"Cadastro de Produto"  ?></title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f8f8;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #2e7d32; 
            margin-top: 20px;
        }

        form {
            width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border: 2px solid #4caf50;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        form input[type="text"],
        form input[type="number"],
        form input[type="hidden"],
        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        form input[type="submit"] {
            background-color: #f57c00;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        form input[type="submit"]:hover {
            background-color: #ef6c00;
        }
    </style>
</head>
<body>

    <?php echo isset($produtoData['codigo'])?"<h1>Alteração de Produto</h1>":"<h1>Cadastro de Produto</h1>"  ?>
    
    <form action="index.php" method="POST">
        ID: <input type="text" name="txtcodigo" value="<?php echo isset($produtoData['codigo']) ? $produtoData['codigo'] : ''; ?>" readonly><br><br>

        Nome: <input type="text" name="txtproduto" value="<?php echo isset($produtoData['produto']) ? $produtoData['produto'] : ''; ?>"><br><br>

        Quantidade em Estoque: <input type="number" name="numqtdestoque" value="<?php echo isset($produtoData['qtd_estoque']) ? $produtoData['qtd_estoque'] : ''; ?>"><br><br>

        Preço Unitário: <input type="number" step="0.01" name="numprecounitario" value="<?php echo isset($produtoData['preco_unitario']) ? $produtoData['preco_unitario'] : ''; ?>"><br><br>

        Categoria: <input type="text" name="txtcategoria" value="<?php echo isset($produtoData['categoria']) ? $produtoData['categoria'] : ''; ?>"><br><br>

        <input type="hidden" name="acao" value="<?php echo isset($produtoData['codigo']) ? 'alterar' : 'cadastrar'; ?>">
        <input type="submit" value="<?php echo isset($produtoData['codigo']) ? 'Alterar Produto' : 'Cadastrar Produto'; ?>">
    </form>
</body>
</html>