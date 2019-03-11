<?php

require_once "conexao.php";
$obj = new Conexao();
$link = $obj->conexao();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

$querySelect = $link->query("SELECT email from tb_usuarios");

$array_emails = [];

while ($emails = $querySelect->fetch_assoc()):
    $emails_existentes = $emails['email'];
    array_push($array_emails, $emails_existentes);
endwhile;

if (in_array($email, $array_emails)) :
    $_SESSION['msg'] = "<p class='center red-text'>" . 'Já existe um cliente com esse email' . "</p>";
    header("location:../form.php");
    else:
        $queryInsert = $link->query("Insert into tb_usuarios values (default,'$nome', '$email', '$password')");

        $affected_rows = mysqli_affected_rows($link);
        if ($affected_rows > 0):
            $_SESSION['msg'] = "<p class= 'center green-text'>" . 'Admin cadastrado com sucesso' . "</p>";
            header("location:../");
        endif;

endif;