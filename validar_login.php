<?php

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($user == "" || $pass == "") 
        Header('Location: ./?pg=login.php&msg=Usuário ou senha não informados');
    
    include 'conexao.php';

    $sql = "SELECT distinct id, nome, email, senha FROM tb_usuario 
            WHERE email = '$usuario' AND senha = '$senha'";

    $result = $_conn->query($sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_array($result);

        session_start();
        $_SESSION["alj_artesanato_user_id"] = $user['id'];
        $_SESSION["alj_artesanato_user_nome"] = $user['nome'];
        $_SESSION["alj_artesanato_user_email"] = $user['email'];

        Header('Location: .');
    } 
    else 
        Header('Location: ./?pg=login.php&msg=Usuário ou senha inválidos');
