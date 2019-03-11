<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- CSS DO MATERIALIZE -->
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">
</head>
<title></title>
<body>
<!-- Formulario -->

<div class='row container'>
    <p>&nbsp;</p>
    <form action="../process/login.php" method="POST" class="col s12">
        <fieldset class="formulario" style="padding: 15px">
            <legend><img src="../imagens/avatar__2.png" alt="[imagem]" width="100"></legend>
            <h5 class="light center">Login de Admin</h5>


            <!-- Campos -->
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="nome" id="nome" maxlength="40" required autofocus>
                <label for="nome">usuario</label>
            </div>

            <!-- Campos -->
            <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input type="password" name="password" id="password" maxlength="8" required>
                <label for="password">Password</label>
            </div>


            <!-- Botão -->
            <div class="input-field col s12">
                <input type="submit" value="Entrar" class="btn blue">

            </div>

        </fieldset>
    </form>
</div>
</body>
