<?php

include 'funcionario.php';
include 'funcionarioDAO.php';

$acao = $_GET['acao'];

if($acao == 'insert'){

    
    $f = new funcionario();
    $f->nome = $_POST['nome'];
    $f->cargo = $_POST['cargo'];
    $f->salario = $_POST['salario'];

    funcionarioDAO::salvar($f);
}