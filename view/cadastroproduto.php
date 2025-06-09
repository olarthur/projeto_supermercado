<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($produtoData['codigo'])?"Alteração de Produto":"Cadastro de Produto"  ?></title>
</head>
<body>

    <?php echo isset($produtoData['codigo'])?"<h1>Alteração de Produto</h1>":"<h1>Cadastro de Produto</h1>"  ?>
    
    <form action="index.php" method="POST">
        Código: <input type="text" name="txtcodigo" value="<?php echo isset($produtoData['codigo']) ? $produtoData['codigo'] : ''; ?>" readonly><br><br>

        Produto: <input type="text" name="txtproduto" value="<?php echo isset($produtoData['produto']) ? $produtoData['produto'] : ''; ?>"><br><br>

        Quantidade em Estoque: <input type="number" name="numqtdestoque" value="<?php echo isset($produtoData['qtd_estoque']) ? $produtoData['qtd_estoque'] : ''; ?>"><br><br>

        Preço Unitário: <input type="number" step="0.01" name="numprecounitario" value="<?php echo isset($produtoData['preco_unitario']) ? $produtoData['preco_unitario'] : ''; ?>"><br><br>

        Categoria: <input type="text" name="txtcategoria" value="<?php echo isset($produtoData['categoria']) ? $produtoData['categoria'] : ''; ?>"><br><br>

        <input type="hidden" name="acao" value="<?php echo isset($produtoData['codigo']) ? 'alterar' : 'cadastrar'; ?>">
        <input type="submit" value="<?php echo isset($produtoData['codigo']) ? 'Alterar Produto' : 'Cadastrar Produto'; ?>">
    </form>
</body>
</html>