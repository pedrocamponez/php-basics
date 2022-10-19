<?php 
//Interface é um guia de implementação de uma classe
//Serve como uma organização, padronização apenas. Se der um erro, vamos saber exatamente onde estava o erro e é fácil resolver
interface Database {
    public function listarProdutos();

    public function adicionarProduto();

    public function alterarProduto();

    public function removerProdutos ();
}

class MysqlDB implements Database {
    public function listarProdutos() {

    }
    public function adicionarProduto() {

    }
    public function alterarProduto() {

    }
    public function removerProdutos() {

    }

}
class OracleDB implements Database { //aqui falta 1 método da interface (adicionarProduto), e o proprio VSCode aponta o erro
    public function listarProdutos() {

    }

    public function alterarProduto() {

    }
    public function removerProdutos() {

    }

}

$db = new OracleDB();
$db->adicionarProduto(); 