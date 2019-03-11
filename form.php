<!doctype html>
<html lang="pt-br">

<!-- <head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

    <!-- CSS DO MATERIALIZE -->
    <!-- <link rel="stylesheet" href="materialize/css/materialize.min.css"> -->
<!-- </head> -->
    <?php
        require_once "includes/header.inc.php";
    ?>

    <?php
        require_once "includes/menu.inc.php";
    ?>
    <title></title>
    <body>
    

        <div class='row container'>
            <p>&nbsp;</p>
            <form action="banco_de_dados/login.php" method="POST" class="col s12">
                <fieldset class="formulario" style="padding: 15px">
                    <legend><img src="imagens/avatar__2.png" alt="[imagem]"  width="100"></legend>
                    <h5 class="light center">Cadastro de Admin</h5>


                    <!-- Campos -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" name="nome" id="nome" maxlength="40" required autofocus>
                        <label for="nome">Nome do Usuario</label>
                    </div>

                    <!-- Campos -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input type="text" name="email" id="email" maxlength="50" required>
                        <label for="nome">E-mail do Usuario</label>
                    </div>

                    <!-- Campos -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" name="password" id="password" maxlength="8" required>
                        <label for="password">Password</label>
                    </div>


                    <!-- Botão -->
                    <div class="input-field col s12">
                        <input type="submit" value="cadastrar" class="btn blue" >
                        <a href="view/conta.php" class="btn green">Já sou Cadastrado</a>

                    </div>

                </fieldset>
            </form>
        </div>
    </body>