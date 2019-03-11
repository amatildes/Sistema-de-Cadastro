<?php
/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 03/03/19
 * Time: 22:14
 */
session_start();

require_once '../banco_de_dados/conexao.php';
require_once '../class/usuarios.php';

$obj= new usuarios();

$dados = array(
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS),
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS)
);
echo $obj->login($dados);