<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
        include 'contato.php';
        $nome  = $_POST['nome'];
        $email  = $_POST['email'];
        $menssagem = $_POST['menssagem'];
        $error   = 0;
        
        //verifica se o campo nome não está em branco
        if(empty($nome) or strstr($nome, '')==FALSE){
        echo "Favor digitar o seu nome corretamente.<br>";
        $erro = 1;
        }
        
        //verifica se o campo email está preenchido corretamente
        if(strlen($email)< 8 || strstr($email, '@')==FALSE){
        echo "favor digitar seu email corretamente.<br>";
        $erro = 1;
        }
        //verifica se o campo menssaem esta vazio
        if(empty($menssagem)){
        echo "favor entre com algma menssagem.<br>";
        }
        if($erro == 0){
        echo "Todos os dados foram preechidos.<br>";
        include 'insere.inc';
        ?>
    </body>
</html>