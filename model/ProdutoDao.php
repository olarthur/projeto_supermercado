<?php

require_once __DIR__ . "/Conexao.php";

class ProdutoDao {

    public function buscarTodosProdutos() {

        $pdo = Conexao::obterConexao();

        $statement = $pdo -> query('SELECT * FROM Produto');

        return $statement -> fetchAll(\PDO::FETCH_ASSOC);
    }

    public function cadastrar($objProduto) {

        //CONEXÃO COM O BANCO DE DADOS
        $pdo = Conexao::obterConexao();

        //PREPARA A INSTRUÇÃO SQL
        $stmt = $pdo -> prepare("INSERT INTO Produto(produto, qtd_estoque, preco_unitario, categoria) VALUES(:produto, :qtd_estoque, :preco_unitario, :categoria)");
        $stmt -> bindParam(':produto', $objProduto -> getProduto());
        $stmt -> bindParam(':qtd_estoque', $objProduto -> getQtdEstoque());
        $stmt -> bindParam(':preco_unitario', $objProduto -> getPrecoUnitario());
        $stmt -> bindParam(':categoria', $objProduto -> getCategoria());

        //EXECUTA A INSTRUÇÃO NO BANCO DE DADOS
        $stmt -> execute();
    }

    public function excluir($objProduto) {

        //CONEXÃO COM O BANCO DE DADOS
        $pdo = Conexao::obterConexao();
    
        $stmt = $pdo -> prepare("DELETE FROM Produto WHERE codigo = :codigo");
        $stmt -> bindParam(':codigo', $objProduto -> getCodigo());

        $stmt -> execute();
    
    }

    public function buscarProdutoPorCodigo($codigo) {

        $pdo = Conexao::obterConexao();

        $stmt = $pdo -> prepare("SELECT * FROM Produto WHERE codigo = :codigo");
        $stmt -> bindParam(':codigo', $codigo);
        $stmt -> execute();

        return $stmt -> fetch(\PDO::FETCH_ASSOC);
    }


    public function alterar($objProduto) {

        $pdo = Conexao::obterConexao();

        $stmt = $pdo -> prepare("UPDATE Produto SET produto = :produto, qtd_estoque = :qtd_estoque, preco_unitario = :preco_unitario, categoria = :categoria WHERE codigo = :codigo");

        $codigo = $objProduto -> getCodigo(); 
        $produto = $objProduto -> getProduto();
        $qtdEstoque = $objProduto -> getQtdEstoque();
        $precoUnitario = $objProduto -> getPrecoUnitario();
        $categoria = $objProduto -> getCategoria();

        $stmt -> bindParam(':codigo', $codigo);
        $stmt -> bindParam(':produto', $produto);
        $stmt -> bindParam(':qtd_estoque', $qtdEstoque);
        $stmt -> bindParam(':preco_unitario', $precoUnitario);
        $stmt -> bindParam(':categoria', $categoria);

        $stmt -> execute();
    }
}