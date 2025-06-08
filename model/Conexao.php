<?php

class Conexao {

    public static function obterConexao() {
        return new \PDO('mysql:host=localhost;dbname=dbprodutos','root','admin');
        echo "Banco de Dados Conectado com Sucesso!!!";
    }
}