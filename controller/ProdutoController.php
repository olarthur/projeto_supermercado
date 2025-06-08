<?php

require_once __DIR__ . "/../model/Produto.php";
require_once __DIR__ . "/../model/ProdutoDao.php";

use \model\Produto;

class ProdutoController {

    public function listarProdutos() {

        $produto = new Produto(null, null, null, null, null);
        $produtoDao = new ProdutoDao();

        $produtos = $produtoDao -> buscarTodosProdutos();

        include "view/listadeprodutos.php";        
    }

    public function mostrarPaginaCadastro() {
        include __DIR__ . "/../view/cadastroproduto.php";
    }

    public function cadastrar() {

        $codigo = null;
        $produto = $_POST['txtProduto'];
        $qtdEstoque = $_POST['numQtdEstoque'];
        $precoUnitario = $_POST['numPrecoUnitario'];
        $categoria = $_POST['txtCategoria'];

        $produtoModel = new Produto($codigo, $produto, $qtdEstoque, $precoUnitario, $categoria);

        $produtoDao = new ProdutoDao();
        $produtoDao -> cadastrar($produtoModel);

        header('Location: index.php');
        exit();
    }

    public function excluir(){

        if(isset($_GET['codigo'])) {

            $codigo = $_GET['codigo'];

            $produto = new Produto($codigo, null, null, null, null);

            $produtoDao = new ProdutoDao();
            $produtoDao -> excluir($produto);

            header("Location: index.php");
            exit();
        }

    }

    public function mostrarPaginaAlterar(){

        if(isset($_GET['codigo'])) {

            $codigo = $_GET['codigo'];

            $produtoModel = new Produto(null, null, null, null, null);

            $produtoDao = new ProdutoDao();
            $produtoData = $produtoDao -> buscarProdutoPorCodigo($codigo);

            include __DIR__ . "/../view/cadastroproduto.php";
        }
    }

    public function alterar() {

        $codigo = $_POST['txtcodigo'];
        $produto = $_POST['txtProduto'];
        $qtdEstoque = $_POST['numQtdEstoque'];
        $precoUnitario = $_POST['numPrecoUnitario'];
        $categoria = $_POST['txtCategoria'];

        $produtoModel = new Produto($codigo, $produto, $qtdEstoque, $precoUnitario, $categoria);

        $produtoDao = new ProdutoDao();
        $produtoDao -> alterar($produtoModel);

        header("Location: index.php");
        exit();
    }
}
