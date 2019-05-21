<?php
    $conexao = mysqli_connect('localhost', 'user', 'password', 'database');
    session_start();
    $logado = False;
    $user = Null;
    if(isset($_SESSION['type']) AND isset($_SESSION['email']) AND isset($_SESSION['senha'])){
        $type = $_SESSION['type'];
        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];
        $sql = mysqli_query($conexao, "SELECT * FROM Cliente WHERE email='$email' and senha='$senha'") or die(mysql_error());
        $rows = mysqli_num_rows($sql);
        if($rows>0){
            $user = mysqli_fetch_assoc($sql);
            $logado = True;
        }else{
            $sql = mysqli_query($conexao, "SELECT * FROM Loja WHERE email='$email' and senha='$senha'") or die(mysql_error());
            $rows = mysqli_num_rows($sql);
            if($rows>0){
                $user = mysqli_fetch_assoc($sql);
                $logado = True;
            }else{
                header('location: /logout.php');
            }
        }
    }
?>
