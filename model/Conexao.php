<?php

class Conexao {

    public static function obterConexao() {
        return new \PDO('mysql:host=localhost;dbname=dbprodutos','root','080441OliveiraArthur@');
        echo "Banco de Dados Conectado com Sucesso!!!";
    }
}