<?php
/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 03/03/19
 * Time: 22:12
 */
session_start();

require_once '../banco_de_dados/conexao.php';
class usuarios{
    public function login($dados){
        $obj = new Conexao();
        $link = $obj->conexao();
        $_SESSION['usuario'] = $dados[0];
        $_SESSION['id'] = self::trazerId($dados);

        $querySelect = "Select * FROM tb_usuarios WHERE nome='$dados[0]' AND password='$dados[1]' ";
echo $querySelect;
        $affected_rows = mysqli_query($link, $querySelect);

        if(mysqli_num_rows($affected_rows) > 0) :
            header("location:../index.php");
        else:
            header("location:../view/conta.php");
       endif;
    }
    public function trazerId($dados){
        $obj = new Conexao();
        $link = $obj->conexao();

        $sql = "Select id FROM tb_usuarios where usuario = $dados[0] and senha = $dados[1]";
        $affected_rows = mysqli_query($link, $sql);
        return mysqli_affected_rows($affected_rows)[0];
    }

}