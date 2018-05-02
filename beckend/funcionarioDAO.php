<?php

include 'connection.php';

class funcionarioDAO{
    
    public static function salvar($f){
        $sql = "INSERT INTO tbl_func (nome,cargo,salario)";
        $sql .= " VALUES ('".$f->nome."','".$f->cargo."',".$f->salario.");";
        $c = new connection();
        mysqli_query($c->getConnection(),$sql);
    }

    public static function listar(){
        $sql = "SELECT * FROM tbl_func";
 
        $rs = mysqli_query(funcionarioDAO::getConnection(),$sql);
 
        $array = [];
 
        while($row = mysqli_fetch_assoc($rs)) {
            $f = new Funcionario();
            $f->id = $row['id'];
            $f->nome = $row['nome'];
            $f->cargo = $row['cargo'];
            $f->salario = $row['salario'];
 
            array_push($array,$f);
        }
 
        return $array;
    }

    

}