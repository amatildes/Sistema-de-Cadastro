<?php
/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 19/02/19
 * Time: 12:56
 */


require_once "conexao.php";
$obj = new Conexao();
$link = $obj->conexao();

    $querySelect = $link->query("select * from tb_clientes");
    while ($registros = $querySelect->fetch_assoc()):
        $id       = $registros['id'];
        $nome     = $registros['nome'];
        $email    = $registros['email'];
        $telefone = $registros['telefone'];

        echo "<tr>";
        echo "<td>$nome</td><td>$email</td><td>$telefone</td>
              <td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></td>
              <td><a href='delete.php?id=$id'><i class='material-icons'>delete</i></td>";
        echo "</tr>";

    endwhile;