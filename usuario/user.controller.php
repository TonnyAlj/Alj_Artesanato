<?php
include '../conexao.php';

    if($_POST["senha1"] != $_POST["senha2"]){

        echo "As senhas não conferem!";

    }else{
        $sql = "INSERT INTO tb_usuario (
                nome,
                nascimento,
                sexo,
                cidade,
                uf,
                pais,
                email,
                telefone,
                senha
                ) VALUES (
                '" . $_POST["nome"] . "',
                '" . $_POST["nascimento"] . "',
                '" . $_POST["sexo"] . "',
                '" . $_POST["cidade"] . "',
                '" . $_POST["estado"] . "',
                '" . $_POST["pais"] . "',
                '" . $_POST["email"] . "',
                '" . $_POST["telefone"] . "',
                '" . $_POST["senha1"] . "'
                )";
        
        if( $result = mysqli_query($_conn, $sql)) {
            echo "O seu cadastro foi efetivado com sucesso";
            Header('Location: ../?pg=login.php&msg=Usuário cadastrado com sucesso!');
        } else {
            echo "Erro ao Inserir Usuário. ";
            echo "(" . $_conn->error . ")";
        }
        echo "<br/></br><a href=\"../?pg=user/form.php&action=insert\">[VOLTAR]</a>";
    }
?>