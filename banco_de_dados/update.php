<?php
session_start();
require_once 'conexao.php';
$obj = new Conexao();
$link = $obj->conexao();

$id = $_SESSION['id'];
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);

$queryUpdate= $link->query("UPDATE tb_clientes set nome='$nome', email='$email', telefone='$telefone' WHERE id='$id'");
$affected_row = mysqli_affected_rows($link);

if ($affected_row > 0){
    header("location:../consultas.php");
}

