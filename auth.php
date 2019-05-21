<?php
    require('connect.php');
    function emailExists($email){
        global $conexao;
        $sql = mysqli_query($conexao, "SELECT * FROM Cliente WHERE email='$email'") or die(mysql_error());
        $rows = mysqli_num_rows($sql);
        if($rows>0){
            return true;
        }else{
            $sql = mysqli_query($conexao, "SELECT * FROM Loja WHERE email='$email'") or die(mysql_error());
            $rows = mysqli_num_rows($sql);
            if($rows>0){
                return true;
            }else{
                return false;
            }
        }
    }
    if(isset($_POST['rua']) AND isset($_POST['numero']) AND isset($_POST['bairro']) AND isset($_POST['cidade']) AND isset($_POST['cep']) AND isset($_POST['estado'])){
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        if(isset($_POST['nome']) AND isset($_POST['sobrenome']) AND isset($_POST['nascimento']) AND isset($_POST['email']) AND isset($_POST['senha'])){
            $cpf = $_POST['cpf'];
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $nascimento = $_POST['nascimento'];
            $email = $_POST['email'];
            if(emailExists($email)) header('location: /error.php');
            $senha = $_POST['senha'];
            $query1 = mysqli_query($conexao, "INSERT INTO Endereco (rua, numero, bairro, cep, cidade, estado) VALUES ('$rua', '$numero', '$bairro', '$cep', '$cidade', '$estado')") or die(mysql_error());
            $endereco_id = mysqli_insert_id($conexao);
            $query2 = mysqli_query($conexao, "INSERT INTO Cliente (endereco_id, cpf, nome, sobrenome, nascimento, email, senha) VALUES ('$endereco_id', '$cpf', '$nome', '$sobrenome', '$nascimento', '$email', '$senha')") or die(mysql_error());
            session_start();
            $_SESSION['type'] = 'client';
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('location: /index.php');
        }elseif(isset($_POST['cnpj']) AND isset($_POST['nome']) AND isset($_POST['email']) AND isset($_POST['senha'])){
            $cnpj = $_POST['cnpj'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            if(emailExists($email)) header('location: /error.php');
            $senha = $_POST['senha'];
            $query1 = mysqli_query($conexao, "INSERT INTO Endereco (rua, numero, bairro, cep, cidade, estado) VALUES ('$rua', '$numero', '$bairro', '$cep', '$cidade', '$estado')") or die(mysql_error());
            $endereco_id = mysqli_insert_id($conexao);
            $query2 = mysqli_query($conexao, "INSERT INTO Loja (endereco_id, cnpj, nome, email, senha) VALUES ('$endereco_id', '$cnpj', '$nome', '$email', '$senha')") or die(mysql_error());
            session_start();
            $_SESSION['type'] = 'store';
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('location: /index.php');
        }
    }elseif(isset($_POST['email']) AND isset($_POST['senha'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = mysqli_query($conexao, "SELECT * FROM Cliente WHERE email='$email' and senha='$senha'") or die(mysql_error());
        $rows = mysqli_num_rows($sql);
        if($rows>0){
            session_start();
            $_SESSION['type'] = 'client';
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('location: /index.php');
        }else{
            $sql = mysqli_query($conexao, "SELECT * FROM Loja WHERE email='$email' and senha='$senha'") or die(mysql_error());
            $rows = mysqli_num_rows($sql);
            if($rows>0){
                session_start();
                $_SESSION['type'] = 'store';
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                header('location: /index.php');
            }else{
                header('location: /error.php');
            }
        }
    }else {
        header('location: /error.php');
    }
?>