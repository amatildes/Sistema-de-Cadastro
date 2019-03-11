<?php
require_once 'conexao.php';
$obj = new Conexao();
$link = $obj->conexao();

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$queryDelete = $link->query("DELETE FROM tb_clientes WHERE id='$id'");
if (mysqli_affected_rows($link)> 0):
    header("location:../consultas.php");
endif;

