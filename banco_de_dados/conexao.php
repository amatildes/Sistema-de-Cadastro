<?php
class Conexao{
    public function conexao(){
        $link = new mysqli('localhost', 'root', '', 'db_cadastro');
//        $link->mysqli_set_charset('utf8');
        return $link;
    }
}

//$link = new mysqli('localhost','root','','db_cadastro');
//$link->set_charset('utf8');
