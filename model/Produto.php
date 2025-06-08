<?php

namespace model;
require_once "Conexao.php";
use Conexao;

class Produto {
    
    private $codigo;
    private $produto;
    private $qtdEstoque;
    private $precoUnitario;
    private $categoria;

    public function __construct($codigo, $produto, $qtdEstoque, $precoUnitario, $categoria) {
        $this -> codigo = $codigo;
        $this -> produto = $produto;
        $this -> qtdEstoque = $qtdEstoque;
        $this -> precoUnitario = $precoUnitario;
        $this -> categoria = $categoria;
    }

    public function getCodigo() {
        return $this -> codigo;
    }

    public function getProduto() {
        return $this -> produto;
    }

    public function getQtdEstoque() {
        return $this -> qtdEstoque;
    }

    public function getPrecoUnitario() {
        return $this -> precoUnitario;
    }

    public function getCategoria() {
        return $this -> categoria;
    }
}