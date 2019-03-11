<?php

session_start();
require_once './conexao.php';
    $obj = new Conexao();
    $link = $obj->conexao();

$nome      = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email     = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone  = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);

$querySelect = $link->query("SELECT email FROM tb_clientes");

$array_emails = [];

//Listando os emails

while ($emails = $querySelect->fetch_assoc()):
    $emails_existentes = $emails['email'];
    array_push($array_emails,$emails_existentes);

    // Colacando os emails listados pra dentro do array push

endwhile;

if (in_array($email, $array_emails)) :
    $_SESSION['msg'] = "<p class='center red-text'>" . 'Já existe um cliente com esse email' . "</p>";
    header("location:../");

else :
    $queryInsert = $link->query("insert into tb_clientes values(default,'$nome','$email','$telefone')");
    $affected_row = mysqli_affected_rows($link);

    if ($affected_row > 0):
        $_SESSION['msg'] = "<p class= 'center green-text'>" . 'Cliente cadastrado com sucesso' . "</p>";
        header("location:../");
    endif;
endif;